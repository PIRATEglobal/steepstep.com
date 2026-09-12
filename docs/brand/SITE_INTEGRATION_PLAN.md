# Steepstep website integration plan

**Date:** 12 September 2026  
**Scope:** identity integration and production readiness for the Astro site in `site/`  
**Market:** German-speaking Switzerland only  
**Language:** Swiss Standard German (`de-CH`) only  
**Status:** planning; no site code or external service changed by this plan

## Decision

Use `steepstep.com` as the sole public identity. The live wordmark is `steepstep`, with `.com` used in legal and digital contexts. The descriptor remains plain and specific: `Online-Physiotherapie für Sport und Bewegung in der Schweiz`.

Keep the current editorial consultation-sheet direction. It is the strongest bridge between the brand promise and the service: one real question, one clinical decision, one next step. The identity should enter the site through its supplied route mark, type, colour, Swiss spelling, and facts. It should not become a generic wellness rebrand or a decorative mountain motif.

The site can be changed now for identity, structure, copy terminology, and technical metadata. It must remain private (`noindex`) until the named practice, clinicians, service area, prices, legal pages, safety route, privacy processor map, booking provider, and deployment credentials are confirmed.

## Current site findings

### Identity and content

- `site/src/pages/index.astro` still renders `physio` in the header and footer and labels the home page as `Physiotherapie für Sport und Bewegung`.
- Every secondary page has a `physio` wordmark and an accessible label naming Physio as the practice.
- The main page contains the word `Vorschau` in the final CTA status and in the practitioner and booking context. This is appropriate only for the private review state and must be removed or replaced by a neutral availability message before publication.
- The current copy is Swiss Standard German in most places, but contains imported product language such as `Online-Assessment`, `Follow-ups`, and `Return to Activity` in the wider brief. The implementation should use `Erstgespräch`, `Folgetermin`, `Begleitung`, and `Zurück in die Bewegung`.
- Several pages are deliberately honest placeholders. They name no clinician, no entity, no contact address, no confirmed canton, no final price, and no active booking provider. These placeholders must not be converted into invented proof.

### Metadata and indexing

- `site/src/layouts/BaseLayout.astro` hard-codes `noindex, nofollow`, so search engines cannot currently index the site. Keep this until the publication gate passes.
- The default title and Open Graph title end in `· Physio`; replace the suffix with `· steepstep.com` or use a page-specific Steepstep title.
- Canonicals are emitted only when `Astro.site` is set. `site/astro.config.mjs` currently has no `site` value, so the built pages have no canonical URLs.
- `site/public/robots.txt` disallows the CI and release workflow paths only. It does not express the current private preview status. A production robots policy must be decided together with the indexation switch and sitemap policy.
- No sitemap integration is present. Add one only when the domain is final and pages are intended to be indexed. Do not publish a sitemap pointing at a preview or an unverified canonical.
- Open Graph image metadata is absent. Add a real, approved Steepstep social image before launch. Do not use the stock hero image as a clinician or patient proof asset.
- Schema is not currently visible in the layout. Add `MedicalBusiness` or `LocalBusiness` data only after the legal entity, public address, telephone, responsible practitioner, service area, and same-as profiles are confirmed. Until then, no invented structured data.

### Images and rights

- `site/public/images/hero.jpg` and `site/public/images/proof.jpg` are temporary Unsplash assets and are labelled as illustrative in the page copy.
- The existing image captions correctly avoid implying that the people shown are clinicians or patients. Preserve this protection until owned photography replaces the assets.
- Check the source URLs, photographer attribution requirements, download dates, crop, and alt text in `docs/design/assets/unsplash-register.md` before any public release. The register is the authority, not a filename or memory.
- The hero image has explicit dimensions and `fetchpriority="high"`; retain the reserved aspect ratio to protect CLS. The proof image is lazy loaded and should remain below the fold.
- Replace stock with owned photography before publication. Owned images should show a real Swiss context, natural movement, and a named consent record. Never use stock as a practitioner portrait, testimonial, outcome, or credential.

### Interaction and accessibility

- Mobile navigation is progressively enhanced with a menu button and Escape handling. Keep the no-JavaScript reading path intact.
- Reveal animation uses `IntersectionObserver` and has a reduced-motion branch. Keep the motion signature tied to the stepped route, with no scroll-jacking, cursor effects, perpetual loops, or essential content hidden behind animation.
- The current global focus ring is visible on paper and dark surfaces, but it should be checked with the final Steepstep colours at actual control sizes.
- The wordmark is live text. Add the supplied SVG route mark beside it, with an empty accessible label when the adjacent live text already identifies Steepstep. Use a useful label for standalone marks and the favicon.
- Test at 320px and 360px widths, 200% zoom, keyboard-only navigation, reduced motion, a slow connection, long German compounds, and failed or unavailable booking states.

## Exact integration work

These changes are safe to make with the confirmed name and domain, without waiting for legal or clinical facts:

1. Replace all visible `physio` wordmarks, accessible labels, page title suffixes, Open Graph titles, footer identity, and favicon references with the Steepstep lockup.
2. Use `site/public/brand/steepstep-mark.svg` on paper backgrounds, `steepstep-mark-reverse.svg` on ink backgrounds, and `steepstep-favicon.svg` for the favicon. Do not redraw the mark or enclose it in a badge.
3. Keep the mark and wordmark as a single, optically aligned header lockup. The live text remains selectable and searchable.
4. Move the identity tokens into one source of truth: paper, paper-deep, ink, ink-soft, mineral, mineral-deep, amber signal, red signal, radius, spacing, type, and motion tokens from `site/docs/brand/IDENTITY.md`.
5. Replace `DM Sans` as the declared body fallback with the approved Source Sans 3 direction and keep Newsreader for display. Self-host approved font files before production; do not add a remote font request.
6. Replace the generic descriptor with the approved Swiss positioning line, while retaining factual gates where the practice details are not yet known.
7. Normalize Swiss Standard German: `ss` instead of `ß`, `standardmässig`, `ausserhalb`, `Termin`, `Folgetermin`, `Fachperson`, and `Zusatzversicherung`. Remove English product nouns and accidental German-market terms.
8. Remove numerical section labels and any `02 / Angebot`-style markers. The route line can carry hierarchy through its shape and headings, without a machine-made sequence label.
9. Preserve the current information architecture and safety caveats. Do not turn the site into a generic card grid or hide safety and privacy behind a footer link.
10. Add page-specific title and description props for every route, using `steepstep.com` in the title and Swiss search language. Keep the global `noindex` gate until release approval.
11. Add a configurable `site` URL and a publication flag in `BaseLayout.astro` so indexation, canonical URLs, sitemap, and schema switch together. Avoid scattered per-page robots overrides.
12. Add a small claim register and asset register reference to the site handoff. Every public proof claim must have a source, owner, market, approval, and review date.

## Changes blocked on verified facts

Do not fill these from assumptions or from the brand name:

- legal entity name, registered address, telephone, email, Impressum, privacy notice, AGB, and responsible person;
- named physiotherapist profiles, protected title, education, registration, Swiss Berufsausübungsbewilligung, canton, languages, and professional liability status;
- exact cantons or patient locations served. `Schweizweit` must not appear until the operating model and permits support it;
- CHF prices, VAT treatment, package contents, payment provider, cancellation, refund, validity, response time, and insurance wording;
- clinical inclusion and exclusion criteria, red flags, emergency instruction, referral route, and copy saying when video care is suitable;
- data controller, video platform, storage location, retention, subprocessors, recording default, access route, and breach contact;
- active booking URL, calendar availability, payment flow, confirmation emails, and booking failure recovery;
- real testimonials, ratings, outcomes, badges, association logos, or professional affiliations;
- social image and owned photography permissions;
- canonical domain behavior, indexation, sitemap, and structured data.

## Production and All-Inkl handoff

The user has specified an All-Inkl deployment folder `/steepstep.com/` and that only this project folder may be used for work. The Astro build should remain static and produce `site/dist/`; the deployment workflow must upload the contents of that directory into the configured All-Inkl document root without writing outside the declared target.

The GitHub Actions workflow belongs in `.github/workflows/` and must use repository or environment secrets for All-Inkl credentials. No FTP/SFTP password, host key, API token, or `.env` file may be committed. The workflow should:

- install from the lockfile with a pinned Node version;
- run `npm run check` and `npm run build` from `site/`;
- inspect the generated `site/dist/` output for expected routes, absence of placeholder publication text when release mode is enabled, and no accidental source maps or secret files;
- deploy only `site/dist/` to `/steepstep.com/`;
- keep a previous artifact or documented forward-fix path for rollback;
- run a post-deploy smoke check for `/`, `/so-funktionierts`, `/fragen`, `/sicherheit-und-datenschutz`, the favicon, robots policy, and canonical host;
- report the deployed commit and target path in the workflow summary.

The current repository remote is still the Resonance source remote. Pushing to `github.com/pirateglobal/steepstep.com` is a separate external mutation and requires the parent task to set the new remote, authenticate, and push only after the final tree and deployment workflow are reviewed. This plan does not perform that push.

## Test and launch checklist

### Local checks

- `npm run check` from `site/` returns zero errors and zero warnings.
- `npm run build` from `site/` completes and emits the expected static routes.
- `git diff --check` is clean.
- `rg -n -i 'physio|vorschau|placeholder|wird ergänzt|im aufbau' site/src site/public` returns only approved clinical or private-preview references before release, and none of the old identity remains.
- Rendered HTML contains `lang="de-CH"`, page-specific title and description, the correct favicon, and no accidental `Physio` title suffix.
- At 360px and 1280px there is no horizontal overflow, hero image dimensions are reserved, and the primary CTA remains visible before the first scroll break.
- Keyboard focus is visible for links, menu, details, and booking controls. Reduced motion removes reveal and route animation.
- Images have meaningful alt text, stock captions remain visible, and no stock image is represented as proof.

### Release gates

- entity and responsible practitioner confirmed;
- target canton and patient-location policy confirmed;
- clinical safety and escalation language signed off;
- privacy, video, storage, and records map approved;
- price, terms, insurance wording, and booking flow approved;
- legal pages published;
- owned images or approved temporary asset treatment confirmed;
- production domain and TLS verified;
- GitHub Actions secrets set and deploy dry run verified;
- `noindex` removed only after the above evidence is recorded;
- production smoke test and rollback path verified.

## Recommendation to the implementation agent

Implement the identity layer and technical structure first. Keep the site private while doing so. Build the brand as a quiet route through a real consultation, using Steepstep's mark, live wordmark, Swiss type and colour, and direct `de-CH` language. Keep provisional facts visibly provisional in the private preview, and make the publication switch explicit and centralized. This gives the team a reviewable website without manufacturing the trust signals that the final launch must earn.
