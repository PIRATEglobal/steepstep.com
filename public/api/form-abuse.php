<?php
declare(strict_types=1);
if (basename((string) ($_SERVER['SCRIPT_FILENAME'] ?? '')) === basename(__FILE__)) { http_response_code(404); exit; }
function ss_secret(): string {
    $configured = trim((string) (getenv('STEEPSTEP_FORM_SECRET') ?: ($_SERVER['STEEPSTEP_FORM_SECRET'] ?? '')));
    if ($configured !== '') return $configured;
    $secret_file = __DIR__ . '/form-secret.php';
    if (!is_file($secret_file) || !is_readable($secret_file)) return '';
    $file_secret = require $secret_file;
    return is_string($file_secret) ? trim($file_secret) : '';
}
function ss_json(int $status, string $message): void { http_response_code($status); echo json_encode(['status' => $status < 400 ? 'success' : 'error', 'message' => $message], JSON_UNESCAPED_UNICODE); exit; }
function ss_header_safe(string $value): string { return trim((string) preg_replace('/[\r\n\x00-\x1F]+/', ' ', $value)); }
function ss_token_valid(string $token, string $secret, string $form): bool { $parts = explode('.', $token, 2); if (count($parts) !== 2 || $secret === '' || !hash_equals(hash_hmac('sha256', $parts[0], $secret), $parts[1])) return false; $encoded = strtr($parts[0], '-_', '+/'); $encoded .= str_repeat('=', (4 - strlen($encoded) % 4) % 4); $payload = json_decode((string) base64_decode($encoded, true), true); if (!is_array($payload)) return false; $now = time(); return ($payload['form'] ?? '') === $form && is_int($payload['issued'] ?? null) && is_int($payload['expires'] ?? null) && is_string($payload['nonce'] ?? null) && preg_match('/^[a-f0-9]{32}$/', $payload['nonce']) === 1 && $payload['issued'] <= $now + 60 && $payload['expires'] >= $now && $payload['expires'] <= $now + 7200; }
function ss_captcha_valid(string $challenge, $answer, string $secret): bool { $parts = explode('.', trim($challenge), 2); if (count($parts) !== 2 || $secret === '' || !hash_equals(hash_hmac('sha256', $parts[0], $secret), $parts[1])) return false; $encoded = strtr($parts[0], '-_', '+/'); $encoded .= str_repeat('=', (4 - strlen($encoded) % 4) % 4); $payload = json_decode((string) base64_decode($encoded, true), true); if (!is_array($payload)) return false; $a = $payload['a'] ?? null; $b = $payload['b'] ?? null; $expires = $payload['expires'] ?? null; return is_int($a) && is_int($b) && is_int($expires) && $a >= 1 && $a <= 12 && $b >= 1 && $b <= 12 && $expires >= time() && $expires <= time() + 7200 && filter_var($answer, FILTER_VALIDATE_INT) !== false && (int) $answer === $a + $b; }
function ss_rate(string $scope, string $identity, int $max, int $window, string $secret): bool {
    $key = hash_hmac('sha256', $scope . '|' . $identity, $secret);
    $configured_directory = trim((string) (getenv('STEEPSTEP_RATE_LIMIT_DIR') ?: ''));
    $directory = $configured_directory !== '' ? $configured_directory : __DIR__ . '/.rate-limit';
    if (!is_dir($directory) && !@mkdir($directory, 0700, true) && !is_dir($directory)) return false;
    $handle = @fopen($directory . '/steepstep_rl_' . $key . '.json', 'c+');
    if ($handle === false || !flock($handle, LOCK_EX)) { if (is_resource($handle)) fclose($handle); return false; }
    $raw = stream_get_contents($handle); $now = time();
    $times = json_decode($raw ?: '[]', true);
    $times = is_array($times) ? array_values(array_filter($times, static function ($t) use ($now, $window): bool { return is_int($t) && $now - $t < $window; })) : [];
    if (count($times) >= $max) { flock($handle, LOCK_UN); fclose($handle); return false; }
    $times[] = $now; ftruncate($handle, 0); rewind($handle); fwrite($handle, json_encode($times)); fflush($handle);
    flock($handle, LOCK_UN); fclose($handle); return true;
}
