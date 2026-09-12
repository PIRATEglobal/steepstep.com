# Product requirements document: Swiss online physiotherapy

**Status:** Draft for product and clinical review
**Owner:** Venture and product workstream
**Date:** 12 September 2026
**Market:** Switzerland first
**Product surface:** Public website, suitability flow, paid assessment booking, and manual care delivery
**Source of truth:** [Swiss market refresh](../research/switzerland/2026-09-swiss-online-physiotherapy-market.md), [venture index](../venture/README.md), [project vision](00_vision.md), and [reference direction](../design/REFERENCE_DIRECTION.md)

## 1. Executive product decision

Build a Swiss-first, private-pay online physiotherapy service for active adults who want a clear recovery plan and professional accountability around sport or movement. The public website should sell a defined first step, a paid assessment, rather than asking a visitor to decode a broad clinic menu or commit immediately to a long programme.

The initial service is a clinician-led six-week **„Zurück in die Bewegung“** package. It combines a video assessment, a personalised plan, four Folgetermine, between-session video feedback, and one named functional goal. The website must make the offer, price, clinical suitability, practitioner proof, Swiss availability, privacy approach, and escalation boundary understandable before a visitor books.

This PRD defines the product and its requirements. It does not approve medical claims, a final price, a specific booking vendor, or a final visual design. Those items require the evidence and checks named below.

## 2. Working backwards: the customer announcement

### For an active person in Switzerland

**Recover with a plan you can follow.** Meet a qualified physiotherapist online, understand what is safe to do next, and build back to the activity that matters to you.

You begin with a 60-minute video assessment. Your physiotherapist listens to what happened, checks how you move, screens for reasons online care may not be suitable, and gives you a written next step. If the service fits your situation, you can continue through a six-week plan with the same clinician, practical exercises, and regular feedback.

The service is for people who can be assessed and guided safely online. It does not replace urgent care, an in-person examination, or hands-on treatment when those are needed. You will know where you stand before you buy the longer package.

### Customer quote to earn

> “I knew what I could do, what to watch for, and what my next step was. I did not have to guess from videos or start over with a new person each time.”

This is a product outcome to validate, not a testimonial to publish.

### What must be true for the announcement to be honest

- The named clinicians are qualified and authorised to practise, as the founder has confirmed. Their names, credentials, `de-CH` service capability, and current Swiss operating details must be supplied and checked before publication.
- A clinician can assess the chosen cases safely by video and can identify when an in-person evaluation is needed.
- A visitor can see the first-step price and package hypothesis without requesting a call for basic information.
- The actual booking, payment, consent, privacy, cancellation, and Folgetermin workflow matches what the website promises.
- Every public result claim comes from either a source or an attributable practice record.

## 3. Evidence register

The PRD uses three labels. **Verified** means supported by the current project evidence or an explicit founder fact. **Hypothesis** means a proposition to test with customers or operations. **Open check** means a fact that must be confirmed before the related release gate.

### Verified enough for product direction

- Switzerland is the active business and primary market. [Founder context, venture index]
- The first commercial audience is self-paying and privately insured customers. [Founder context, venture index]
- Practitioners are trained, certified, and authorised to practise. This is a project fact. [Founder statement]
- Sports and physiotherapy are core team strengths. [Founder statement]
- Swiss private in-person physiotherapy benchmarks observed in the research cluster around CHF 130–148 for 50–60 minutes. [Swiss market refresh]
- Visible Swiss online session benchmarks observed in the research cluster around CHF 59 for a 30-minute Nachfolgetermin to CHF 89 for a 45-minute first session. [Swiss market refresh]
- Swiss musculoskeletal need is broad. The FSO reports back or kidney pain for 45% of the population and shoulder, neck, or arm pain for 36% in 2022. [FSO source in market refresh]
- Sports injury and active-lifestyle demand are credible signals. Suva recorded about 296,000 recognised leisure accidents in 2025, with football, skiing, and mountain hiking among frequent contexts. [Suva source in market refresh]
- Online competition is present but fragmented across low-price video consultations, traditional practices, major clinics, and exercise apps. [Swiss market refresh]
- Swiss professional practice authorisation, health-data handling, patient location, and canton-specific operating details remain relevant checks even though the team’s professional status is established. [BAG and Fedlex sources in market refresh]

### Commercial and product hypotheses

