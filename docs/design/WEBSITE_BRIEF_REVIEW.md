# Review: Swiss website PRD and design brief

**Review date:** 12 September 2026
**Reviewer:** Independent product, legal, conversion, copy, and design pass
**Reviewed:** [Swiss website PRD](../prd/01_swiss_online_physio_website.md), [Swiss website brief](WEBSITE_BRIEF_SWITZERLAND.md), [reference direction](REFERENCE_DIRECTION.md), [Swiss market memo](../research/switzerland/2026-09-swiss-online-physiotherapy-market.md)

## Verdict

The revisions resolve the document-level issues that blocked a detailed design handoff. The brief is now ready as a **gated design and content specification**, while public publication and booking remain blocked by external evidence and owner approvals.

## Resolution status

### P0

| Finding | Status | Evidence |
| --- | --- | --- |
| Readiness status overstated | **Resolved** | Brief now says `Design and content draft, publication blocked` and includes a release checklist with owners, evidence, and state. |
| Broad Swiss availability | **Resolved in document** | Hero and trust strip use `[bestätigte Kantone]`; first-screen hierarchy prohibits broad availability; patient location remains a required booking field. External canton memo is still open. |
| Safety and emergency copy | **Resolved in document** | Emergency and red-flag text are explicit publication gates; booking stop and referral/support paths are specified. Clinical approval remains open. |
| Credential proof placeholder | **Resolved in document** | The brief requires named, verified proof and blocks generic portraits or placeholders in live content. Actual practitioner evidence remains open. |

### P1

| Finding | Status | Evidence |
| --- | --- | --- |
| Price and `Arbeitspreis` treatment | **Resolved in document** | Prices are now `[freigegebener Preis]`; the brief forbids live hypotheses and requires terms before publication. Actual price and checkout evidence remain open. |
| English service nouns | **Mostly resolved** | Primary offer and CTA now use `Online-Ersttermin`; package uses `Zurück in die Bewegung` and `Folgetermine`. Remaining English product wording includes the PRD’s `Return to Activity`, one FAQ reference to `Online-Assessment`, and the open product decision. Choose one final vocabulary set before native edit. |
| Translated or abstract German lines | **Mostly resolved** | Hero, suitability bullet, direct-person wording, and final CTA were improved. The remaining copy still needs the required native Swiss Standard German edit, especially repeated “klarer nächster Schritt” language and long gendered professional-title phrasing. |
| Swiss insurance categories | **Resolved in document** | `Zusatzversicherung` and `Grundversicherung` wording now appears in the package caveat and FAQ. Legal and billing approval remains open. |
| Purchase terms | **Resolved in specification** | The package caveat now enumerates validity, cancellation, refunds, rescheduling, payment, invoice/receipt, response window, and unsuitable-care handling. Live terms and checkout behavior remain open. |
| First-screen proof hierarchy | **Resolved** | A dedicated hierarchy puts responsible person and Swiss contact before audience, price, limit, and CTA; unverified claims are prohibited. Contact, identity, and canton values remain open. |
| Booking edge states | **Resolved in specification** | Copy now covers unsuitable, urgent, no availability, payment failure, connection loss, rescheduling, cancellation, and referral. Operational tests and real support contact remain open. |
| Claim and asset registers | **Resolved** | The claim register exists at `docs/venture/claim-register.md`; the Unsplash register exists at `docs/design/assets/unsplash-register.md`. Both correctly keep entries unapproved pending evidence. |
| FAQ consistency | **Open document cleanup** | The revised brief contains the same “Was passiert, wenn ich vor Ort untersucht werden muss?” question twice and still uses `Online-Assessment` in one answer. Remove the duplicate and align the remaining term before implementation. |

### P2

| Finding | Status | Evidence |
| --- | --- | --- |
| Child image candidate | **Resolved** | The treadmill image was removed from the brief and the Unsplash register. |
| Demand evidence versus clinical proof | **Resolved in guardrails** | The claim register labels FSO and Suva figures as need signals and forbids using them as proof of willingness to pay, suitability, or outcomes. |
| Swiss Standard German | **Resolved in specification** | The brief explicitly requires Swiss Standard German and native editing. Editorial review remains open. |
| Accessibility content checks | **Resolved** | Captions, transcripts, descriptive alt text, announced errors, non-colour warnings, 360px, and 200% zoom checks are now explicit. |
| Duplicate heading | **Resolved** | Only one `Photography and asset plan` heading remains. |
| Conditional structured data | **Resolved** | Schema emission is now conditional on verified identity, location, credentials, and visible facts. |

## Remaining external gates

These are appropriate open gates, not missing detail in the design brief:

1. Swiss entity, canton scope, patient-location and temporary-abroad operating memo.
2. Named clinician identity, protected title, education, authorisation or registration evidence, languages, and indemnity record.
3. Clinical inclusion and exclusion criteria, approved red flags, emergency wording, referral route, and support contact.
4. Final price, payment provider, cancellation, refund, invoice or receipt behavior, package validity, and exact insurance wording.
5. Privacy notice, lawful data map, video processor review, retention, access/deletion, breach procedure, and verified no-recording behavior.
6. Native Swiss Standard German edit and final terminology decision for `Online-Ersttermin`, package name, and remaining English labels.
7. Real contact details, local image files, final licence/model-rights checks, and owned-photo replacement plan.
8. Booking operations and accessibility evidence from the actual implementation.

## What is already strong

- Swiss-first scope and German-speaking first region are consistent with the market memo and the latest founder correction.
- The paid assessment as the first conversion step lowers commitment and allows suitability to be established before a longer package.
- The offer includes clinician continuity, a named functional goal, progress review, and a referral boundary. Those are credible differentiators to test against low-price video calls and exercise apps.
- The brief treats privacy, patient location, no recording by default, raw health-data exclusion from analytics, and emergency routing as product requirements.
- The design direction has a coherent register: restrained editorial health practice, one accent, real photography, generous space, and motion that supports orientation.
- The anti-slop rules are unusually concrete. They will help a frontend implementation avoid generic cards, gradients, fake proof, and decorative technology cues.

## Small document cleanup before implementation

1. Remove the duplicated FAQ question and align its wording with `Online-Ersttermin`.
2. Make the final package name and first-service noun consistent with the PRD, brief, sitemap, and UI component labels.
3. Run the planned Swiss Standard German native edit and retain the terminology checklist as release evidence.

## Evidence checked

- `rg -n '^#{1,4} ' docs/prd/01_swiss_online_physio_website.md docs/design/WEBSITE_BRIEF_SWITZERLAND.md` confirms the PRD has the product, safety, trust, measurement, and release-gate sections and that the brief covers sitemap, page copy, design system, states, assets, SEO, tracking, phases, and acceptance criteria.
- `test -e docs/research/switzerland/2026-09-swiss-online-physiotherapy-market.md` passed.
- `test -e docs/design/assets/unsplash-register.md` passed.
- `test -e docs/venture/claim-register.md` passed.
- `rg -n 'Photography and asset plan' docs/design/WEBSITE_BRIEF_SWITZERLAND.md` returns one heading.
- Manual review found one duplicated FAQ question and one remaining `Online-Assessment` reference in the revised brief.
- No changes were made to the PRD or website brief.

**Status:** DONE_WITH_CONCERNS. The deliverable is ready as a detailed, gated design brief. Public publication and booking implementation remain blocked by the external gates above, with the small FAQ and terminology cleanup still required before implementation.
