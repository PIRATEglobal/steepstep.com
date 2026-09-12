# Resonance page audit

**Audit date:** 12 September 2026
**Scope:** every current Astro route in `src/pages` and the shared shell, now including `/agb/`.
**Audience:** people in Switzerland paying privately for online physiotherapy, especially active people returning to sport or everyday movement.
**Primary business outcome:** a suitable visitor understands the offer, trusts the professional boundary, sees the cost, and requests the free 20-minute orientation conversation.

## Method and evidence

This is an experience audit, not a code-only review. I read the Resonance page-audit procedure, project state and memory, the Swiss market and clinical evidence registers, every page source, the shared header/footer/layout, the built output, route inventory, metadata, sitemap, robots file, and motion styles. I ran `npm run check` and `npm run build` with the project’s required elevated cache access. Both passed: Astro reported 0 errors, 0 warnings and 0 hints across 24 files; the build produced 20 pages. A source/build search found no launch-status language in site source or public assets. The stale `README.md` still contains preview language and is a release finding.

Scores are directional, on a 1–5 scale: 5 means the page earns its place and is ready for the next release; 3 means useful but with a material opportunity; 1 means the page fails its job. The score is based on the current source and build, not on future promises.

## Cross-site findings

### What is working

- One `BaseLayout` supplies the same `SiteHeader` and `SiteFooter` to every route. The header exposes home, prices, sport, complaints, team, questions and contact. The footer exposes contact, core content, legal pages and the operator.
- `de-CH`, canonical URLs, Open Graph metadata, `robots.txt` and a 19-route sitemap are present. The base layout emits Organization JSON-LD with PIRATE GmbH and the contact address.
- The offer is unusually clear for a private service: free 20-minute orientation, CHF 149 first appointment, CHF 549 four-session package and CHF 749 six-session package.
- Clinical pages explain what video can and cannot do, use red-flag routes, and avoid fixed healing promises. The condition component provides a consistent structure for fit, local-care boundaries, approach, progression, safety, mistakes, FAQs, sources and related routes.
- Motion is progressive enhancement. The source includes reduced-motion handling, image hover treatment, tactile links and button states. The site has no analytics or advertising scripts.
- Built asset references resolve, the route set is coherent, and all 19 routes use the same outer layout. The current CSS has explicit outer, reading and condition measures, which is a sound consistency decision.

### Release findings

**P1, content integrity, README still calls the site a preview.** `README.md:1-20` says “Astro preview”, “intentionally a preview”, “preview pages” and “preview material”. This directly contradicts the user’s requirement and can surface in GitHub or search previews. Rewrite the README as the finished Swiss private-pay site documentation and remove all launch-status language. Owner: product/editorial.

**P1, legal completeness, AGB page is missing from the current inventory.** The user asked for a detailed but fair Swiss-law-oriented Allgemeine Geschäftsbedingungen page. It is not in `src/pages`, `dist` or the sitemap. Add `/agb/`, link it in the footer and relevant price/contact areas, then run this page audit on it. Owner: legal/product.

**P1, practitioner proof remains a trust gate.** The site names Natalja Krol and describes a sports physiotherapy focus, but the public page does not yet provide a verified qualification, professional registration or dated review record. The copy should only claim what PIRATE GmbH has verified. Owner: clinical/legal.

**P2, the navigation is complete but dense.** On small screens the header contains seven primary links plus a CTA inside a collapsible menu. The menu is functional and labelled, but the visitor must open it to see the information architecture. A future refinement should group “Sport” and “Beschwerden” under a clear “Themen” label or reduce primary items while keeping the free call prominent. Owner: design/conversion.

**P2, legal operator and service geography need one consistent sentence.** The operator address is in Köln while care is for people located in Switzerland. The pages explain the Swiss location requirement, but the relationship between German company, Swiss service delivery and applicable terms should be stated once in the AGB and linked from the offer. Owner: legal.

**P2, claim register should be connected to visible proof.** The warm team language is credible in tone, but “seit Jahrzehnten” and the sports experience need a named, verified proof block or a more precise formulation. Unverified experience reads as marketing theatre even when the design is restrained. Owner: editorial/clinical.