- Swiss active adults will pay CHF 149–189 for a clear assessment with a written next step.
- At least some suitable customers will pay CHF 449–649 for a six-week guided recovery package.
- A sports-specific promise will earn more trust and intent than “online physiotherapy for everyone.”
- Continuity with one clinician, a named activity goal, and visible progression will support a premium price above a single online session.
- A free or low-friction fit step before payment will reduce unsuitable bookings without creating a sales call bottleneck.
- The release language is Swiss Standard German (`de-CH`). French, Italian, and English are deferred expansion hypotheses, not launch scope.
- Persistent back, neck, and shoulder pain is the best adjacent test because demand is larger, but it should not dilute the first sports offer.
- International professionals in Switzerland are a later segment hypothesis, after the `de-CH` offer and patient-location rules are proven.

### Open checks before launch

- Exact legal and operational model: Swiss entity, clinician canton, patient location, cross-border or temporary-abroad cases, and whether any additional canton process applies to remote care.
- Exact reimbursement statement for compulsory and private insurance. The public offer must not imply basic-insurance reimbursement without confirmation.
- Final price, tax treatment, payment provider, invoice format, refunds, package validity, and cancellation terms.
- Clinical inclusion and exclusion criteria for each package, approved by the responsible clinical lead.
- Secure video, messaging, storage, processor contracts, retention, deletion, access, and breach process for Swiss health data.
- Actual clinician names, credentials, registrations or authorisations, `de-CH` service capability, availability, and professional indemnity evidence.
- Whether the service records any session, stores exercise videos, or uses third-party analytics on health-related journeys.
- Primary customer evidence by sport, Swiss region, age, and willingness to pay.

## 4. Problem and opportunity

### Customer problem

An active person in Switzerland has pain, a recent injury, or uncertainty about returning to an activity. Existing choices force a tradeoff:

- a local practice may be credible but slow to book, inconvenient to reach, or organised around isolated appointments;
- an online video consultation may be easy to access but too short, generic, or unclear about what happens next;
- an app or exercise library may be cheap but cannot make a clinician’s judgement call;
- a sports or medical referral may solve the acute question but leave the person without continuity during the return to activity.

The user’s functional job is to decide what to do next and follow a safe, specific progression. The emotional job is to regain confidence without feeling dismissed or left alone. The social job is to return to running, skiing, football, hiking, cycling, or work without having to explain the whole story again.

### Product opportunity

Own the space between a one-off video call and a traditional clinic: human, specific, accountable, and easy to buy. The service should sell a confident next step and a measurable activity goal, not a generic promise of pain relief.

### Market gap to test

The strongest gap hypothesis is a Swiss-trust, clinician-led, outcome-oriented online service for active people. It should be more specific and accountable than a low-price consultation, more personal and reachable than a large clinic, and more clinically grounded than an exercise app. This positioning is a hypothesis until conversion, completion, outcomes, and referral need are measured.

## 5. Target segments and jobs to be done

### Primary segment: active adults with sport or movement pain

**Examples:** runners, cyclists, skiers, footballers, hikers, climbers, and recreational athletes in German-speaking Switzerland, served in Swiss Standard German.

**Trigger:** Pain, a non-operative injury, a return after a break, or uncertainty about training load.

**Functional job:** “Help me understand what I can safely do this week and how to return to my activity.”

**Emotional job:** “Give me confidence without false certainty.”

**Buying reasons:** Fast access, sport-specific advice, continuity, home convenience, clear progression, and a professional who understands the activity.

**Barriers:** Fear that online care cannot assess enough, fear of wasting money, need for hands-on treatment, lack of a diagnosis, or a red flag.

**Success evidence:** Paid assessment, package conversion, attendance, completion, progress against the chosen functional measure, referral rate, and post-care recommendation.

### Secondary segment: desk-based professionals with recurring back, neck, or shoulder pain

**Trigger:** A recurring flare-up, reduced work tolerance, long screen days, or frustration with generic exercises.

**Functional job:** “Help me get through my workday and reduce the next recurrence.”

**Risk:** Strong substitution from local practices, apps, workplace services, and free content. Test only after the sports offer has produced a reliable care workflow.

**Test offer:** Four-week Workday Mobility programme, CHF 249–399 hypothesis.

### Later segments

