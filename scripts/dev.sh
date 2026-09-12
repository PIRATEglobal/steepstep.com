#!/usr/bin/env bash
set -euo pipefail

project_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
php_port="${STEEPSTEP_PHP_PORT:-8787}"
astro_port="${ASTRO_PORT:-4322}"
php_log="${TMPDIR:-/tmp}/steepstep-php-dev.log"

command -v php >/dev/null || { echo 'PHP is required for the local contact form.' >&2; exit 1; }

STEEPSTEP_LOCAL_DEV=1 \
STEEPSTEP_LOCAL_ORIGIN_PORT="${astro_port}" \
STEEPSTEP_FORM_SECRET="${STEEPSTEP_FORM_SECRET:-steepstep-local-development-only}" \
php -S "127.0.0.1:${php_port}" -t "${project_dir}/public" >"${php_log}" 2>&1 &
php_pid=$!
astro_pid=''
cleanup() {
  if [[ -n "${astro_pid}" ]]; then kill "${astro_pid}" 2>/dev/null || true; fi
  kill "${php_pid}" 2>/dev/null || true
}
trap cleanup EXIT INT TERM

until curl -fsS "http://127.0.0.1:${php_port}/api/token.php?form=contact" \
  -H "Origin: http://127.0.0.1:${astro_port}" >/dev/null 2>&1; do
  kill -0 "${php_pid}" 2>/dev/null || { cat "${php_log}" >&2; exit 1; }
  sleep 0.1
done

npm exec -- astro dev --host 127.0.0.1 --port "${astro_port}" &
astro_pid=$!
wait "${astro_pid}"