**P2, image system is better than average but still uneven across route types.** The condition pages have distinct images and the two sport pages use distinct sports assets. Several informational pages are text-led and rely on one repeated wide image or no image. That is acceptable for legal and FAQ pages, but the sport hub and online-physio landing page would benefit from one relevant movement image each if a licensed asset adds understanding. Do not add decorative images just to fill space. Owner: design/content.

**P2, structured data is too thin for GEO.** Organization JSON-LD is present globally. Condition pages have page and FAQ information in the component, but the site does not yet expose a consistent `MedicalBusiness`/`MedicalWebPage` relationship, author/reviewer metadata, or `BreadcrumbList` for the content clusters. Add only facts that are verified and keep health claims qualified. Owner: SEO/clinical.

**P3, conversion measurement is intentionally absent.** “We do not track” is a valid product decision. It means improvement must use privacy-respecting operational evidence: qualified enquiries counted in the mailbox, response time, booked orientation calls and completed first appointments. Do not add third-party analytics to solve this.

## Page-by-page audit

### `/`

**Job:** make the service understandable in seconds and move a suitable visitor to the free conversation.
**Score:** 4/5.
**Value delivered:** the headline, Swiss location, private-pay framing, free call and method appear early; pricing, sport contexts, online boundary and team proof follow. The page has the strongest conversion job and enough depth to earn a home route.
**Gap:** the page asks the visitor to absorb several promises before the first concrete proof of who delivers care. The team link and price are present, but named practitioner proof and the exact next-step expectation could arrive sooner.
**Moves:** change the first proof band to say who is behind steepstep and that the free conversation is a fit check; keep the free CTA; add a compact route to CHF pricing directly beside the CTA; remove any remaining README preview framing.
**Single most important change:** add verified practitioner/team proof directly below the hero. Owner: conversion/clinical.

### `/online-physiotherapie-schweiz/`

**Job:** answer whether online physiotherapy in Switzerland is a credible, suitable service for the reader.
**Score:** 4/5.
**Value delivered:** explains video strengths and limits, location requirement, cost and next step. This is an excellent answer page for search and AI answer engines because it answers the basic “what, who, price, limits” questions.
**Gap:** it is more explanatory than experiential. A short “what happens in the first 60 minutes” sequence or visual anatomy of the digital visit would make the value easier to picture.
**Moves:** add a small, factual visit sequence linked to `/so-funktionierts`; add `BreadcrumbList` and verified author/reviewer data; keep the medical boundary visible.
**Single most important change:** show the first appointment as three concrete outputs, written as deliverables rather than general benefits. Owner: conversion/SEO.

### `/preise/`

**Job:** remove price uncertainty and make the paid commitment legible before contact.
**Score:** 4/5.
**Value delivered:** free orientation, CHF 149 first appointment and two package prices are visible with inclusions and non-coverage boundaries. FAQs answer the major purchase questions.
**Gap:** the “not separately offered” answer for a single follow-up can feel like an unresolved commercial policy, and cancellation/payment terms are deferred to personal communication. The AGB must close that gap.
**Moves:** publish the exact package validity, scheduling, cancellation, expiry and refund rules in the AGB; link it beside the package CTA; keep “no payment taken online” explicit if that remains true.
**Single most important change:** make the purchase conditions fully inspectable before enquiry. Owner: legal/conversion.

### `/so-funktionierts/`

**Job:** let a cautious visitor picture the care journey and prepare for it.
**Score:** 4/5.
**Value delivered:** preparation, free call, first appointment, written recommendation, follow-up, suitability and technical interruption guidance are all covered. The journey cards give the long page a clear rhythm.
**Gap:** the page says what happens but shows little visual evidence of how movement is observed remotely. The existing image is calm but reads as general wellbeing, not clearly physiotherapy or sport.
**Moves:** replace or supplement with a commercially cleared sport-physio image showing a real remote movement setup; add a simple “camera, space, movement” visual; do not imply examination quality that video cannot provide.
**Single most important change:** make the remote observation process visible in one honest visual. Owner: design/content.

### `/fragen/`

