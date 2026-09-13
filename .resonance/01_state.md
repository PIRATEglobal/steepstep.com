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
- Current release gate: local Astro check and production build pass with zero diagnostics. The live contact token returns HTTP 200 with a challenge, foreign origins return 403, invalid submissions return 400, and direct secret access returns 403 with an empty body. Contact layout was visually verified at 1562px and 390px with no overflow and a visible CAPTCHA. Production mailbox receipt and the full keyboard/reduced-motion viewport matrix remain unverified.

## Next Session
- Practitioner, legal, image-rights and mailbox follow-ups remain external confirmations. Keyboard and reduced-motion checks remain open.
- After the authorised publish, verify the GitHub Actions run and representative live routes, confirming the exact `/steepstep.com/` target.

---

## Reference
[→ View Soul (Vision)](00_soul.md) | [→ View Memory (Logs)](02_memory.md)
[→ View Tools (Boundaries)](03_tools.md) | [→ View Systems (Architecture)](04_systems.md)
