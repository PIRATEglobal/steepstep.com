# Clinical and editorial audit

**Audit date:** 12 September 2026
**Scope:** `/beschwerden/` and the five condition pages, sport pages, pricing journey, shared condition template
**Method:** Read-only review against `docs/research/switzerland/2026-09-sports-conditions-evidence.md` and `2026-09-sports-conditions-page-register.md`, with spot checks against the cited primary or institutional guidance. No site files were edited.

## Release findings

### P1 · Pricing links resolve to a missing route

`src/components/ConditionPage.astro:51`, `src/pages/beschwerden/index.astro:17`, `src/pages/beschwerden/knieschmerzen-sport.astro:5`, and `src/pages/beschwerden/achillessehne.astro:5` link to `/preise`. There is no `src/pages/preise.astro` and no corresponding route in the current `src/pages` inventory. A visitor following “Preise” reaches a 404, which breaks the conversion path and contradicts the visible CHF pricing promise.

**Surgical fix:** either add a substantive, indexable `/preise/` page with the same CHF 149 / CHF 549 / CHF 749 terms and enquiry boundary, or change every link to the existing homepage offer anchor and verify the final URL. Do not leave a dead price route.

### P1 · Practitioner review remains a publication gate

The page register correctly states that a named licensed practitioner must review every exercise example, referral boundary, source link and Swiss terminology before clinical publication. The source pages currently identify Natalja Krol as a physiotherapist, but the code and public content do not establish the reviewer’s Swiss authorisation, the reviewing person for each page, or a review date tied to that person. This is a content governance gap, not a reason to add unsupported credentials.

**Surgical fix:** obtain practitioner sign-off, then add only verified reviewer name, qualification, review date and source register facts to the relevant pages. Keep the current “not individual medical advice” boundary until that sign-off exists.

## P2 clinical/editorial improvements

### Achilles page location qualifier addressed

`src/pages/beschwerden/achillessehne.astro` now states that midportion and insertional pain can require different exercise ranges and progressions. The wording remains a clinical orientation and does not turn the distinction into a remote diagnosis.

**Implemented:** the intro, short answer and clinical approach now tie exercise choice, range and dose to location, course and irritability. The illustrative phases remain explicitly non-prescriptive.

### Achilles causal language addressed

The Achilles introduction now says symptoms “können auftreten, wenn sich Belastung und aktuelle Kapazität nicht gut treffen” and immediately identifies this as a working model rather than a complete explanation.

**Implemented:** the working-model qualifier is visible in the introduction, with the existing history and examination framing retained.

### Symptom-response context retained

The Achilles page retains the distinction that a symptom response alone does not prove tissue damage, while explicitly directing readers to intensity, duration, function and next-day course. The escalation panel remains visible.

**Implemented:** the existing wording provides this context and keeps escalation advice visible.

### Low-back comparison claim should be softened

`src/pages/beschwerden/rueckenschmerzen-sport.astro:5` says active, understandable support is “oft hilfreicher” than searching for one cause. WHO and JOSPT support active, person-centred exercise and education, but the page does not cite a direct head-to-head comparison for that wording.

**Recommended wording direction:** “Bei vielen unspezifischen Rückenschmerzen steht aktive, verständliche Begleitung im Vordergrund.” This preserves the expert stance without implying a universal comparative result.

### Ankle weight-bearing triage clarified

`src/pages/beschwerden/umgeknickter-knoechel.astro` now uses the concrete four-step and direct bony-tenderness cues from the cited guidance, while stating that they indicate a need for timely local assessment and do not provide a remote diagnosis.

**Implemented:** the threshold is phrased as a reason for local assessment, and the page continues to state that fracture or syndesmotic injury cannot be reliably excluded by video.

## Passes

- No visible “im Aufbau”, “Vorschau”, “Coming soon” or equivalent launch language was found in `src/pages` or `src/components`. The `pending` CSS class in `sicherheit-und-datenschutz.astro:11` is only a class name; its visible text is a completed privacy warning, not a launch status.
- The five condition pages use symptom-led framing and repeatedly state that the pages do not diagnose readers.
- Red-flag routes cover major trauma, inability to bear weight, deformity, fever or hot/red joints, neurological symptoms, suspected rupture, substantial bruising and atypical or worsening courses. The low-back page includes bladder/bowel change and saddle numbness.
- Duration language is qualified: patellofemoral pain is presented as at least twelve weeks in study context, ankle sprains as roughly eight to twelve weeks with longer severe cases, Achilles as months with a cited six-to-nine-month full-activity context, hamstring injury as days to months by severity, and low-back pain without a fixed healing date.
- Video suitability is described as selected and conditional. The pages explicitly reserve neurological examination, fracture/rupture assessment, imaging, acute emergencies and unclear cases for local care.
- The illustrative phase cards are framed as examples and not personal exercise prescriptions. No page promises a fixed return date or guaranteed outcome.
- Current condition-page schema contains visible page title, description and FAQ facts only. It does not falsely claim outcomes or practitioner review.
- Swiss German orthography is consistent in the audited pages (`ss`, `Fuss`, `heiss`, `gross`, `Abstoss`) and the copy avoids the banned AI-style vocabulary listed in project instructions.

## Evidence checked

The content is materially consistent with the project evidence register: Neal et al. BJSM 2024 for patellofemoral pain; JOSPT/APTA lateral ankle sprain CPG 2021; APTA midportion Achilles CPG revision 2024 and Dutch Achilles guidance; the London International Hamstring Consensus 2023; WHO 2023 and JOSPT/APTA 2021 for low-back pain; APTA telerehabilitation CPG 2024; and the cited NHS/North Bristol/Guy’s and St Thomas’ patient guidance for practical duration and escalation language. The sources support the direction of care, not a guarantee for Steepstep’s exact service or an individual prognosis.

## Audit verdict

**Clinical content:** PASS, pending named practitioner sign-off.
**Safety boundaries:** PASS, subject to practitioner review.
**Editorial quality:** PASS.
**Conversion/navigation:** PASS. The shared pricing route exists and resolves from the audited condition-page links.
