# Page depth research: Swiss online physiotherapy

**Date:** 12 September 2026
**Market:** German-speaking Switzerland only, Swiss Standard German (`de-CH`)
**Scope:** Content and experience depth for the existing Astro home page
**Decision requested:** Add depth that reduces patient uncertainty and supports a paid first appointment. Do not add decorative length.

## Finding

The current page has a clear aesthetic and a sound first argument: problem, first appointment, offer, practitioner proof, safety, and FAQ. It still feels thin because several promises are named but not made tangible. The visitor cannot yet see what a real session produces, how clinical judgement works online, what preparation looks like, how a plan changes between appointments, or what happens when the service is not the right fit.

The recommended move is to deepen the page around the **life of one consultation**. Show the questions a practitioner asks, the decisions a patient can leave with, the handoff when online care is unsuitable, and the practical details that make a private purchase feel safe. This creates substance through care logic, not through more cards, statistics, or generic articles.

Do not use decorative ordinal labels such as `01 / Ersttermin` or `02 / Angebot` in the interface. They read as a design device rather than useful information. Keep the actual sequence in plain headings and prose.

## What current evidence says

### Trust grows from time, continuity, and transparency

The OECD's 2025 *Does Healthcare Deliver?* report says trust is tied to information transparency, shared decision making, and an ongoing respectful relationship. In its PaRIS evidence, 64% of people who felt their primary care professional spent enough time with them trusted the health system, compared with 34% who did not. The same report finds that people with a consistent main care professional report higher trust than people without one. This supports showing the same-clinician relationship, the time available, and the written next step as core content, rather than treating them as a feature list.