- Post-discharge continuity, only with a referral and explicit handoff.
- International professionals in Switzerland, only as a later segment after the `de-CH` offer and patient-location rules are proven.
- Women returning to activity after pregnancy or pelvic-health rehabilitation, only with specialist competence and a referral network.
- Post-operative and acute injury care, only when inclusion criteria, clinician capacity, and in-person pathways are established.

### Excluded from MVP positioning

- “Physiotherapy for everyone.”
- Emergency, urgent, or red-flag care.
- Cases needing hands-on examination or treatment as a core part of the plan.
- Unsupervised diagnosis or treatment based only on an uploaded video.
- Children, complex neurological cases, post-operative cases, pelvic health, or other specialist populations unless explicitly approved by the clinical lead.

## 6. Service and offer requirements

### 6.1 Assessment, first purchase

**Working name:** Online Physio Assessment
**Price hypothesis:** CHF 149–189
**Duration:** 60 minutes
**Format:** Secure video appointment with one named physiotherapist
**Includes:**

- structured history and goals;
- clinical suitability and red-flag screen;
- movement observation appropriate to video;
- plain-language explanation of findings and limits;
- written next step within an agreed response window;
- recommendation to continue online, seek in-person care, contact a physician, or stop and seek urgent help where appropriate.

The assessment is the default CTA destination. The page may offer a free 15-minute fit conversation only if operations can support it without replacing the paid clinical assessment or collecting unnecessary health information.

### 6.2 Guided recovery package, MVP service

**Working name:** „Zurück in die Bewegung“
**Price hypothesis:** CHF 449–649, final price after the first paid test
**Duration:** Six weeks
**Includes:**

- one 60-minute assessment;
- four 30-minute Folgetermine;
- one named activity or work goal;
- personalised exercise and load plan;
- weekly plan adjustment;
- asynchronous video feedback within a stated service window;
- progress review against a predeclared functional measure;
- explicit referral or next-step recommendation at completion.

The package must state what it does not include: emergency access, unlimited messaging, hands-on treatment, imaging, medical diagnosis outside the clinician’s scope, or guaranteed outcomes.

### 6.3 Performance return, later

**Price hypothesis:** CHF 749–990
**Duration:** Eight to ten weeks
**Eligibility:** Clinician-approved cases with a defined sport-specific progression and no unresolved red flag.

This offer is out of MVP. It can be introduced after the team can show safe suitability, a repeatable progression method, and delivery economics below five clinician hours per package.

### Pricing and purchase rules

- Show the total CHF price, what is included, validity, cancellation policy, payment timing, and likely insurance position before checkout.
- Do not use “from” pricing for the main offer while the visitor is deciding.
- Do not use discounts as the primary proof of value.
- Payment collected before the first appointment is the default hypothesis.
- Offer an invoice if operationally feasible and legally appropriate for Switzerland. Confirm whether this creates tax, reconciliation, or fraud requirements.
- Record every price as a hypothesis until a real checkout test and delivery margin are available.

## 7. Website goals and non-goals

### Goals

1. Make the right visitor feel understood within the first screen.
2. Establish that a real, qualified professional will assess and stay accountable.
3. Explain online suitability and limits before clinical details are collected.
4. Make the first purchase, price, duration, and next step clear within five seconds of reaching the offer.
5. Convert qualified visitors into paid assessments with minimal friction.
6. Reduce unsuitable bookings through a short, respectful fit and safety flow.
7. Give clinicians enough structured information to prepare without collecting more health data than needed.
8. Produce evidence about segment, channel, language, price, suitability, and package demand.

### Non-goals for the first release

- Building a patient app or exercise platform.
- Automating clinical diagnosis, triage, or treatment recommendations.
- Offering compulsory-insurance billing before the model is confirmed.
- Launching French, Italian, or English versions alongside the `de-CH` release.
- Publishing a large content library before the core offer converts.
- Using generic testimonials, invented outcomes, or stock people presented as clinicians or patients.
- Replacing an in-person clinic, emergency service, or physician relationship.

## 8. Information architecture and content model

The public website should be a small set of purposeful pages. Each page must answer one user question and lead to the same primary action where appropriate.

### Primary navigation

- **For you**: home and fit by activity or problem.
- **How it works**: care journey, online limits, what to prepare.
- **Packages**: assessment and guided recovery offer.
- **Your physiotherapist**: named people, credentials, method, and service language.
- **Safety and privacy**: suitability, red flags, emergency guidance, privacy basics.
- **Questions**: concise FAQ covering practical objections.
- **Book an assessment**: primary action.

