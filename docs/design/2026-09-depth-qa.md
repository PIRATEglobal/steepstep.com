# Depth and SEO/GEO QA review

**Date:** 12 September 2026
**Reviewer:** Independent review workstream
**Scope:** Expanded Astro 7 Swiss Standard German preview
**Files reviewed:** `site/src/pages/index.astro`, all support pages, `BaseLayout.astro`, global and motion styles, the depth research, PRD, website brief, and depth implementation note.

## Verdict

The implementation has real content depth and keeps the approved visual direction. It explains the consultation, the written next step, preparation, continuity, suitability, and practical questions. The build is technically clean.

It is not ready for public SEO or clinical publication. The main blockers are an intentionally incomplete trust layer, a misleading privacy link, preview language that reads as unresolved product copy, and global `noindex, nofollow`. Those are appropriate for a private preview, but must be resolved before launch. One sentence and two headings should be rewritten now because they weaken the otherwise careful Swiss Standard German voice.

## Verification evidence

- `npm run check`: passes, 0 errors, 0 warnings, 0 hints.
- `npm run build`: passes, six static routes generated.
- `git diff --check`: passes.
- No decorative ordinal labels such as `01 / Angebot` remain in the rendered source.
- Core content is present in server-rendered HTML. The page does not depend on JavaScript for its answers.
- All currently referenced local routes resolve to generated pages. The two images used by the home page exist.
- Browser inspection was unavailable in this subagent because the in-app browser cannot be made visible from a subagent thread. Desktop and mobile visual inspection remains an open check.

## Findings

### P0, publication blocker: the page presents a privacy destination that is not a privacy policy

`index.astro` labels `/sicherheit-und-datenschutz` as `Datenschutzerklärung`, but that route currently says that the privacy statement is still being written and provides no actual controller, purpose, access, retention, rights, processor, contact, or breach information. A visitor can reasonably read the link as the legally operative privacy notice.

**Fix before public release:** Either publish the approved privacy notice at that URL, or change the home-page copy to `Die Angaben zu Datenschutz und Sicherheit werden vor dem Start veröffentlicht.` Keep the link label `Sicherheit und Datenschutz` until the legal text exists. Do not call a placeholder page a `Datenschutzerklärung`.

### P0, publication blocker: clinical and practitioner proof are still placeholders

The first screen says `Fachpersonen mit Ausbildung und Berechtigung zur Berufsausübung`, then immediately says names and evidence will be added later. The practitioner section repeats that the page is intentionally unfilled. This is honest preview behavior, but it cannot support a public health-service conversion or the PRD's trust requirement.

**Fix before public release:** Add the real clinician name, professional title, Swiss authorisation or registration evidence, sport focus, language, and a clinician-approved method note. Replace the generic stock image with owned photography or remove the image. Never publish the current stock image beside proof language that could make it look like a clinician.

### P0, publication blocker: global robots policy prevents the requested SEO/GEO outcome

`BaseLayout.astro` emits `robots: noindex, nofollow` for every route while `public/robots.txt` permits crawling. This is a sensible private-preview safeguard, but it guarantees that the site cannot rank or be cited while it remains in place.

**Fix before launch:** Make indexing an explicit release switch. Remove `noindex, nofollow` only after the canonical domain, legal pages, named practitioner, approved claims, contact details, sitemap, and production analytics decision are ready. Add an XML sitemap and submit it after launch. Keep preview deployments noindexed through environment-aware metadata.

### P1: preview status language makes the offer feel unfinished and undermines depth

The home page repeats `Vorschau`, `Buchung folgt`, `Preis und Buchungsbedingungen werden vor Veröffentlichung bestätigt`, `Bestätigt vor dem Start`, and `Noch offen`. The labels are operationally truthful, but they dominate the purchase decision. `Bestätigt vor dem Start` is especially misleading because it sounds like the service facts are already confirmed, while the following sentence lists them as unknown.

**Fix:** In preview, use one compact site-wide banner or document note: `Private Vorschau, Angaben vor dem Start geprüft.` In the offer, use `Vor dem Start festgelegt werden` or remove the service-detail row entirely until the facts are known. In production, replace all preview labels with actual price, duration, terms, response time, and booking behavior.

### P1: one sentence is visibly translated or generated rather than spoken by a Swiss practice

`Sie gehen nicht mit einem leeren Bildschirm.` is an unusual metaphor for a patient handoff and reads like a copywriting construction. It is also less concrete than the promise underneath it.

**Recommended replacement:** `Sie wissen, was Sie als Nächstes tun können.` Use the following paragraph to explain that the next step is written down. This keeps the warmth and removes the artificial image.

### P1: several headings use abstract promise language where the new depth should be concrete

`Der Alltag gehört zum Plan.` and `Damit die Stunde Ihnen gehört.` are elegant, but generic. They could belong to coaching, therapy, or a productivity service. The surrounding copy is more useful than the headings.

