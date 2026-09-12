# Anti-AI-slop UI review, Swiss website

**Date:** 12 September 2026
**Scope:** UI, UX, composition, art direction, interaction, photography, and trust sequencing for the Swiss Standard German launch
**Reviewed:** `docs/design/WEBSITE_BRIEF_SWITZERLAND.md`, `docs/design/REFERENCE_DIRECTION.md`, `docs/prd/01_swiss_online_physio_website.md`
**Skills applied:** Resonance design designer and marketing conversion

## Verdict

The direction is now specific enough to hand to a designer without defaulting to a premium wellness template. The defining idea is the **consultation sheet**: each section follows one observation, one decision, and one next action. A thin datum rule, attached image captions, a single dominant offer panel, and a vertical care path make the structure recognisable while keeping the interface calm and usable.

The brief remains gated by real clinician proof, final price and terms, clinical safety wording, and actual booking behavior. Those are trust dependencies, not design problems.

## Findings and decisions

| Area | Before | Decision | Why it is stronger |
| --- | --- | --- | --- |
| Brand idea | “Measured movement” and a movement-line annotation | Consultation sheet with functional datum markers | Gives the page a real organizing idea tied to care, rather than a decorative signature that any clinic could copy. |
| Hero | Generic text-plus-image hero with a solid panel | 5/7 split with one portrait crop, attached caption, proof sentence, price, and one action | Establishes person, place, offer, and next step in the first viewport. |
| Trust | Text trust strip | One named professional, checked title, and confirmed Swiss region as a proof sentence | Avoids badge theatre and makes the trust claim attributable. |
| Process | Four numbered steps that could become four cards | Four stops on one vertical reading path | Represents a care journey instead of a feature grid. |
| Offer | Summary card | One dominant document-like offer panel; assessment is visually primary | Makes the safe first purchase obvious and reduces false package equivalence. |
| Typography | Newsreader plus Inter or Source Sans 3 presented as the direction | Three licensed pairings must be compared using real de-CH headlines before lock | Prevents an automatic “editorial wellness” pairing from becoming the brand by default. |
| Shape | 10–14px controls and 18–24px media as a broad radius family | 0px structural panels, 8px controls, 16px photographs | Separates information surfaces from touch targets and avoids rounded-tile uniformity. |
| Photography | Daylight, negative space, activity scenes | One job per image, useful orientation detail, fixed 4:5 and 3:2 crops, attached caption | Makes stock imagery support a patient question rather than fill a composition. |
| Motion | Image reveal and movement cue | One 240ms datum draw, optional 160ms crop settle, explicit booking progress | Motion confirms location and progress without making health care feel like a product demo. |
| Mobile | One-column adaptation and sticky-CTA warning | Explicit content order, 20px padding, 44px targets, no obscuring bar, full-height menu sheet | Protects the booking decision and safety content at the smallest viewport. |

## Exact generic patterns removed

- The interchangeable serif headline over a stock movement image.
- A trust strip that could belong to any clinic.
- Equal process cards and equal package cards.
- Abstract movement curves used as a brand mark without a user job.
- Rounded surfaces and shadows applied to every section.
- A photo chosen for mood without a question it answers.
- Motion that adds polish but does not orient or confirm.

## Conversion and usability check

| LIFT factor | Verdict | Evidence in the revised brief |
| --- | --- | --- |
| Value proposition | Pass | First screen names active Swiss audience, online first appointment, duration, price slot, and next action. |
| Relevance | Pass | Hero and activity imagery connect the service to a real return-to-movement context. |
| Clarity | Pass | The care path and single offer panel use the actual service sequence. |
| Urgency | Neutral by design | No artificial countdown or scarcity. Availability state is factual and operational. |
| Distraction | Pass | One primary CTA, no logo cloud, no statistic row, no decorative card grid. |
| Anxiety | Conditional pass | Named proof and safety route are specified, but launch still depends on verified credentials, clinical escalation copy, privacy terms, and real contact details. |

## Implementation checks

- Run the squint test at 1280px: H1, named professional proof, price, and primary CTA must survive first.
- Test at 360px and 200% zoom. The order must remain identity, H1, image, body, price, CTA, proof sentence.
- Test long Swiss Standard German labels and error messages without clipping or layout shift.
- Confirm the datum markers are announced meaningfully or hidden from assistive technology if decorative in a given state.
- Confirm every image caption and alt text describes what is visible without implying a patient relationship or clinical outcome.
- Verify rest, hover, focus, active, disabled, loading, error, payment failure, no availability, reschedule, cancellation, referral, and reduced-motion states in the real booking flow.
- Confirm the price is visible within five seconds and the CTA remains the strongest action without sticky UI covering consent or errors.

## Remaining risks

1. A serif choice can still make the brand resemble a wellness template. The pairing test with actual copy is a release gate.
2. Stock photography can still imply treatment or a patient story. Use captions, the asset register, and owned photography before launch.
3. A visual datum can become decoration if the content model stops using it to mark a real step. Remove it wherever it does not orient the visitor.
4. The composition cannot compensate for missing names, authorisation evidence, canton scope, safety route, privacy terms, or final CHF checkout behavior.

**Status:** DONE_WITH_CONCERNS. The anti-slop UI/UX pass is complete and the brief now contains implementable art direction. Copy sections were left for the Swiss Standard German language pass.