**Job:** resolve objections that stop a visitor from requesting the free call.
**Score:** 4/5.
**Value delivered:** suitability, preparation, Swiss location, connection failure, prices, insurance, recordings and cancellations are answered in plain Swiss German.
**Gap:** the page is a strong FAQ but could route readers by intent more clearly. It links to process, safety and prices, yet the first action is not repeated after each major group.
**Moves:** retain the open first answers; add a short “noch unsicher?” CTA after cost and suitability; once AGB exists, link cancellation questions directly to the governing section.
**Single most important change:** add one contextual CTA after the cost section, labelled as a free orientation conversation. Owner: conversion.

### `/sport/`

**Job:** help active people choose the sport context that best matches their goal.
**Score:** 3/5.
**Value delivered:** explains the sport-first approach and routes to running and skiing.
**Gap:** the page is thin at roughly one short screen of content and currently asks the visitor to choose between only two sports. It earns its place as a hub only if it explains the broader method or presents a clear “other sport” route.
**Moves:** add a concise sport-demand framework covering capacity, speed, fatigue, surface and decision-making, then link examples to the condition cluster; add a contact route for football, hiking, cycling and climbing without creating thin pages.
**Single most important change:** turn the hub into an expert orientation page that explains how sport demands shape the plan. Owner: product/content.

### `/sport/laufen/`

**Job:** reassure a runner that return-to-running can be staged and monitored with expert input.
**Score:** 4/5.
**Value delivered:** covers volume, pace, surface, recovery, next-day response and online limits. The price and free-call route are concrete.
**Gap:** it has good reasoning but no visible staged return example. A reader cannot yet see what “next step” means in practice.
**Moves:** add an illustrative, non-prescriptive progression graphic, for example walk-run, easy continuous running, duration, then speed or hills; label it as a framework, not a personal protocol.
**Single most important change:** add a visual load progression tied to the next-day response. Owner: clinical/design.

### `/sport/skifahren/`

**Job:** help a skier understand the demands of a return to the piste and decide whether online preparation fits.
**Score:** 4/5.
**Value delivered:** names speed, edging, fatigue, braking, duration and changing surface, with a clear local-care boundary and seasonal preparation angle.
**Gap:** the page does not yet distinguish pre-season conditioning from return after a specific knee or ankle issue.
**Moves:** add two clearly separated routes, “Saison vorbereiten” and “nach Verletzung zurückkehren”, each linked to relevant condition pages and the same safety boundary.
**Single most important change:** split the intent at the top so the visitor can self-select the right path. Owner: conversion/content.

### `/beschwerden/`

**Job:** help someone with a sport-related complaint find a useful, safe information route.
**Score:** 4/5.
**Value delivered:** explains the purpose of the cluster, lists what video can do and gives clear links to the free call, process and prices.
**Gap:** the index does not show the five complaint types as a browsable set in the excerpt inspected, so discovery depends on navigation or direct search.
**Moves:** add five labelled cards with symptom, sport context and “read the guide” action; include an explicit emergency/local-care link; keep cards descriptive and non-diagnostic.
**Single most important change:** make the condition inventory visible and scannable. Owner: design/SEO.

### `/beschwerden/achillessehne/`

**Job:** explain a plausible, safe route for running-related Achilles complaints and when local examination is needed.
**Score:** 4/5.
**Value delivered:** location and irritability are acknowledged, loading is described as progressive, the six-to-nine-month context is qualified, and rupture/red-flag routes are clear. Sources are named.
**Gap:** the page still needs the distinction between midportion and insertional presentations to be more prominent, since the cited guideline is specific.
**Moves:** add a short “wo genau?” qualifier near the answer; retain the non-diagnostic wording; add practitioner review metadata after verification.
**Single most important change:** prevent the evidence from reading as a universal Achilles protocol. Owner: clinical/editorial.

### `/beschwerden/knieschmerzen-sport/`

**Job:** orient a person with activity-related knee pain toward a safe, strength-based next step.
**Score:** 4/5.
**Value delivered:** explains common provoking contexts, avoids a single alignment story, describes observable tasks and includes a qualified 12-week study orientation.
**Gap:** “knieschmerzen” is broad and the page could help readers distinguish front-of-knee load-related pain from acute trauma, locking or instability earlier.
**Moves:** add a brief “passt eher zu dieser Seite, wenn …” versus “lokal abklären, wenn …” split before the long sections; link skiing and running as goals.
**Single most important change:** improve early self-routing without implying diagnosis. Owner: conversion/clinical.