**Recommended replacements:** `Was zwischen den Terminen weitergeht.` and `So bereiten Sie den Termin vor.` These headings improve answerability for readers and search systems while preserving the editorial tone.

### P1: the home page has no visible price or confirmed purchase terms

The offer intentionally shows a pending state. This is correct for the current preview, but it means a visitor cannot evaluate the private-pay proposition. The PRD explicitly requires price, duration, inclusions, exclusions, validity, cancellation, payment timing, and insurance position before booking.

**Fix before conversion testing:** Put the total CHF price beside the 60-minute duration, then show inclusions, exclusions, package validity, payment, cancellation, refund and rescheduling rules, and the exact Zusatzversicherung caveat. Do not retain the disabled booking button once the page is presented as public.

### P1: safety route is structurally good but not clinically actionable

The route `Sie schildern Ihre Situation → Die Fachperson prüft, ob Video genügt → Online weiter, Plan anpassen oder vor Ort abklären` is a good explanation of clinical boundaries. The copy still says the actual warning signs and forwarding route will be approved later. There is no urgent action on the page.

**Fix before clinical release:** Add the clinician-approved routine suitability boundary, urgent warning signs, emergency instruction for the patient's location, and the named referral or contact route. Keep the route as text so it remains extractable without motion.

### P2: support page `/fragen` is a thin redirect and creates a dead-end search result

The route's H1 promises answers, but it says the answers are on the home page and sends the visitor back to `/#fragen`. This is a weak standalone page for users and search engines, and it adds no new information.

**Fix:** Either remove the route from navigation and use the home-page anchor only, or make `/fragen` the canonical FAQ page with the full approved FAQ and deep-linkable question ids. Do not leave an answer page whose only answer is another page.

### P2: metadata and structured data are too thin for the planned SEO/GEO release

Titles and descriptions exist on the support pages, but there is no visible canonical domain in the current config, no `og:image`, no sitemap, and no structured data for the real organisation or person. This is acceptable for a preview but incomplete for the launch requirement.

**Fix before indexing:** Set `site` to the real canonical URL, add a sitemap, add accurate `Organization` and `Person` or `MedicalBusiness` data only when the visible content supports it, and add `FAQPage` only for visible approved FAQ answers. Add a social image only when it is owned or licensed. Do not add schema as a substitute for missing proof.

### P2: the current content is deep in the home page but the information architecture does not yet expose the researched topic opportunities

The research identifies a useful first activity page and a named practitioner page as the next information-gain assets. The current build has only the Swiss explainer and process page. That is enough for a preview, but it will not create topical depth or answer the activity-specific search intent by itself.

**Fix after the first cohort is chosen:** Add one clinician-authored activity page, such as running or skiing, with a real author, review date, sources, what video can assess, what it cannot, and a practical preparation or monitoring worksheet. Add `/ueber-uns` once credentials are ready. Avoid generating a matrix of thin sport or canton pages.

### P2: repeated `Fachperson` and `Online-Betreuung` phrasing could be tightened for native Swiss Standard German

The language is generally strong and consistently uses Swiss spelling. A few repeated formulations make the site feel policy-written rather than person-written: `fachlich und organisatorisch passt`, `für eine Videobetreuung sicher und sinnvoll`, and `Das konkrete Format und der Umfang werden vor dem Start verbindlich beschrieben.`

**Fix:** Have the named clinician perform a native edit after the operational facts are fixed. Preserve the direct, cautious meaning, but replace abstract nouns with the actual action the patient experiences.

## What is working

The added depth is meaningful. The consultation section shows what is discussed, the specimen makes the written handoff imaginable, the between-appointment section explains continuity, and the preparation list answers practical questions. These are better sources of trust than extra statistics or a generic blog grid.

The visual system remains restrained. The implementation avoids the user's rejected patterns: no `01 / Angebot` labels, logo wall, fake reviews, gradient blobs, dashboard cards, scroll hijacking, or parallax for its own sake. Motion is progressive enhancement, uses IntersectionObserver, and has a reduced-motion path. The `details` FAQ works as native HTML.

## Release sequence

1. Rewrite the three copy lines noted above and decide whether `/fragen` is a full FAQ page or an anchor only.
2. Replace the privacy link label or publish the actual privacy notice.
3. Add named clinician proof, approved safety route, final price and purchase terms.
4. Set the canonical production domain, make indexing environment-aware, add sitemap and accurate structured data.
5. Run native Swiss Standard German edit, content accessibility checks, Lighthouse or equivalent performance checks, and desktop/mobile visual review.
6. Publish one clinician-authored activity page after the first target cohort is confirmed.

**Status: DONE_WITH_CONCERNS.** Review artifact complete and implementation checks pass. Public SEO/GEO publication remains blocked by the P0 and P1 gates above.
