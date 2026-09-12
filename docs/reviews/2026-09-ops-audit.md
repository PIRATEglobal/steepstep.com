# Operations audit, 12 September 2026

## Scope and method

This audit covers the current `/Users/piratex/Documents/projects/physio` working tree: Astro source and generated static output, PHP contact endpoints, GitHub Actions deployment, privacy and legal surfaces, route/link integrity, and release documentation. It applies the Resonance audit taxonomy. The audit is read-only with respect to implementation files.

The prerequisite is only partly met. The current tree is not committed or staged, so this is a pre-release audit rather than an approval of a commit. A clean copy in `/private/tmp/physio-audit` was used for checks because the local `.astro` cache is not writable in the managed workspace.

## Evidence

- Astro 7.3.0 is installed in `package.json` and the lockfile.
- `npm run check` passed with 0 errors, warnings, or hints in the clean copy.
- `npm run build` passed and generated 20 static routes.
- `php -l` passed for all PHP endpoints and `tests/contact-security.php`.
- `php tests/contact-security.php` passed, including token tampering, wrong secret, CAPTCHA, rate-limit, origin, and protected-file checks.
- `git diff --check` passed.
- No `.env`, form secret, or credential file is tracked. `.env` is ignored. The local `.env` contains credentials and must remain private.
- The built output contains no visible launch-status wording. The remaining matches are internal documentation, package script names, or code comments.
- The generated route set contains 20 pages, all routes listed in `public/sitemap.xml`.
- `public/api/.htaccess` and `public/api/.rate-limit/.htaccess` use All-Inkl-compatible deny rules for sensitive files.

## Findings

### P1, changes requested: release is not yet a reviewable commit

The worktree contains the current site changes plus untracked `.resonance/` and `.agents/` material. The requested portable Resonance sync has not yet been staged or pushed. The parent release must create an explicit allowlist commit, preserve the separate `piratex.com` repository, and prove that no secrets, build output, caches, or private runtime traces enter the public repository.

### P1, changes requested: production contact endpoint remains unverified

The previous production release returned HTTP 500 for `/api/token.php?form=contact` and `/api/form-secret.php`. The local `.htaccess` compatibility correction is covered by tests and a clean build, but it has not yet been deployed and smoke-tested. Until a new release proves token HTTP 200 with an allowed origin, direct secret access HTTP 403, invalid POST rejection, and a controlled valid delivery path, the contact conversion path is not released.

### P2, internal follow-up: public professional and legal facts need owner verification

The pages name PIRATE GmbH and Natalja Krol and describe professional qualifications. The user has confirmed that the practitioners are trained and authorized and has asked for publication. The source register records the supplied Powerflow page. An owner-held check of the exact qualification wording, Swiss practice authorization, responsible entity details, and final Swiss legal review remains an internal follow-up before relying on the claims operationally. No specific unsupported claim was established in this audit, so this item does not block publication on its own.

### P2, simplify before release: pricing truth has remaining prose duplicates

`src/data/offers.ts` and `OfferSummary.astro` provide the shared source and reusable display, which is the right architecture. The AGB, FAQs, sport pages, and process page still repeat prices as prose. These are legitimate explanatory references, but they need a release check or a small formatter shared by content data so price changes cannot silently drift.

### P2, hardening: static security headers are incomplete

The API sets no-store and X-Robots-Tag, while the static site does not declare a site-wide Content-Security-Policy, Referrer-Policy, or clickjacking policy. This is not an observed exploit in the current static surface, but the deployment should document which headers All-Inkl supplies and add the minimum safe headers supported by the hosting setup.

### P2, verification gap: visual responsive checks are not reproducible in this audit environment

Source CSS contains responsive nav, 44px-class controls, focus states, and reduced-motion rules. Static checks cannot prove the header CTA, submenu, recommendation panel, or condition diagrams at 360, 390, 768, 850, 1024, and 1440px. A supervised browser pass remains required before release, especially for the squeezed condition screenshot and blank CTA report.

### P3, documentation drift: historical preview language remains in internal documents

Public source, README, and built output pass the launch-language sweep. Historical research and design reports intentionally retain the word “preview” to describe earlier states. Keep that history for auditability, but do not copy those documents into public marketing or metadata.

## Final candidate delta

The shared open-menu rules are now in `src/styles/global.css` and are available to all 20 routes; `motion.css` retains motion-only behavior. A route scan confirms every built route contains the shared shell and CTA. The local-origin fix makes the PHP port follow `ASTRO_PORT`, and `scripts/dev.sh` now waits on Astro and cleans up both child processes. Root supplied a controlled local smoke result of token HTTP 200 for the configured origin and HTTP 403 for a foreign origin.

The working tree still reports the latest `scripts/dev.sh`, `public/api/form-abuse.php`, and `tests/contact-security.php` changes as unstaged relative to the index. The staged candidate therefore does not yet equal the checked current source. This is the remaining pre-push P1.

## Disposition

**CONDITIONAL REJECT, changes requested before push.** No P0 was found. The current source passes static checks and the local smoke result supplied by root is positive. The staged index is still behind the current source for three runtime/test files, and live production PHP smoke remains pending. The legal and practitioner item is an internal follow-up and is not a publication blocker on its own. Restage the three files, rerun the staged checks, then push and verify production before changing this disposition.
