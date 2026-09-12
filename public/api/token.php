<?php
declare(strict_types=1);
require_once __DIR__ . '/form-abuse.php';
header('Cache-Control: no-store'); header('X-Robots-Tag: noindex, nofollow'); header('Content-Type: application/json; charset=utf-8');
$origin = trim((string) ($_SERVER['HTTP_ORIGIN'] ?? '')); $referer = trim((string) ($_SERVER['HTTP_REFERER'] ?? '')); if (!ss_origin_allowed($origin, $referer)) { http_response_code(403); exit; } if ($origin !== '') header('Access-Control-Allow-Origin: ' . $origin);
$secret = ss_secret(); if (($_GET['form'] ?? '') !== 'contact' || $secret === '') ss_json(503, 'Der Spam-Schutz ist vorübergehend nicht verfügbar.');
$issued = time(); $payload = rtrim(strtr(base64_encode(json_encode(['form' => 'contact', 'issued' => $issued, 'expires' => $issued + 7200, 'nonce' => bin2hex(random_bytes(16))])), '+/', '-_'), '='); $a = random_int(1, 12); $b = random_int(1, 12); $challenge = rtrim(strtr(base64_encode(json_encode(['a' => $a, 'b' => $b, 'expires' => $issued + 7200])), '+/', '-_'), '=');
echo json_encode(['token' => $payload . '.' . hash_hmac('sha256', $payload, $secret), 'captcha' => ['question' => "Was ist $a + $b?", 'challenge' => $challenge . '.' . hash_hmac('sha256', $challenge, $secret)]], JSON_UNESCAPED_UNICODE);
