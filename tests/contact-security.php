<?php
declare(strict_types=1);

$secret = 'test-secret-for-contact-security';
putenv('STEEPSTEP_FORM_SECRET=' . $secret);
$rate_directory = sys_get_temp_dir() . '/steepstep-contact-security-test';
if (!is_dir($rate_directory)) mkdir($rate_directory, 0700, true);
putenv('STEEPSTEP_RATE_LIMIT_DIR=' . $rate_directory);
require __DIR__ . '/../public/api/form-abuse.php';

function check(bool $condition, string $message): void {
    if (!$condition) {
        throw new RuntimeException($message);
    }
}
function encode_payload(array $payload): string {
    return rtrim(strtr(base64_encode((string) json_encode($payload)), '+/', '-_'), '=');
}

$now = time();
$token_payload = encode_payload([
    'form' => 'contact',
    'issued' => $now,
    'expires' => $now + 600,
    'nonce' => str_repeat('a', 32),
]);
$token = $token_payload . '.' . hash_hmac('sha256', $token_payload, $secret);
check(ss_token_valid($token, $secret, 'contact'), 'valid form token rejected');
check(!ss_token_valid($token . 'x', $secret, 'contact'), 'tampered form token accepted');
check(!ss_token_valid($token, 'wrong-secret', 'contact'), 'wrong secret accepted');
check(!ss_origin_allowed('http://127.0.0.1:4322', ''), 'local origin accepted outside development mode');
putenv('STEEPSTEP_LOCAL_DEV=1');
putenv('STEEPSTEP_LOCAL_ORIGIN_PORT=4322');
check(ss_origin_allowed('http://127.0.0.1:4322', ''), 'development origin rejected');
putenv('STEEPSTEP_LOCAL_ORIGIN_PORT=4323');
check(ss_origin_allowed('http://127.0.0.1:4323', ''), 'configured development origin rejected');
check(!ss_origin_allowed('https://evil.example', ''), 'evil origin accepted in development mode');
putenv('STEEPSTEP_LOCAL_DEV=0');

$challenge_payload = encode_payload(['a' => 4, 'b' => 7, 'expires' => $now + 600]);
$challenge = $challenge_payload . '.' . hash_hmac('sha256', $challenge_payload, $secret);
check(ss_captcha_valid($challenge, 11, $secret), 'valid captcha rejected');
check(!ss_captcha_valid($challenge, 12, $secret), 'wrong captcha accepted');

check(ss_header_safe("Name\r\nBcc: attacker@example.com") === 'Name Bcc: attacker@example.com', 'header injection was not neutralised');

$identity = 'contact-security-test-deterministic';
$rate_file = $rate_directory . '/steepstep_rl_' . hash_hmac('sha256', 'test|' . $identity, $secret) . '.json';
if (is_file($rate_file)) unlink($rate_file);
check(ss_rate('test', $identity, 1, 86400, $secret), 'first rate-limit attempt rejected');
check(!ss_rate('test', $identity, 1, 86400, $secret), 'rate-limit boundary was not enforced');
if (is_file($rate_file)) unlink($rate_file);
rmdir($rate_directory);

$contact_source = file_get_contents(__DIR__ . '/../public/api/contact.php');
check(is_string($contact_source), 'contact endpoint could not be read');
foreach (['HTTP_ORIGIN', 'form_started', "!empty(\$_POST['website'])", 'ss_captcha_valid', 'ss_header_safe', 'ss_rate', "mail('contact@steepstep.com'"] as $guard) {
    check(strpos($contact_source, $guard) !== false, "contact guard missing: {$guard}");
}

$api_htaccess = file_get_contents(__DIR__ . '/../public/api/.htaccess');
check(is_string($api_htaccess), 'API access rules could not be read');
check(strpos($api_htaccess, 'Require all denied') === false, 'incompatible Apache Require rule present');
check(strpos($api_htaccess, '<FilesMatch "^(form-abuse|form-secret)\\.php$">') !== false, 'protected API files rule missing');
check(strpos($api_htaccess, 'Deny from all') !== false, 'protected API files are not denied');
$rate_htaccess = file_get_contents(__DIR__ . '/../public/api/.rate-limit/.htaccess');
check(is_string($rate_htaccess), 'rate-limit access rules could not be read');
check(strpos($rate_htaccess, 'Require all denied') === false, 'incompatible rate-limit authorization rule present');
check(strpos($rate_htaccess, 'Deny from all') !== false, 'rate-limit files are not denied');

echo "Contact security checks passed.\n";