### `/beschwerden/oberschenkelzerrung/`

**Job:** explain why sprint-related thigh pain needs staged speed exposure and when a larger injury requires examination.
**Score:** 4/5.
**Value delivered:** mechanism, role, fatigue, force loss, imaging boundary, speed progression and duration range are handled with appropriate caution.
**Gap:** the phrase “Oberschenkel gezerrt” is accessible but the page could clarify hamstring versus front-thigh symptoms without diagnosing.
**Moves:** add a plain-language location prompt and a small speed ladder; keep the no-fixed-calendar position.
**Single most important change:** make the sport-specific return criteria visible, not just stated. Owner: clinical/design.

### `/beschwerden/rueckenschmerzen-sport/`

**Job:** support active people with non-specific sport-related back pain while making urgent neurological routes unmistakable.
**Score:** 4/5.
**Value delivered:** includes bladder/bowel change, saddle numbness, progressive weakness, fever, cancer history and trauma; it frames active care without posture theatre and says what video cannot do.
**Gap:** the red flags are clinically important but visually compete with the explanatory copy. A faster triage panel would serve a worried visitor better.
**Moves:** put the urgent red-flag panel directly after the introduction; add a short “today’s goal” example for movement and training.
**Single most important change:** reduce time to the urgent-care decision. Owner: clinical/design.

### `/beschwerden/umgeknickter-knoechel/`

**Job:** help someone after an ankle twist decide whether a staged online rebuild is plausible or an X-ray/local exam is needed.
**Score:** 4/5.
**Value delivered:** mechanism, four-step progression, weight-bearing, bony tenderness, deformity, neurovascular signs and swelling are covered.
**Gap:** the page is information-dense and the fracture screen could appear sooner.
**Moves:** promote the inability-to-take-four-steps and bone-tenderness rule to the opening safety block; keep the exact rule only if clinically signed off.
**Single most important change:** make fracture-routing the first decision. Owner: clinical/conversion.

### `/datenschutz/`

**Job:** explain data handling to a visitor before they use the contact form.
**Score:** 4/5.
**Value delivered:** no analytics/advertising/tracking cookies, responsible operator, form fields, mail delivery, temporary anti-spam processing, rights and the no-health-data instruction are stated.
**Gap:** retention and hosting details are described in general terms. The AGB and privacy pages should use the same operator/service wording.
**Moves:** name the hosting provider and retention periods only where verified; link the contact form warning and AGB consistently.
**Single most important change:** make retention and processor details exact before legal publication. Owner: legal.

### `/impressum/`

**Job:** identify the legal operator and provide a reliable contact route.
**Score:** 3/5 pending legal verification.
**Value delivered:** PIRATE GmbH, address, managing director and contact address are visible, with links to privacy and safety.
**Gap:** the German address and Swiss service raise a jurisdiction/context question that this short page does not answer. The legal details were copied from pirate.global and still need counsel confirmation.
**Moves:** verify company register details, responsible person, address and any Swiss representative requirement; link the AGB once available.
**Single most important change:** obtain legal sign-off on the operator details and cross-border service context. Owner: legal.

### `/kontakt/`

**Job:** let a suitable visitor request the free call without exposing health data or creating spam risk.
**Score:** 4/5, live mail delivery pending.
**Value delivered:** asks for name, email and general message, warns against health data, names contact@steepstep.com, presents the free 20-minute call and explains what follows. Server-side protections include token, origin, honeypot, time trap, maths challenge, header-safe fields and rate limits.
**Gap:** the browser form cannot prove live `mail()` delivery in the audit environment, and success/failure behavior should be smoke-tested after deployment. It also needs a direct AGB/privacy acknowledgement if the final legal flow requires one.
**Moves:** run a harmless production smoke test after release; record response time and delivery; add only the minimum legal checkbox required by counsel.
**Single most important change:** verify production delivery and the complete legal consent path. Owner: engineering/legal.

### `/sicherheit-und-datenschutz/`

