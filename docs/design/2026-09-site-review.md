# Astro site QA and design review

**Date:** 12 September 2026
**Scope:** `site/` Astro implementation, Swiss Standard German public website
**Reviewer:** Resonance QA and design review
**Status:** Build and no-JS blockers resolved. Publication remains blocked by clinical, identity, and commercial evidence.

## Verdict

The implemented home page has a coherent visual idea: paper, blue-green ink, an editorial serif, a single route line, and two clearly labelled stock images. It avoids the common gradient, glass, badge, fake-metric, and tiled-card patterns. The Swiss German register is mostly consistent and the preview state is honest about missing credentials, pricing, and booking.

The earlier build and no-JavaScript blockers are resolved. The remaining findings are evidence and launch-readiness gaps for a health service, plus a small mobile navigation issue.

## Resolution of prior findings

| Earlier finding | Current result | Evidence |
| --- | --- | --- |
| P0, missing site TypeScript config | **Resolved** | `site/tsconfig.json` now scopes Astro files; `npm run check` passes with 0 errors, warnings, and hints. |
| P0, sections hidden without JavaScript | **Resolved** | `BaseLayout.astro` adds `.js` before paint and `motion.css` scopes hidden/reveal styles to `.js`; content is visible without the enhancement class. |
| P1, clickable disabled booking anchor | **Resolved for preview** | Offer now renders a non-link status span. Hero and final CTA intentionally lead to the clearly labelled preview page. |
| P1, remote Unsplash delivery | **Resolved for preview** | Images are local `/images/hero.jpg` and `/images/proof.jpg`, with dimensions and lazy loading below the fold. |
| P1, Google Fonts import | **Resolved for preview** | The external `@import` was removed; CSS documents system type for the private preview. |
| Build reproducibility | **Resolved** | `npm run build` passes and emits four static routes. |

## Ranked findings

### P0, build is not reproducible from `site/` [closed]

`npm run build` in `site/` fails because Astro resolves the parent repository's `/Users/piratex/Documents/projects/piratex.com/tsconfig.json`, which extends `astro/tsconfigs/strict` through a dependency context that is not available there. `site/tsconfig.tmp` exists, but Astro does not load it. `npm run check` also scans unrelated parent-repository files and reports 57 errors, including missing `@playwright/test`, `vitest`, and Node types.

**Fix:** add a real `site/tsconfig.json` with the site's compiler options and include/exclude paths, then run `npm run build` and `npm run check` from `site/`. Keep the site check scoped to `site/` so unrelated parent files cannot affect the website release.

**Resolution:** Closed. `site/tsconfig.json` now scopes the project correctly. `cd site && npm run build` passes on 2026-09-12 with Astro 6.4.1.

### P0, JavaScript failure makes the home page blank [closed]

`motion.css` sets `.section`, `.final-cta`, and `.path-step` to `opacity: 0`. The inline script is the only code that adds `.is-visible`. If JavaScript is blocked, fails to parse, or is disabled, the substantive sections remain invisible. This breaks the primary information and safety journey and violates the progressive-enhancement requirement in the UI concept.

**Resolution:** Closed in source. Hidden styles are now scoped to `.js`, while no-JavaScript markup remains visible. A browser test with JavaScript fully disabled should still be added before publication.

### P1, the preview still presents a booking CTA that can be activated [closed for offer card]

The offer link has `aria-disabled="true"`, but an anchor remains keyboard and pointer activatable. It navigates to a preview page that refuses the booking. `aria-disabled` does not disable an anchor and can create a mismatch between the apparent action and the result.

**Resolution:** Closed for the offer card. The card uses a non-action `Buchung folgt` status span. Hero and final calls to action remain links to the preview route, whose heading and body clearly state that no payment or health data is accepted.

### P1, external font import adds a privacy and performance dependency [closed for preview]

`global.css` imports DM Sans and Newsreader from Google Fonts. This creates a third-party request on a page handling a health-related purchase decision and can delay text rendering or change metrics after load.

**Resolution:** Closed for the private preview. The external import is gone and the system stack is deliberate. Before publication, use approved locally hosted fonts or approve the system stack after a final type review.

### P1, image delivery does not implement the stated responsive-image plan [closed for local preview]

Both images use remote Unsplash URLs with a single crop and no `srcset` or `picture` sources. The hero is the LCP candidate but has no local optimized AVIF/WebP derivative. A remote image outage leaves a large empty visual area.

**Resolution:** Closed for local delivery. The assets are local with explicit dimensions. Remaining launch work is to add responsive `srcset`/`picture` variants and confirm the final licence and attribution register.

### P1, clinical safety copy has no actionable escalation route yet

The home page says people with acute or severe symptoms should contact the emergency service, but does not provide the approved route or contact instruction. The dedicated safety page says its emergency and privacy content is still pending. This is acceptable for a private preview, but it blocks publication of a health service.

**Fix:** insert the clinician-approved warning signs, the correct Swiss emergency instruction, patient-location rule, in-person referral route, and a real support contact. Verify that the booking flow stops before payment for unsuitable or urgent cases.

### P1, practitioner proof is still a placeholder

The hero claims qualified professionals and the proof section promises Swiss permissions, while names, titles, registrations, and biographies are absent. The second stock image is explicitly labelled, which is honest, but the page cannot yet establish the trust signal described in the PRD.

**Fix:** publish the named practitioners, checked professional titles, authorisation or registration details, sports focus, and authentic biographies before accepting bookings. Do not let stock imagery sit next to an unqualified “meet the practitioners” heading at launch.