Source: [OECD, Building trustworthy 21st century healthcare systems](https://www.oecd.org/en/publications/2025/02/does-healthcare-deliver_978507f1/full-report/building-trustworthy-21st-century-healthcare-systems_2139da94.html), checked 12 September 2026, especially sections 6.1 and 6.2.

The 2025 KLAS patient-centricity playbook identifies low health literacy and lack of transparency about visits and cost as patient barriers. It recommends meeting people where they are, treating the person before the patient, showing the care team, and communicating and educating continuously. For this page, “depth” means answering a patient’s questions in the order they arise, with concrete examples and visible boundaries.

Source: [KLAS Playbook for Patient-Centric Care 2025](https://klasresearch.com/report/klas-playbook-for-patient-centric-care-2025-how-to-succeed-in-patient-centricity/3836), published 5 June 2025, checked 12 September 2026.

NICE guidance on shared decision making recommends supporting decisions before, during, and after the discussion and tailoring the approach to remote video or telephone care. This supports a pre-appointment preparation page, an in-session shared decision explanation, and a post-session written plan.

Source: [NICE NG197, shared decision-making recommendations](https://www.nice.org.uk/guidance/NG197/chapter/recommendations), checked 12 September 2026.

### Swiss competitors add depth through logistics and specificity

The pages reviewed are useful because they reveal what prospective patients need before booking:

| Page | Content that creates depth | Gap or lesson for this practice |
| --- | --- | --- |
| [PhysioProAlp online](https://www.physioproalp.ch/physio-online) | Names the available formats, languages, clinician, qualification, registration, specialist focus, tools, and a starting price. | Concrete person and price build confidence. The use of several consumer video tools is a privacy and clinical governance question. Show the approved video route and one clinician profile with proof. |
| [Motion and Rest booking](https://www.motionandrest.com/book-online) | Shows duration and CHF prices for first, follow-up, and six-week training plan offers. | A package becomes understandable when duration and total price are adjacent. The page mixes physiotherapy and training, so keep the clinical offer and the training offer conceptually separate. |
| [PhysioWelt booking](https://www.physio-welt.ch/en/book-appointment) | Explains booking, initial assessment, treatment plan, aftercare, referral and insurance questions, cancellation, contact details, physical location, and languages. | Visitors want operational answers as much as service promises. Add preparation, payment, cancellation, availability, patient location, and referral states to the Swiss page. |
| [suissephysio online children](https://www.suissephysio.ch/services/online-kinderphysiotherapie-bis-7-jahre) | Gives price, length, who it helps, a five-step technical join flow, and the first-session surcharge. | A plain “what happens when I click the link” explanation removes avoidable anxiety. Adapt it for adults without copying child-specific content. |
| [Curis 360 Zurich](https://www.curis360.com/online-physiotherapy/zurich) | Uses a local landing page, explicit prices, appointment length, clinician biography, question-led copy, and a recovery-plan tier. | Search pages answer location and pricing intent well. The very low foreign-provider price, review count, and broad claims are not a model for Swiss clinical positioning. |

The common pattern is not visual variety. It is **operational completeness**: what the visitor buys, who they meet, what is possible, how much it costs, what preparation is needed, and what happens if the route changes.

### Current patient journeys reward answer-first structure

NHS England published a step-by-step guide for improving general-practice online journeys in February 2025. Its scope is not physiotherapy, but the underlying pattern applies: benchmark the actual journey, identify where people cannot complete or understand a task, then improve the journey itself. For this page, measure whether a visitor can answer the following without contacting the practice: “Is this for me?”, “What happens in the appointment?”, “What do I receive?”, “What does it cost?”, “What if online care is not suitable?”, and “What happens after I book?”

Source: [NHS England, step-by-step guide to improving general practice website online journeys](https://www.england.nhs.uk/publication/step-by-step-guide-to-improving-general-practice-website-online-journeys/), published 3 February 2025, checked 12 September 2026.

## Current page diagnosis

The Astro home page at `site/src/pages/index.astro` currently contains:

- a strong hero with a clear first appointment CTA and illustrative image;
- a four-step care path;
- a dark offer section with the first appointment contents, but no live price yet;
- a practitioner proof section that is still a placeholder;
- a safety and privacy section;
- five FAQ items;
- a final CTA and footer.

The page is not short in pixel height. It is short in **evidence density**. The most material gaps are:

| Gap | Why it matters | Evidence or dependency |
| --- | --- | --- |
| No tangible example of a written next step | A “recommendation” is abstract until the visitor sees its shape. | Can be illustrated with a clearly labelled fictional example. Clinical owner must approve that it does not imply diagnosis. |
| No explicit “what we can observe online” model | The service asks for trust in video assessment without showing the boundary of the method. | Clinical review required. Use categories, not promises: conversation, suitable movement observation, load and goal discussion, referral decision. |
| No “what happens between sessions” detail | The six-week package is hard to distinguish from a set of calls. | Product and clinician must confirm response time, feedback format, exercise delivery, and adjustment cadence. |
| No concrete preparation checklist | First-time video patients may worry about room, clothing, camera, and equipment. | Low-risk content, with clinical review for movement safety. |
| No explanation of when online care stops | Safety copy mentions limits but does not show a decision route. | Clinical lead must approve red flags and escalation instructions. |
| Practitioner proof remains a placeholder | The page cannot earn professional trust until names, credentials, registration, and location are visible. | External publication gate. |
| Price and purchase terms are missing | Private-pay visitors cannot judge the decision. | Final CHF price, VAT, payment, refund, cancellation, and validity are required. |
| FAQ omits booking recovery states | Payment failure, no availability, connection loss, and rescheduling are common anxiety points. | Operational owner must provide real contact and booking behavior. |
| No reason to return before booking | Depth can support a decision, but the current page has no useful take-away for a visitor who is not ready. | Add a short “prepare for your first appointment” guide or a focused activity-specific article only when maintained by a clinician. |

## Recommended depth architecture

Keep the existing visual direction and add five content modules. Each module must answer a patient question and have one visible job.

### A real appointment, shown plainly

Place this after the opening care path. Use a quiet split layout with one large heading and a short, concrete example:

**Heading:** Was Sie im Online-Ersttermin klären.

**Body:** `Sie erzählen, was passiert ist, was Sie wieder tun möchten und was Sie bisher versucht haben. Wir sprechen über Belastung, Alltag und die Bewegungen, die für Ihre Situation sinnvoll beobachtbar sind. Am Ende wissen Sie, was Sie als Nächstes tun können und ob eine Betreuung per Video für Sie passt.`

Show four short rows with verbs, not feature labels:

- `Ihre Geschichte` , Beschwerden, Verlauf, Ziel und bisherige Schritte.
- `Ihre Bewegung` , nur Bewegungen, die sich im Gespräch sicher und sinnvoll beobachten lassen.
- `Ihre Entscheidung` , was Sie jetzt ausprobieren können und worauf Sie achten sollen.
- `Ihr nächster Ort` , online weiter, vor Ort abklären, oder zuerst ärztlich beurteilen lassen.

The fourth row is especially valuable because it makes referral part of good care rather than a failure state. Do not call any video observation a diagnosis. Do not publish a mock clinical report with invented findings.

### A tangible take-away

Add a small document preview or typographic specimen, not a dashboard card. Label it **Beispiel einer schriftlichen Empfehlung** and state **Fiktives Beispiel, keine Patientendaten**. The contents can be:

`Ihr Ziel`  wieder zwei lockere Läufe pro Woche aufnehmen
`Für die nächsten Tage`  die vereinbarte Bewegung in der besprochenen Dosierung testen
`Achten Sie auf`  die gemeinsam festgelegten Warnzeichen
`Nächster Schritt`  Termin mit derselben Fachperson oder Abklärung vor Ort

This makes the promise “written next step” visible without claiming that every person gets the same plan. It also gives the visitor an object to imagine receiving. The clinical owner must approve the example and the wording around warning signs.

### The space between appointments

Place this inside or directly below the package offer. Use prose and a single timeline-like flow only where it describes the actual service. Avoid ornamental numbered markers.

**Heading:** Was zwischen den Terminen weitergeht.

**Copy structure:**

`Sie probieren die vereinbarten Schritte in Ihrem Alltag aus. Wenn Rückfragen oder neue Beobachtungen auftauchen, teilen Sie sie über den freigegebenen Kanal. Ihre Fachperson passt den Plan im nächsten Termin an und sagt Ihnen, wenn eine andere Abklärung sinnvoll ist.`

Then show the confirmed service facts:

- number and length of follow-up appointments;
- whether asynchronous video feedback exists;
- the response window, with timezone;
- how the patient records progress;
- what is excluded, such as unlimited messaging or emergency access.

Do not say “persönliche Betreuung” without describing the behavior that proves it. Continuity is a clinician assignment and a documented handoff, not a warm adjective.

### A preparation and technology panel

Add a compact section before the booking CTA or link to a separate preparation page. Answer:

- what device, camera, microphone, and connection are needed;
- how much floor and wall space is useful;
- what clothing supports movement observation;
- whether another person may attend;
- what to do if the connection drops;
- whether the session is recorded;
- why the patient’s location must be known for every appointment.

Use a checklist with direct language. Keep it practical, never “seamless”, “state-of-the-art”, or “from anywhere” unless the legal and clinical operating model supports those claims.

### A decision route for suitability and referral

The safety section needs more depth than a disclaimer. Give it two layers:

**Routine suitability:** who may be a reasonable candidate for video care, subject to the clinician’s assessment.

**Stop and seek help:** the approved urgent route, warning signs, and who to contact. This content must be written by the responsible clinical professional for the actual Swiss service model. A generic emergency sentence is insufficient.

Show the decision as a short, accessible route:

`Sie schildern Ihre Situation` → `Die Fachperson prüft, ob Video genügt` → `Online weiter, Plan anpassen, oder vor Ort abklären`.

Use arrows only if they aid reading. Keep the explanation in text so it works without animation and can be extracted by search systems.

## Content that adds depth without filler

Add only modules that answer a real decision question:

| Module | Patient question answered | Recommendation |
| --- | --- | --- |
| Clinician method note | “How does this person think about progress?” | High priority once a named clinician can write and approve a 120–180 word first-person note. |
| Activity goal examples | “Is this relevant to my sport?” | High priority. Use three real contexts, such as running, skiing, and football, with no promises and no generic stock athlete stories. |
| Before and after appointment checklist | “How do I prepare and what happens next?” | High priority, low production cost. |
| Example written recommendation | “What do I get for my money?” | High priority, clinical review required. |
| Suitability decision route | “What if video is the wrong choice?” | High priority, clinical and legal review required. |
| Package comparison | “Which option should I choose?” | High priority once price and terms are final. Make the assessment dominant. |
| Clinician authored guide | “Can I learn something useful before I book?” | Medium priority. Publish only with author, review date, sources, and a maintenance owner. |
| Outcomes or testimonials | “Will this work for me?” | Later. Publish only from permissioned, attributable records. Never fill the space with invented reviews. |
| Large market statistics | “Is this a serious problem?” | Low priority for conversion. Keep evidence in a method or market page; it does not replace proof of this practice. |
| Blog grid | “What else is on the site?” | Defer. An empty or generic blog makes a young practice look unfinished. |

## Exact home-page sequence after the depth pass

The home page should read as one coherent decision, with headings that carry meaning:

1. **Opening:** who the service is for, first appointment, Swiss service area, price once approved, named professional proof.
2. **What you can expect:** the care path in plain language.
3. **What the first appointment can clarify:** method boundaries and the four-row consultation explanation.
4. **What you take away:** fictional written recommendation specimen.
5. **The offer:** first appointment and six-week continuation with total price, inclusions, exclusions, response window, and terms.
6. **Between appointments:** continuity and adjustment behavior.
7. **Who you are trusting:** real clinician profile, credentials, registration or authorisation, method note, service languages, Swiss availability.
8. **When another route is better:** safety and referral decision route.
9. **Before you book:** preparation, privacy, location, payment, cancellation, and connection recovery.
10. **Questions:** expanded FAQ, including insurance, suitability, booking errors, and what happens when no appointment is available.
11. **Quiet close:** one booking action with the same label used throughout.

This is more content, but the layout should still have visual restraint. Use alternating reading widths, one document specimen, one clinician image when approved, and a maximum of two full-width colour changes. Do not convert every module into a rounded card or add a counter, logo wall, progress percentage, or floating badge.

## Search and answerability

The depth modules also improve findability if written as self-contained answers. Use question-led headings such as:

- `Was passiert im Online-Ersttermin?`
- `Was kann online beurteilt werden?`
- `Was passiert, wenn eine Untersuchung vor Ort nötig ist?`
- `Was brauche ich für den Videotermin?`
- `Was ist im sechs-wöchigen Paket enthalten?`

Keep each answer accurate without requiring the reader to infer meaning from a visual. Add internal links to `/so-funktionierts`, `/pakete`, `/sicherheit-und-datenschutz`, `/ueber-uns`, and `/fragen`. Use `FAQPage` schema only for questions visibly answered on the page and only after the SEO owner confirms current eligibility. Add `Person`, `MedicalBusiness` or the most appropriate current schema only when the named entity, address or service area, and credentials are real.

The page should remain server-rendered Astro HTML. No depth module should depend on client-side rendering. If an image is used for the written recommendation, the same information must exist as HTML text.

### SEO and GEO: earn visibility through original clinical information

Google's current guidance for AI features is clear: the same fundamentals that support ordinary Search support AI features. Pages must be crawlable, indexable, useful, and written for people. Google explicitly says there is no ideal page length, no need to split content into tiny AI-friendly fragments, and no special `llms.txt` requirement. It also warns against making many similar pages for search variants or rewriting other sources without adding first-hand value.

Sources: [Google, creating helpful, reliable, people-first content](https://developers.google.com/search/docs/fundamentals/creating-helpful-content), checked 12 September 2026, and [Google, optimizing for generative AI features in Search](https://developers.google.com/search/docs/fundamentals/ai-optimization-guide), checked 12 September 2026.

For this practice, the fastest honest route to visibility is not a large AI-generated topic library. It is a small set of pages with real authorship, Swiss context, and information the competitors do not explain well:

| Page | Search and patient intent | Information gain to earn |
| --- | --- | --- |
| `/online-physiotherapie-schweiz` | “Can I get physiotherapy online in Switzerland?” | Explain the exact private-pay offer, who may be suitable, patient-location rule, price, privacy, and when in-person care is required. |
| `/online-physiotherapie-sport` | “Can online physio help me return to sport?” | Show the activity-goal method, what can be observed by video, how progression is adjusted, and the limits of remote assessment. |
| `/online-physiotherapie-laufen` | Running pain and return-to-running intent | Publish a clinician-authored decision guide that distinguishes load questions from situations requiring in-person assessment. Include a real preparation or monitoring worksheet. |
| `/online-physiotherapie-skifahren` | Ski and seasonal injury intent | Explain return-to-skiing decisions, readiness questions, and referral boundaries. Do not publish injury promises or generic ski tips. |
| `/online-physiotherapie-fussball` | Football and return-to-play intent | Explain how the activity goal is defined and what information a clinician needs. Use a clinician byline and review date. |
| `/online-physiotherapie-nacken-ruecken-schulter` | Large adjacent musculoskeletal demand | Launch only after the sports offer has evidence and a clinician has a distinct protocol for recurring desk-related pain. |
| `/sicherheit-und-datenschutz` | “Is online treatment safe and what happens to my data?” | Give the approved suitability, urgent escalation, patient-location, recording, storage, and contact information in direct language. |
| `/ueber-uns` | Practitioner and credential intent | Make the real person, qualification, Swiss authorisation or registration, method, and language capability inspectable. |

These are not a programme of pages to fill immediately. Start with the home page, the Swiss online service page, the practitioner page, the safety page, and one activity page that matches the first paid cohort. Each page needs a named author or clinical reviewer, a review date, a source record where claims rely on external evidence, and a reason it exists for the patient.

### Local Swiss signals

Google's LocalBusiness guidance recommends accurate business details and structured data when a real local business is represented. Use it only after the Swiss entity, address or eligible service-area model, phone, email, hours, and booking destination are confirmed. Do not mark up invented reviews, prices, service areas, or practitioner relationships. Add `Organization` and `Person` connections only when the visible page content supports them.

Sources: [Google, LocalBusiness structured data](https://developers.google.com/search/docs/appearance/structured-data/local-business), checked 12 September 2026, and [Google, Organization structured data](https://developers.google.com/search/docs/appearance/structured-data/organization), checked 12 September 2026.

Use Swiss spelling and local wording consistently in titles, headings, anchor text, metadata, and alt text. Target intent terms naturally, such as `Online-Physiotherapie Schweiz`, `Physiotherapie online Zürich`, `Sportphysiotherapie online`, and `Physiotherapie Kosten Schweiz`, but do not create one thin location page per canton. A service-area claim is a legal and operational fact, not an SEO variable.

### Ranking and citation expectations

No source supports a promise of fast rankings. A new Swiss health domain must first be crawled, indexed, and trusted, then earn relevance and links. Treat the first 30–90 days as an indexing, instrumentation, and evidence period. Assess search performance only after Search Console has enough impressions and after the page has received real referrals. Track branded and non-branded queries separately, and distinguish ordinary clicks from AI feature impressions or citations where the platform reports them.

For GEO, optimize the same human page for extraction: put a direct answer near the relevant heading, name the author or reviewer, cite the source beside the claim, and explain the local exception or limit. Do not hide the answer inside a carousel, canvas, image, or client-only accordion. Google says structured data is not required for AI features, but it remains useful for ordinary Search when it accurately describes visible content. Bing's July 2025 webmaster guidance also reinforces crawlability, complete sitemaps, and keeping changed URLs discoverable; submit the sitemap after the canonical domain and launch pages are final.

Sources: [Bing Webmaster Blog, keeping content discoverable with sitemaps in AI-powered search](https://blogs.bing.com/webmaster/July-2025/Keeping-Content-Discoverable-with-Sitemaps-in-AI-Powered-Search), published 31 July 2025, checked 12 September 2026.

The page should be cited because it contains first-hand Swiss practice information: how this team decides online suitability, what the written recommendation contains, how a six-week sports goal is adjusted, and when it sends someone to in-person care. Those details are the defensible answer to “why this practice?”

## Anti-slop rules for the depth work

- No decorative section numbering. A sequence belongs in the language and care logic.
- No “as seen in”, insurer logos, fake awards, anonymous reviews, invented numbers, or generic trust badges.
- No stock person paired with a patient quote or presented as a clinician.
- No content module whose heading could be pasted onto a dental, coaching, or SaaS site unchanged.
- No generic “our approach” list. Name the real observation, decision, handoff, and follow-up behavior.
- No accordion used to hide core pricing, safety, or practitioner proof.
- No parallax, scroll hijacking, or animated text used to make a thin page feel long.
- No medical promise hidden in a motion label such as “progress”, “recovery”, or “transformation”.
- No editorial series until a clinician owns the review cadence and source record.
- Swiss Standard German throughout. Keep the language direct, calm, and specific.

## Implementation priorities

### Before the next design review

- Replace decorative ordinal labels in the current page with useful headings.
- Add the “what the first appointment can clarify” section.
- Add a preparation checklist with current technical requirements.
- Expand FAQ to cover package contents, location, payment, cancellation, connection loss, and referral.
- Add content placeholders that are visibly gated for the written recommendation specimen, named clinician, price, and safety route.

### Before public launch

- Insert named clinician profiles with checked credentials, registration or authorisation, languages, and Swiss operating details.
- Approve inclusion, exclusion, warning, and referral copy with the clinical owner.
- Publish final CHF prices, payment, invoice, cancellation, refund, validity, and insurance wording.
- Confirm the video, storage, recording, messaging, patient-location, and data-retention behavior against the privacy notice.
- Replace illustrative imagery with owned photography or keep the stock caption explicit.
- Test the full booking journey, including unsuitable, urgent, no-availability, payment failure, connection loss, rescheduling, and cancellation states.

### After the first paid cohort

- Add attributable patient language only after written permission and review.
- Publish three activity-specific pages only where the cohort reveals real search and conversion demand.
- Add clinician-authored educational pieces with source, review date, and owner.
- Compare whether the example recommendation, preparation guide, or activity pages change assessment bookings using predeclared events.

## Measurement plan

The depth work should be evaluated by decisions, not page length:

| Hypothesis | Event or evidence | Pass signal |
| --- | --- | --- |
| Showing the appointment output reduces uncertainty | Clicks from “what you receive” to booking and a short “was this clear?” response | Higher qualified booking starts without higher unsuitable-booking rate. |
| Method boundaries reduce safety anxiety | Suitability-flow completion and referral understanding in a five-person usability test | Users can explain what online care can and cannot do in their own words. |
| Preparation content reduces operational friction | Connection failures, missed appointments, support contacts | Fewer avoidable support contacts per booked appointment. |
| Continuity detail supports package interest | Package selection after reading between-session content | More package consideration without increasing refund or cancellation requests. |
| Real proof beats decorative proof | Scroll depth to clinician proof, booking completion, qualitative trust comments | Visitors mention a real person, credential, or process detail when explaining why they booked. |

Do not optimize for scroll depth by itself. A visitor who finds the answer and books quickly may be succeeding. Record the traffic source, device, page variant, and whether the service was suitable before comparing outcomes.

## Sources and access record

- [OECD, Does Healthcare Deliver? 2025](https://www.oecd.org/en/publications/2025/02/does-healthcare-deliver_978507f1/full-report/building-trustworthy-21st-century-healthcare-systems_2139da94.html), checked 12 September 2026.
- [KLAS Playbook for Patient-Centric Care 2025](https://klasresearch.com/report/klas-playbook-for-patient-centric-care-2025-how-to-succeed-in-patient-centricity/3836), published 5 June 2025, checked 12 September 2026.
- [NICE NG197, recommendations](https://www.nice.org.uk/guidance/NG197/chapter/recommendations), checked 12 September 2026.
- [NHS England, online patient journeys](https://www.england.nhs.uk/publication/step-by-step-guide-to-improving-general-practice-website-online-journeys/), published 3 February 2025, checked 12 September 2026.
- [PhysioProAlp, online physiotherapy](https://www.physioproalp.ch/physio-online), checked 12 September 2026.
- [Motion and Rest, online booking](https://www.motionandrest.com/book-online), checked 12 September 2026.
- [PhysioWelt, online booking](https://www.physio-welt.ch/en/book-appointment), checked 12 September 2026.
- [suissephysio, online children’s physiotherapy](https://www.suissephysio.ch/services/online-kinderphysiotherapie-bis-7-jahre), checked 12 September 2026.
- [Curis 360, online physiotherapy Zurich](https://www.curis360.com/online-physiotherapy/zurich), checked 12 September 2026.

## Status

**DONE_WITH_CONCERNS.** The research and page-depth architecture are complete. Implementation is gated by the same unresolved facts already recorded in the Swiss website brief: named clinician proof, clinical safety wording, service area, final price and terms, privacy and video behavior, and real booking states.