**Job:** explain the clinical boundary of remote care and keep a worried visitor safe.
**Score:** 4/5.
**Value delivered:** says what video can observe, what it cannot replace, gives Swiss emergency number 144, points to local care, warns against sending health data, and explains the no-tracking/spam-protection model.
**Gap:** the page title joins safety and privacy, but the sections could be more visibly separated into “Ist Video geeignet?” and “Wie werden Daten behandelt?” to reduce cognitive load.
**Moves:** use two clear entry cards and a prominent emergency strip; retain the full Datenschutz link for detail.
**Single most important change:** make suitability and emergency routing scannable before the privacy detail. Owner: design/clinical.

### `/ueber-uns/`

**Job:** make the people and professional stance behind steepstep trustworthy.
**Score:** 3/5 pending proof.
**Value delivered:** introduces Natalja Krol, sports physiotherapy focus, basketball and football context, the expert group, the decades-of-experience story and the steepstep brand meaning.
**Gap:** this page carries the highest trust burden but has no verified credential block, portraits or evidence of the wider group. “Eine Gruppe von Fachpersonen” remains abstract.
**Moves:** add a small profile for each publicly named practitioner only after consent and verification; show qualification, practice location/scope and review date; replace “decades” with exact verified experience or keep it as a group claim with proof.
**Single most important change:** turn the team claim into inspectable professional proof. Owner: clinical/legal/content.

### `/agb/`

**Job:** let a prospective customer understand the legal and commercial consequences of requesting and buying private online physiotherapy.
**Score:** 4/5, pending lawyer review.
**Value delivered:** the page is present in the shared shell and sitemap, has a descriptive title and meta description, and is unusually readable for terms. It names PIRATE GmbH, limits the service to people in Switzerland, explains the free orientation call, CHF 149 first appointment, CHF 549 and CHF 749 packages, six-month validity, no automatic renewal, booking confirmation, technical interruptions, safety boundaries, privacy, cancellation, refunds, liability carve-outs, complaints and consumer court rights. The final navigation routes to prices, contact, privacy and imprint.
**Gap:** several terms depend on a future booking confirmation or personal communication. “Zahlung beziehungsweise Rechnungsfreigabe” leaves the exact payment trigger open, and the proportional package refund calculation is described without a worked example. The page states Swiss law and consumer venue protections in a fair direction, but this is legal content that needs the promised Swiss lawyer review before reliance.
**Moves:** have counsel verify the cross-border operator/service setup, contract formation, package expiry, cancellation/no-show treatment, refund arithmetic, payment timing, privacy wording and consumer-law constraints. Then make the confirmed payment and cancellation terms identical on `/preise`, `/fragen` and the booking confirmation. Add a small “Version” line only if it is maintained as a real document version, not as a draft signal.
**Single most important change:** resolve every term that currently says it will be explained later, so a customer can make an informed decision before sending the enquiry. Owner: legal/product.

## Prioritized implementation backlog

### P0, before calling the site fully finished

No technical P0 was found in the current static build. A P0 would be created by any false clinical credential, unsafe red-flag instruction, or contact form failure that loses a user’s request. Production mail smoke test and clinical/legal sign-off therefore remain release checks.

### P1, release blockers

1. Remove all preview language from `README.md` and any repository-facing metadata; rerun the prohibited-language search across source, public, built output and docs intended for publication.
2. Add and audit `/agb/`, link it in the shared footer and pricing/contact conversion paths, and ensure pricing, cancellation, payment, package validity and remote-care limits agree across pages.
3. Verify Natalja Krol’s public credentials and the operator/legal details with the owner and counsel. Add only verified claims.
4. Run a harmless production contact-form submission, confirm receipt at `contact@steepstep.com`, and record the result without retaining health data.

### Implementation update, 12 September 2026

The assigned P2 content improvements are implemented and verified: `/sport/` has a four-part sport-demand framework plus a route for other sports; `/sport/laufen/` has a four-stage, explicitly non-prescriptive running ladder; `/sport/skifahren/` separates season preparation from return after injury; and `/online-physiotherapie-schweiz/` names three concrete outputs of the 60-minute appointment. The complaints hub already had all five cards, so it was not duplicated. Astro check and build pass with 20 pages. These items can leave the active P2 queue; remaining P2 work concerns schema depth, imagery and mobile information architecture.