### Page requirements

#### Home

Must contain:

- a specific sports and active-lifestyle value proposition;
- Swiss availability and `de-CH` service language;
- named human practitioner proof or a clearly marked placeholder before real content exists;
- primary CTA to assessment booking;
- short four-step process;
- package price and inclusions;
- online suitability and limits;
- trust, credentials, privacy, and contact details;
- attributable proof only when available;
- FAQ preview and final CTA.

#### Activity and problem pages

Initial content hypotheses:

- running and knee pain;
- ankle injury and return to running;
- skiing and knee or shoulder recovery;
- football and return to play;
- hiking and load-related pain;
- desk-based neck, shoulder, and back pain as a later page.

Each page must explain the job, who it is for, what online assessment can and cannot do, relevant warning signs, the package path, and the evidence or clinical reasoning behind any claim. Do not publish a page until its clinical inclusion criteria and copy have clinical review.

#### How it works

Explain:

1. Tell us what is happening and where you want to get back to.
2. Meet your physiotherapist by secure video.
3. Receive a plan you can do in your own space.
4. Review progress and decide the next step together.

State appointment length, response windows, equipment expectations, patient location requirement, and the route to in-person care.

#### Packages

Use a comparison that makes the assessment the safe first step. Show total price, appointment count, support, validity, and suitability. Keep package language factual and calm.

#### Practitioner page

For each clinician, show full name, professional title, relevant training, Swiss authorisation or registration detail as approved for publication, sports and clinical focus, `de-CH` service language, service location, and a short personal reason for the work. Never use a badge without a source or permission.

#### Safety and privacy

Explain what the service is, what it is not, red flags, emergency action, patient location, secure video, health-data purpose, retention at a high level, access, deletion or request rights, and how to ask a privacy question. Link to the full privacy notice and legal terms.

#### FAQ

Answer:

- Is online physiotherapy suitable for my problem?
- Do I need a diagnosis or prescription?
- What happens in the first appointment?
- What equipment do I need?
- Can I use private insurance?
- Will compulsory insurance reimburse this?
- What if I need an in-person examination?
- Who can see my information?
- Are sessions recorded?
- Is care available in Swiss Standard German?
- What happens if I need to cancel?
- Can I book if I am temporarily outside Switzerland?

### Claim and proof model

Every public claim must have a record with:

- exact copy;
- type: founder fact, clinician fact, external source, measured practice result, or hypothesis;
- source or named owner;
- date checked;
- permitted markets and service language;
- expiry or review date;
- required approval.

The site must distinguish method evidence from outcomes observed by this practice. A general study cannot be presented as the team’s result.

## 9. Core user flows

### Flow A: visitor to paid assessment

1. Visitor lands on home, activity page, search result, partner link, or referral page.
2. Visitor understands problem fit, clinician, Swiss scope, and primary CTA.
3. Visitor opens a short suitability flow.
4. Flow asks only the minimum needed to decide whether an assessment can be booked.
5. Visitor confirms current location, age band if clinically required, problem category, onset or context, urgent warning signs, and consent to contact.
6. If warning sign or unsuitable case is selected, the flow stops the booking path and gives plain next-step guidance. It does not diagnose.
7. If potentially suitable, visitor selects assessment time, reviews price and terms, provides required contact details, consents to video and data handling, and pays.
8. Visitor receives confirmation, preparation instructions, cancellation terms, secure session link, and emergency reminder.
9. Clinician receives the structured intake and can amend suitability before care begins.

### Flow B: assessment to package

1. Clinician completes assessment and records suitability, findings within scope, functional goal, and recommendation.
2. Visitor receives the written next step and package recommendation where suitable.
3. Visitor sees package price, schedule, inclusions, limits, and cancellation terms.
4. Visitor pays and books the first series of Folgetermine.
5. System or operator records package start, validity, appointment count, goal, and consent state.

### Flow C: package delivery

1. Clinician opens the current plan and last progress measure.
2. Patient confirms location and any change in symptoms or warning signs.
3. Clinician reviews movement and adherence, updates the plan, and records the next action.
4. Asynchronous video or message is sent within the promised response window.
5. At the end, clinician records progress, whether the goal was reached, and whether to continue, discharge, or refer.

