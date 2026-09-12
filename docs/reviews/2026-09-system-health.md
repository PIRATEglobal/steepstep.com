# System health report, 12 September 2026

## Score

**Local health score: 100 / 100. Operational readiness: pending.**

The score uses the Resonance formula: tests 40%, lint/check 30%, build 30%. This project has no separate lint command, so `astro check` is the type, template, and diagnostic gate used for the check component.

| Vital | Result | Weight | Contribution |
| --- | --- | ---: | ---: |
| Tests and endpoint contracts | Pass, 100% of available checks | 40% | 40 |
| Astro check | Pass, 0 errors, warnings, hints | 100% | 30 |
| Astro build | Pass, 20 routes | 100% | 30 |

The mandated local formula therefore scores 100/100. Operational readiness is not folded into that formula: it remains pending because the last live contact smoke failed with HTTP 500, the current changes are not staged, and the requested Resonance sync is not yet in GitHub. This separation keeps local code health from being mistaken for production readiness.

## Required qualitative flags

- `AUTH_INCONSISTENT`: **No observed inconsistency.** This is a public site. The contact API consistently applies allowed-origin checks, signed form tokens, honeypot, time trap, CAPTCHA, input validation, rate limits, and a fixed recipient. Active-client messaging is correctly described as private and pre-agreed, with no public account.
- `ENV_FRAGILE`: **Open, production proof pending.** The local-origin and PHP lifecycle fixes are present in the current source, and root supplied a controlled local token 200 / foreign origin 403 smoke result. The prior All-Inkl PHP 500 is closed only after the new `.htaccess` and generated secret are live-tested. The workflow uses loose TLS as required by All-Inkl and writes only under `/steepstep.com/`.
- `TEST_SHALLOW`: **Open, moderate.** The PHP contract tests cover important rejection paths and the Astro build covers all routes. There is no browser automation in the current project scripts for responsive layout, keyboard submenu behavior, reduced motion, form HTTP behavior, or live deployment smoke.
- `STATE_DRIFT_DETECTED`: **Open, index parity pending.** `.resonance/01_state.md` says the project is in verification and records the live API blocker, while the current source still has three runtime/test files unstaged relative to the candidate index. The ledger has open items that accurately require closure.
- `STALE_TESTS`: **No evidence.** Current assertions match the private-client messaging, no-tracking, CHF pricing, and public contact-form decisions.

## Prescriptions

1. Stage an explicit repository allowlist including the intended `.resonance/` memory and required portable `.agents/` material, then run a secret/private-data scan before commit.
2. Deploy the current commit through the manual `PUBLISH` gate and run live endpoint smoke tests, including the exact remote directory assertion.
3. Add a repeatable browser or Playwright gate for header CTA visibility, submenu keyboard behavior, reduced motion, route widths, image alt text, and the recommendation panel at the required widths.
4. Re-run the system-health report after live smoke and commit synchronization; clear the flags only with evidence.

## Disposition

**DONE_WITH_CONCERNS.** Local vitals pass at 100/100 under the prescribed formula. Operational readiness remains pending until the listed prescriptions are closed.