### P2, moves that materially improve trust and depth

1. Extend the new `/sport/` framework only with verified, high-demand sport examples if search or enquiry evidence supports it.
2. Add visual, non-prescriptive progressions to the most visited condition routes; running now has a text-led progression ladder and skiing has two clear entry routes.
3. Make the complaint index browseable with five cards and early safety routing.
4. Add BreadcrumbList and carefully governed author/reviewer/schema data for indexable answer pages.
5. Make the remote movement-observation experience visible with licensed, sport-physio imagery and captions that do not imply diagnosis or patient identity.
6. Refine mobile navigation grouping while keeping one clear CTA and the same header/footer everywhere.

### P3, after release evidence exists

1. Use privacy-respecting mailbox and booking evidence to learn which routes produce qualified enquiries.
2. Improve page-specific internal links based on real query and enquiry patterns.
3. Add more sport pages only when each has a distinct audience job, evidence base, visual asset and conversion path.

## Audit verdict

**DONE_WITH_CONCERNS for the independent audit.** All 20 currently built routes were inspected, including the new AGB page, and the shared shell was inspected. Check/build passed after the sport-depth and online-output improvements. The experience is coherent and materially stronger than a generic landing page. It is not ready for a final “everything is finished” claim until the stale README preview language, lawyer review of the AGB and legal/practitioner claims, and production contact delivery are closed. Implementation and deployment belong to the parent execution thread after this independent report.

## Rerun after navigation, width, diagram, AGB and FAQ changes

**Rerun date:** 12 September 2026
**Scope:** all 20 built routes, shared `BaseLayout`, `SiteHeader`, `SiteFooter`, `ProcessDiagram`, global/condition/motion styles, sitemap and public assets. This section supersedes earlier page scores where the current implementation differs.

### Current scorecard

| Route | Score | Current judgement | Highest-value remaining move |
| --- | ---: | --- | --- |
| `/` | 4/5 | Strong first-fold promise, free call, price route, method, team and safety depth. | Move verified team proof closer to the first decision. |
| `/online-physiotherapie-schweiz/` | 4/5 | Clear Swiss scope, limits, process diagram, price and three appointment outputs. | Add verified reviewer/author structured data and keep the output claims tied to the actual service. |
| `/preise/` | 4/5 | CHF prices, package inclusions, free call and detailed FAQ are visible. | Make payment, expiry, cancellation and refund terms identical to the lawyer-approved AGB. |
| `/so-funktionierts/` | 4/5 | Preparation, visit journey, suitability, outputs and interruption handling are explicit. | Replace the general movement image with a cleared remote sport-physio image when available. |
| `/fragen/` | 4/5 | FAQ now handles suitability, safety, tech, prices, insurance, recording and cancellation with useful decision detail. | Add a contextual free-call CTA after the cost section. |
| `/sport/` | 4/5 | Sport hub now explains force, speed, fatigue and environment, has process diagram and routes other sports to contact. | Add further sport examples only when demand and evidence justify a full page. |
| `/sport/laufen/` | 4/5 | Distinct running image, clear return logic, four-stage non-prescriptive ladder, FAQ and price path. | Add practitioner-reviewed visual load examples if the service can support them. |
| `/sport/skifahren/` | 4/5 | Distinct ski image, preparation versus post-injury split, sport demands, FAQ and safety boundary. | Add seasonal versus post-injury detail only with verified service capacity. |
| `/beschwerden/` | 4/5 | Five condition cards, early safety framing and clear route to contact, process and prices. | Preserve the card set and add structured breadcrumbs/schema. |
| `/beschwerden/achillessehne/` | 4/5 | Deep condition template, distinct image, qualified loading logic, safety, FAQs and sources. | Make midportion versus insertional evidence limits more prominent after practitioner review. |
| `/beschwerden/knieschmerzen-sport/` | 4/5 | Clear activity-led framing, strength approach, safety, progression and 12-week qualification. | Improve early self-routing between load-related pain and acute trauma. |
| `/beschwerden/oberschenkelzerrung/` | 4/5 | Mechanism, speed exposure, duration range, local-care boundary and sources are clear. | Add a practitioner-reviewed speed ladder without implying a personal protocol. |
| `/beschwerden/rueckenschmerzen-sport/` | 4/5 | Strong neurological red flags, active approach, movement examples and sourced FAQs. | Put the urgent red-flag route immediately after the introduction for worried readers. |
| `/beschwerden/umgeknickter-knoechel/` | 4/5 | Weight-bearing, bony tenderness, progression, safety and sources are covered. | Promote fracture-routing questions earlier, subject to clinical sign-off. |
| `/datenschutz/` | 4/5 | No tracking claim, form data, anti-spam processing, rights and health-data warning are clear. | Confirm exact hosting/retention wording with counsel. |
| `/impressum/` | 3/5 | Operator, address, managing director and contact are visible. | Verify legal details and Swiss/German service context before relying on the page. |
| `/kontakt/` | 4/5 | Free-call proposition, named contact, privacy boundary and layered spam protection are clear. | Resolve the live token/secret endpoint failure and verify mail delivery in production. |
| `/sicherheit-und-datenschutz/` | 4/5 | Video limits, emergency 144, local route, no tracking and no-health-data contact boundary are substantive. | Make suitability and emergency routing more visually scannable if design time remains. |
| `/ueber-uns/` | 3/5 | Natalja, the expert-group stance and steepstep story are clear and warm. | Add only verified qualifications, scope, consented portraits and dated review proof. |
| `/agb/` | 4/5 | Readable terms cover offer, prices, package validity, cancellation, refund, safety, privacy and consumer rights. | Obtain Swiss lawyer review and settle payment/refund wording before reliance. |