### Flow D: unsuitable or urgent case

The user must receive clear guidance appropriate to the selected warning sign or limitation. The flow must never promise a diagnosis, wait for a clinician reply in an emergency, or collect a detailed history before directing immediate help. Exact red-flag copy requires clinical approval and must include relevant Swiss emergency guidance.

### Flow E: service language and location

The MVP launches in Swiss Standard German (`de-CH`) only. There is no language selector in the release. All public copy, booking labels, consent text, safety guidance, and support messages must use `de-CH`. Future French, Italian, or English versions are deferred and must not create launch dependencies. Before each appointment, the patient confirms their current location. The service must define what happens if the patient is outside the permitted service area.

## 10. Clinical triage and safety requirements

These requirements protect the care workflow. They do not replace the responsible clinician’s protocol or legal advice.

- The booking path must include a clinician-approved suitability screen before a first clinical appointment.
- The screen must identify urgent warning signs and route to emergency or medical care without offering an online assessment as the next action.
- The screen must make clear that video cannot provide hands-on examination, palpation, imaging, or every diagnostic test.
- Each appointment must capture the patient’s current location and a reliable contact method.
- Clinicians must be able to stop, redirect, or refer a case before or during the session.
- The system must show the referral instruction in the patient confirmation and clinician workspace.
- The service must define a response-time boundary for asynchronous messages. Messages must not be marketed as emergency access.
- The patient must understand what to do if symptoms worsen between appointments.
- Any automated check may sort or collect answers, but it must not diagnose, risk-score, or recommend treatment without clinician review.
- The service must log safety events, near misses, unsuitable bookings, referrals, and complaints in a controlled register.
- Clinical notes must be separate from marketing analytics. No health answer should enter an advertising audience by default.

## 11. Functional requirements

### Public website

**FR-001, value proposition:** The first screen states the audience, problem, online format, Swiss scope, and next step in plain language.

**FR-002, transparent offer:** A visitor can see the assessment price, package price hypothesis, inclusions, duration, and limits without contacting the team.

**FR-003, practitioner proof:** The site displays approved names, photographs, professional details, `de-CH` service language, and Swiss operating information before booking.

**FR-004, safety visibility:** Suitability limits and emergency boundaries are reachable from the first screen and appear before sensitive intake.

**FR-005, trust proof:** Every testimonial, outcome, credential, logo, and statistic has an attributable source or remains unpublished.

**FR-006, responsive content:** Swiss Standard German (`de-CH`) copy can expand by at least 30 percent without clipping or breaking hierarchy. Future translations are deferred and are not required by the release.

**FR-007, asset register:** Each temporary Unsplash image is recorded with source URL, photographer, license check date, and intended replacement slot. Stock subjects are never presented as clinicians or patients.

### Fit and booking

**FR-008, progressive intake:** The suitability flow asks one clear question per step and explains why health-related questions are needed.

**FR-009, stop path:** An unsuitable or urgent answer prevents payment and displays the approved next action.

**FR-010, booking:** Suitable visitors can choose a clinician, available time, and assessment duration. The release presents `de-CH` as the only service language and has no language selector.

**FR-011, payment:** The checkout shows currency, total, taxes or tax status where applicable, cancellation, refund, package validity, privacy, and insurance wording before payment.

**FR-012, confirmation:** Confirmation includes appointment time zone, patient location reminder, secure link, preparation, cancellation, contact path, and urgent-care boundary.

**FR-013, consent:** The service records separate consent or acknowledgement states for video care, health-data processing, contact, terms, and any optional recording. No recording is the default unless a later decision approves it.

**FR-014, recovery:** Failed payment, lost connection, expired link, duplicate booking, cancellation, reschedule, and incomplete form paths are recoverable without losing the user’s safe next step.

### Clinician and operator workflow

**FR-015, intake review:** A clinician can review, correct, and reject a booking before the first session.

**FR-016, care record:** The operator can record appointment status, suitability, functional goal, progress measure, referral, package validity, and completion.

**FR-017, communication:** The operator can send approved preparation, reminder, Folgetermin, and referral messages without exposing health data to the wrong recipient.

**FR-018, audit trail:** Access to clinical intake, consent changes, booking changes, refunds, and deletion requests is logged.

