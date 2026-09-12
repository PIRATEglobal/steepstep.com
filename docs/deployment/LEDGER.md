# Steepstep launch ledger

| Requirement | Status | Evidence / next check |
| --- | --- | --- |
| PIRATE GmbH is the operator | Verified | `src/pages/impressum.astro` uses the legal details from pirate.global. Confirm with counsel before relying on the page. |
| Privacy page and no tracking claim | Implemented | `src/pages/datenschutz.astro` documents no analytics, ads or tracking cookies, All-Inkl technical logs, contact form data and rights. No analytics or tracker scripts are present in the built site. |
| Visible “Vorschau” removed | Verified in source | `rg -n -i 'vorschau' src` returns no matches after this pass. |
| Contact form to contact@steepstep.com | Implemented, live delivery pending | `src/pages/kontakt.astro` posts to `public/api/contact.php`; HMAC token, honeypot, time trap, math challenge, header-safe fields and rate limits are covered by `tests/contact-security.php`. Live `mail()` delivery can only be confirmed after a harmless production submission. |
| Named contact and expert profile | Implemented, credential confirmation pending | `src/pages/ueber-uns.astro` and `src/pages/kontakt.astro` name Natalja Krol as a physiotherapist with a sports physiotherapy focus, based on the supplied Powerflow source and the user confirmation. Confirm credentials and Swiss practice authorization before relying on those claims publicly. |
| CHF pricing | Implemented, enquiry only | CHF 149 Ersttermin, CHF 549 Begleitung, CHF 749 Fortschritt are displayed with inclusions; contact is nonbinding and no payment is taken on site. |
| Finished page and brand story | Implemented | Retained routes have substantive Swiss-German content, clear CHF enquiry pricing, team context, sport depth, legal pages, contact path and the steepstep story. |
| Critical review | Passed | Final code gate passed Astro check, Astro build, contact security tests and `git diff --check`; route, imagery, motion, accessibility and no-tracking review completed. |
| Sport route depth decision | Implemented | Retain `/sport/`, `/sport/laufen/`, and `/sport/skifahren/`; remove thin Fussball and Wandern routes. See `docs/research/switzerland/2026-09-competitor-page-depth.md`. |
| Canonical and sitemap | Implemented | `astro.config.mjs` sets `https://steepstep.com`; `public/sitemap.xml` contains only retained, indexable routes and is linked from `public/robots.txt`. |
| Sport imagery and motion | Implemented | Laufen uses its own registered Unsplash running image; Skifahren uses its own registered Unsplash skiing image. Scroll entrance runs only after `js-ready`; reduced motion disables transitions. |
| GitHub push and live verification | In progress | Push the reviewed site-only scope to `PIRATEglobal/steepstep.com`, dispatch the protected production workflow, and smoke-test only `https://steepstep.com/` and its generated routes. |