### Current shared-shell and quality findings

The redesign now gives every route the same header and footer through `BaseLayout`. Primary navigation is visible on desktop; “Beschwerden” exposes the five condition routes in a native `details` submenu and the mobile menu has labelled open/close state, Escape handling and outside-click closure. The same outer geometry is used across article pages, while diagrams and reading blocks use focused inner measures. This resolves the earlier width and discoverability concerns. The footer now includes AGB, and the AGB appears in the sitemap.

The new process diagrams are semantic ordered lists, use arrows only as visual support, collapse to one column on mobile, and have hover motion only when the user has a pointer and has not requested reduced motion. Image use is diverse across home, team, sport and condition routes; the five condition pages each use one distinct registered WebP. No prohibited launch-status language appears in `src`, `public` or the current README. The only source images still carrying a rights caveat are the registered temporary/Powerflow and Unsplash assets, which remain illustrative pending final model, artwork and owner-rights checks.

The current source and build inventory is 20 Astro pages. `npm run check` passes with 0 errors, warnings or hints across 26 files. `npm run build` produces 20 pages. Internal HTML links resolve, and the sitemap contains 20 URLs. No analytics, advertising or tracking scripts were found. The global Organization schema and condition MedicalWebPage/FAQ schema are present, but BreadcrumbList and verified author/reviewer metadata remain future SEO/GEO work.

### Remaining severity

**P0:** none found in the static audit. No false outcome promise, unsafe emergency instruction, or broken internal route was found.

**P1:** two release checks remain. First, the live `/api/token.php` and generated secret endpoint previously returned HTTP 500, so the contact form cannot yet be considered operational until the server-side secret generation/runtime issue is fixed and a harmless delivery test reaches `contact@steepstep.com`. Second, the AGB, imprint and public practitioner claims require the promised lawyer/qualified-practitioner review before the business relies on them. These are trust and service-readiness issues, not cosmetic work.

**P2:** add governed reviewer/breadcrumb schema, improve early red-flag placement on selected condition pages, and replace temporary imagery only after rights and owned-photo decisions are complete. These changes can follow the operational release gate.

## Rerun verdict

**DONE_WITH_CONCERNS.** The current 20-page experience passes the structural, navigation, content-depth, mobile-geometry, motion, anti-slop and static-build review. The site is coherent and ready for a controlled release only after the P1 contact-form runtime/delivery check and legal/clinical review are closed. No page should be added until it has a distinct search or customer job, evidence-backed content, a suitable image or explanation, and a clear next action.