**FR-019, export and deletion:** The operator can fulfil an approved patient data request, correction, export, retention expiry, or deletion workflow subject to legal and clinical record duties.

## 12. Non-functional requirements

### Privacy and security

- Treat health answers, session notes, movement videos, and identifiable care outcomes as sensitive health data.
- Collect the minimum data needed for the specific step. Do not ask for a full clinical history on a marketing page.
- Use privacy reviewed processors, contracts, access controls, encryption in transit and at rest where provided, strong account protection, and least-privilege staff access.
- Do not record video by default. If recording is ever offered, it needs a separate purpose, consent, retention, access, and deletion design.
- Keep clinical data out of ad pixels, session replay, heatmaps, and general analytics unless specifically reviewed and configured to exclude it.
- Provide a clear privacy notice, data subject contact, retention logic, processor list where required, and breach response owner.
- Confirm Swiss hosting or the approved cross-border transfer basis before production.

### Accessibility

- Meet WCAG 2.2 AA for the public site and booking flow.
- Test keyboard navigation, focus order, visible focus, screen-reader labels, error recovery, reduced motion, captions, and 200% zoom.
- Maintain 44px minimum touch targets and sufficient spacing on small screens.
- Do not rely on colour alone for status, warnings, or selected options.
- Provide captions or a text alternative for instructional video.
- Ensure warning and emergency guidance is readable, direct, and available without motion or sound.

### Performance and reliability

- Optimise the first screen and booking path for a fast mobile connection.
- Do not delay the booking action for decorative animation or third-party marketing scripts.
- Show clear loading, unavailable, error, and retry states for availability, payment, and video-link operations.
- Preserve entered non-sensitive data through recoverable errors. Never silently discard a safety answer.
- Establish production targets for page performance, uptime, video quality, and support response before selecting vendors. These values are open checks, not invented commitments.

### Language and content quality

- MVP copy is written and reviewed by a native Swiss Standard German speaker.
- Use Swiss Standard German spelling and conventions throughout the public site and care flow.
- Keep a source copy, approved `de-CH` copy, claim source, and review date for every important page.
- Use “Sie” or “du” consistently after a product decision. The recommendation is formal “Sie” for the first Swiss healthcare surface until customer evidence supports a change.

## 13. Trust proof requirements

Trust is a product requirement. The site must earn it with specifics.

### Required before public launch

- Full practitioner names and real photographs.
- Relevant qualification, authorisation or registration details, and professional indemnity confirmation, with the exact public wording approved.
- Swiss business contact details, responsible operator, service region, and `de-CH` service language.
- Plain explanation of the clinical method and the limits of online care.
- Transparent assessment and package price, inclusions, validity, cancellation, and insurance position.
- Secure video and data-handling explanation linked to a full privacy notice.
- Emergency and referral guidance.
- At least one attributable source for each external need or method claim.

### Add only when earned

- Patient stories with written permission, real identity or approved anonymisation, and no implication that a stock image is the person.
- Practice outcome metrics with a defined denominator, time window, instrument, missing-data rule, and clinical owner.
- Partner logos with permission and a real relationship.
- Reviews that can be verified and are presented without cherry-picking.

### Never publish in MVP

- “Pain-free,” “guaranteed recovery,” “instant,” or “works for everyone.”
- Anonymous quotes with no internal source.
- Fictitious awards, seals, insurer logos, or “Swiss quality” marks.
- Stock clinicians or patients used to imply the actual care team or results.
- Unqualified claims that the service is covered by compulsory insurance.

## 14. Measurement and success metrics

The first website is also a demand and safety instrument. Metrics must separate marketing behaviour from clinical records.

### North star candidate

**Suitable patients who complete an agreed activity or work outcome with clinician-confirmed safe care.** This is a candidate until the team defines the operational outcome measure.

### MVP leading metrics

- Qualified assessment booking rate by landing page and channel.
- Assessment payment completion rate.
- Proportion of bookings passing clinician suitability review.
- Assessment attendance rate.
- Assessment-to-package conversion rate.
- Package completion rate.
- Clinician time per completed package.
- Functional measure change agreed before care begins.
- Referral and in-person escalation rate.
- Refund, complaint, cancellation, and safety event rate.
- Patient-reported clarity and confidence after assessment.
- Acquisition cost by channel after enough volume exists to interpret it.

### Four-week concierge pass criteria