### P2, navigation and sitemap terminology diverge [open]

The footer route is `/sicherheit-und-privatsphaere`, while the PRD and website brief specify `/sicherheit-und-datenschutz` in the sitemap. The current route works, but this creates a canonical-link, copy, and future migration risk.

**Fix:** choose one Swiss German route, update the PRD and all links together, and add a redirect if the other route has been published.

### P2, mobile menu lacks close and focus management

The menu toggles visibility and updates `aria-expanded`, but it does not close on Escape, close after a navigation click, or move focus into the opened navigation. The menu is short enough that this is easy to fix without adding a framework.

**Current status:** Open. The menu toggle opens the nav and updates `aria-expanded`, but there is still no Escape handling, focus return, or close-on-link activation. Verify keyboard traversal at 320px and 360px widths.

### P2, metadata and social preview are incomplete

The base layout sets a title and description but has no canonical URL, Open Graph image/title/description, or Twitter card. These are absent from the visual brief but matter for a trust-sensitive service shared in private referrals and search.

**Fix:** add canonical and social metadata once the final domain and owned image exist. Do not publish stock imagery as a practitioner or patient claim.

### P2, placeholder brand and contact details remain in the public surface

`physio schweiz` is a working wordmark and the footer has no real address, email, responsible entity, or legal links. The preview language signals incompleteness, but this must be resolved before publication.

**Fix:** replace working identity with the approved practice name, entity, contact, Impressum, privacy notice, and terms. Add the real contact link to all booking failure and support states.

## Anti-slop and craft assessment

**Passes:**

- One visual idea is carried through the page: the consultation-sheet route and datum line.
- The process is a reading path, not a repeated card grid.
- Colour is restrained and warm. There is no gradient, glass effect, neon sport colour, fake statistic, logo wall, or floating chat prompt.
- The copy uses Swiss spelling such as `standardmässig`, `nächsten`, and `Zusatzversicherung`; no French, Italian, or English language switch is exposed.
- Stock photos are explicitly marked as illustrative and not presented as clinicians or patients.
- Buttons have hover, active, and focus-visible treatment. Reduced motion removes transitions and scroll animation.

**Needs attention:**

- The system-font preview is intentionally private and fast. Before publication, use approved locally hosted fonts or approve this stack after a final type review.
- The page uses a grain SVG overlay over the entire viewport. It is restrained, but it should be checked at high-contrast mode and on low-power mobile devices; remove it if it competes with readable clinical text.
- The current animation is a restrained fade-and-rise for every section. The route line is the concept's distinctive motion, yet the implementation animates opacity/translation rather than drawing the route. Keep motion sparse and tie it to the care path if the line is meant to be the signature.
- `Wieder dorthin, wo Sie hinwollen.` is warm, but abstract. Pair it with the concrete Swiss-specific subheading from the PRD before launch so the first screen names physiotherapy, sport, and location without relying on the eyebrow alone.

## 8-path verification matrix

| Path | Verdict | Evidence or gap |
| --- | --- | --- |
| Happy path | Gap | Preview CTA reaches an intentionally blocked booking page; no live booking exists. |
| Sad path | Gap | No real payment, unavailable-slot, or invalid-input flow is implemented. |
| Unauthorized path | N/A | Static public marketing site; no authenticated action. |
| Malformed data | N/A | No runtime data source in the current static build. |
| Missing dependency | Partial | Build configuration is fixed; the service still depends on local image assets and the eventual booking/privacy providers. |
| Legacy data | N/A | No persisted patient or booking data. |
| UI text/render | Partial | Chrome accessibility tree and desktop screenshot confirm the main content and labels; mobile and no-JavaScript browser runs remain. |
| Redirect/session | N/A | No session or authentication flow. |

## Verification performed

- Inspected all Astro pages, layout, global CSS, motion CSS, package manifest, PRD, UI concept, motion specification, and asset register.
- Ran `npm run check` from `site/`: 0 errors, warnings, and hints.
- Ran `npm run build` from `site/`: four static routes emitted successfully.
- Opened the local preview in Chrome and inspected the rendered desktop page through the accessibility tree and screenshot. The hero, care path, offer, practitioner placeholder, safety, FAQ, and footer were visible.
- Verified the offer card renders a non-action `Buchung folgt` status and local `/images/hero.jpg` and `/images/proof.jpg` references.
- Verified the no-JavaScript fallback in the generated HTML/CSS contract: the `.js` class is added by an inline head script, while hidden animation rules are scoped to `.js`; without that class the sections have normal visible styles. A browser run with JavaScript disabled remains desirable before publication.
- The Chrome Computer Use surface provided a desktop viewport screenshot and accessibility tree. The screenshot showed a calm, editorial first screen with strong left-aligned typography, a generous paper field, restrained blue-green palette, and one large movement photograph. The image crop gives the page warmth and activity while the dark booking button remains the clearest action. No screenshot was saved as a local artifact because the browser tool returned an in-memory image only.
- Mobile viewport emulation was unavailable in the connected browser surface. The responsive rules were inspected at source level: the layout collapses to one column below 800px, the image switches to a 4:3 crop, the safety grid becomes one column, and the menu control becomes visible. A real 320px/360px screenshot and keyboard pass remain open.

## Release gate

Do not publish or accept payments until the P1 clinical, practitioner, privacy, price, and booking evidence is supplied. Before publication, rerun the browser audit at 320px, 360px, 768px, 1280px, and 200% zoom with normal and reduced-motion settings, including a no-JavaScript run.
