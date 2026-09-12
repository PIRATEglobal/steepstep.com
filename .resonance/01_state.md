# Current State

## Phase
Verification

## Goal
Maintain and release the Swiss-first steepstep online physiotherapy site.

## Context
- Workspace: `/Users/piratex/Documents/projects/physio`; do not modify the separate `piratex.com` repository.
- Astro 7 static site deployed by GitHub Actions over All-Inkl FTPS with `security: loose`, exact remote target `/steepstep.com/`.
- Public site is Swiss Standard German, private pay, and must contain no preview or unfinished-status wording. All pages share the same header, footer and outer content measure.
- Public enquiries use the protected contact form and `contact@steepstep.com`; no messenger accounts or unsolicited-message invitations are published. Active programme clients may use the protected route agreed before purchase between appointments.
- Current release gate: static build and content checks are being re-run after the navigation, FAQ, legal and communication updates. The last live API smoke test recorded HTTP 500 for `/api/token.php` and `/api/form-secret.php`; verify the generated secret and PHP runtime before enabling form submissions.

## Next Session
- Re-run `npm run check`, `npm run build`, contact security tests, route/link sweeps and forbidden-language scan with the current working tree.
- Review the shared header at 360, 390, 768, 850, 1024 and 1440px, including readable CTA text, mobile menu, keyboard focus and reduced motion.
- Review the live contact endpoints after deployment, confirming only `/steepstep.com/` is written remotely.

---

## Reference
[→ View Soul (Vision)](00_soul.md) | [→ View Memory (Logs)](02_memory.md)
[→ View Tools (Boundaries)](03_tools.md) | [→ View Systems (Architecture)](04_systems.md)