Use the existing market-test thresholds as the first decision gate:

- at least 8 paid assessments;
- at least 4 package purchases;
- at least 70% package completion;
- positive change on a predeclared functional measure;
- no serious safety event;
- clinician time under 5 hours per package.

Pause or change the offer if leads will only buy sessions below CHF 100, more than 25% require in-person assessment, completion is below 60%, or discounts erase contribution margin.

### Event model

Track only the minimum event data needed for product learning:

- `page_viewed`, page and `de-CH` service language;
- `cta_clicked`, location and offer;
- `fit_started`, source and `de-CH` service language;
- `fit_completed`, outcome category only, never raw health details in marketing analytics;
- `fit_stopped`, approved reason category;
- `assessment_slot_selected`;
- `assessment_paid`;
- `assessment_attended`;
- `package_viewed`;
- `package_paid`;
- `package_completed`;
- `referral_recommended` as a controlled clinical metric, separated from ad reporting;
- `booking_cancelled`, approved category;
- `privacy_request_received`.

Do not record free-text health answers, diagnoses, exercise videos, or session notes in general analytics.

## 15. MVP and later scope

### MVP, required for the first paid cohort

- Swiss Standard German (`de-CH`) only, with no language selector.
- Home page, packages page, how-it-works page, practitioner page, safety/privacy page, FAQ, and one or two clinically reviewed activity pages.
- Paid 60-minute assessment.
- One six-week „Zurück in die Bewegung“ package with final price chosen for the test.
- Short suitability and red-flag flow.
- Availability, booking, payment, consent, confirmation, reschedule, and cancellation.
- Secure video and approved asynchronous message path.
- Manual clinician review and manual care record if that is safest for the pilot.
- Claim register, trust proof register, Unsplash asset register, privacy notice, terms, and safety copy.
- Baseline and completion measure for the chosen activity goal.
- Basic analytics that exclude health details.

### Later, after evidence

- French, Italian, and English versions, deferred until the `de-CH` offer has evidence.
- Persistent back, neck, and shoulder programme.
- Performance Return package.
- Referral portal or clinician-to-clinician handoff.
- Employer offer for desk-based pain.
- Partner dashboards or club programmes.
- Patient account, exercise library, automated reminders, and progress view.
- Insurance invoice integration after reimbursement and billing requirements are confirmed.
- Personalised content and search landing page expansion.

### Explicitly defer

- AI diagnosis, automated treatment recommendation, or unsupervised risk scoring.
- Broad DACH launch.
- Native mobile app.
- Multi-clinician marketplace.
- Recording and automated analysis of sessions.
- Claims of superior outcomes without a designed measurement programme.

## 16. Constraints and dependencies

- The founder confirms that practitioners are qualified and authorised. The product team must obtain the exact public proof and retain it in the trust register.
- Swiss canton, entity, privacy, billing, advertising, and patient-location checks remain release dependencies.
- The team is already active in Switzerland, so Swiss product decisions take precedence over the earlier Germany-first recommendation in older reports. The release serves Swiss Standard German (`de-CH`) users only.
- The service must remain private-pay or privately insured in its initial positioning.
- The site should use commercially usable Unsplash placeholders only as a temporary measure, with each asset locally archived and replaceable by owned photography.
- The design register is calm, editorial, precise, human, and clinical. The final design brief follows this PRD and must not introduce visual choices that weaken trust or comprehension.
- The copy must be Swiss Standard German, warm, direct, caring, concise, and evidence-linked. It must not use playful wellness language or unsupported certainty.
- The product must support a lean concierge delivery model before platform investment.

## 17. Acceptance criteria

### Product and content

- [ ] A first-time visitor can name the audience, service, first step, price, and online limit after a five-second first-screen test.
- [ ] The assessment and package pages state duration, inclusions, price, validity, cancellation, insurance position, and what is excluded.
- [ ] The practitioner page contains verified names, credentials, authorisation wording, `de-CH` service language, photographs, and contact or service region.
- [ ] Each published claim has a source, owner, check date, and approval state.
- [ ] No testimonial, outcome, badge, logo, or statistic appears without attribution.
- [ ] Swiss Standard German (`de-CH`) MVP copy passes native-language review. Later translations are outside release scope and have no acceptance requirement.

### Clinical and safety

