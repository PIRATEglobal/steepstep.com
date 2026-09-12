<?php
declare(strict_types=1);

$secret = 'test-secret-for-contact-security';
putenv('STEEPSTEP_FORM_SECRET=' . $secret);
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

$challenge_payload = encode_payload(['a' => 4, 'b' => 7, 'expires' => $now + 600]);
$challenge = $challenge_payload . '.' . hash_hmac('sha256', $challenge_payload, $secret);
check(ss_captcha_valid($challenge, 11, $secret), 'valid captcha rejected');
check(!ss_captcha_valid($challenge, 12, $secret), 'wrong captcha accepted');

check(ss_header_safe("Name\r\nBcc: attacker@example.com") === 'Name Bcc: attacker@example.com', 'header injection was not neutralised');

$identity = 'contact-security-test-' . bin2hex(random_bytes(8));
check(ss_rate('test', $identity, 1, 86400, $secret), 'first rate-limit attempt rejected');
check(!ss_rate('test', $identity, 1, 86400, $secret), 'rate-limit boundary was not enforced');
foreach (glob(__DIR__ . '/../public/api/.rate-limit/steepstep_rl_*.json') ?: [] as $file) {
    if (is_file($file)) unlink($file);
}

$contact_source = file_get_contents(__DIR__ . '/../public/api/contact.php');
check(is_string($contact_source), 'contact endpoint could not be read');
foreach (['HTTP_ORIGIN', 'form_started', "!empty(\$_POST['website'])", 'ss_captcha_valid', 'ss_header_safe', 'ss_rate', "mail('contact@steepstep.com'"] as $guard) {
    check(str_contains($contact_source, $guard), "contact guard missing: {$guard}");
}

echo "Contact security checks passed.\n";