- [ ] Clinical lead approves inclusion, exclusion, red-flag, escalation, and asynchronous response rules.
- [ ] The fit flow stops an urgent or unsuitable case before payment and gives approved next-step guidance.
- [ ] Patient location is confirmed for every appointment.
- [ ] The product states that online care cannot provide hands-on examination or treatment.
- [ ] Clinicians can reject, refer, or stop a case before or during care.
- [ ] Safety events, near misses, referrals, complaints, and unsuitable bookings have a controlled register.

### Privacy and security

- [ ] Privacy notice, terms, consent language, processor review, retention, deletion, access, and breach responsibilities are approved for the Swiss operating model.
- [ ] Marketing analytics cannot ingest raw health answers, diagnoses, session notes, or exercise videos.
- [ ] Video recording is off by default and cannot be enabled accidentally.
- [ ] Access to health data and consent changes is logged.
- [ ] Data request and deletion paths are tested with a non-production record.

### Experience and accessibility

- [ ] The website works at 360px, 390px, 768px, 1280px, and 2560px widths and at 200% zoom.
- [ ] Keyboard and screen-reader users can complete or safely exit the fit and booking flow.
- [ ] Focus, error, loading, retry, payment failure, no availability, reschedule, and cancellation states are designed and tested.
- [ ] Body text and warning states meet WCAG 2.2 AA contrast.
- [ ] Touch targets are at least 44px and no mobile action bar obscures content, errors, or consent controls.
- [ ] Reduced-motion users receive the same information and can book without waiting for animation.

### Commercial and operational

- [ ] Real checkout confirms the chosen CHF price, payment, invoice or receipt, cancellation, and refund path.
- [ ] A clinician can review intake and amend suitability before the session.
- [ ] Confirmation and reminder messages match actual appointment and support behaviour.
- [ ] The first four-week test has event tracking and a predeclared pass or pause decision.
- [ ] The team can report assessment conversion, package conversion, completion, clinician time, functional change, referral rate, and safety events without manual reconstruction from scattered systems.

## 18. Release gates

### Gate 0, evidence and product approval

Pass when the target segment, assessment, package hypothesis, clinical boundaries, and Swiss Standard German (`de-CH`) release scope are signed off by the product and clinical owners.

### Gate 1, trust and operating readiness

Pass when practitioner proof, Swiss entity and canton checks, privacy and processor review, insurance wording, payment terms, safety copy, and referral path are documented.

### Gate 2, concierge pilot readiness

Pass when the site, fit flow, booking, payment, consent, video, manual clinician review, care record, support path, and analytics exclusion rules have been tested end to end.

### Gate 3, continue or change

After the first 8–12 assessments and at least 4 package purchases, apply the pass criteria in Section 14. Keep the product narrow if the evidence supports it. Change segment, price, offer, or operating model if it does not.

## 19. Decisions requested from product owners

The release language is settled as Swiss Standard German (`de-CH`) only, with no language selector. These are the remaining smallest decisions needed before a design brief and build plan:

1. Confirm the first CTA. **Recommendation:** “Online-Ersttermin buchen,” because it makes the paid first step clear and lets clinical suitability be assessed before package commitment.
2. Choose the first price test. **Recommendation:** CHF 169 assessment and CHF 549 „Zurück in die Bewegung“ package, because they sit above visible online session anchors while keeping the package below the cost of many repeated private in-person visits. These remain test prices.
3. Confirm whether a free fit conversation is operationally available. **Recommendation:** keep it optional and short, and do not make it the main path until its effect on suitability and conversion is measured.

## 20. References

- [Swiss online physiotherapy market refresh](../research/switzerland/2026-09-swiss-online-physiotherapy-market.md)
- [Venture index](../venture/README.md)
- [Venture decision memo](../venture/history/FINAL_DECISION_MEMO_DACH.md)
- [Venture and go-to-market plan](../venture/history/VENTURE_GO_TO_MARKET_DACH.md)
- [Legal and regulatory assessment](../venture/history/LEGAL_DACH.md)
- [Market and competition memo](../venture/history/MARKET_COMPETITION_DACH.md)
- [Website reference direction](../design/REFERENCE_DIRECTION.md)
- [Project vision](00_vision.md)

**Status:** DONE for the product requirements draft. The next artifact is the website design and copy brief, after product owners resolve the four decisions in Section 19 and the named open checks are assigned.
