# Review: online physiotherapy venture assessment, DACH

**Review date:** 12 September 2026
**Scope:** independent evidence and decision review of `EXECUTION_BRIEF_PHYSIOTHERAPIE_DACH.md`, `LEGAL_DACH.md`, `MARKET_COMPETITION_DACH.md`, `VENTURE_GO_TO_MARKET_DACH.md`, and `venture_unit_economics.py`.
**Disposition:** APPROVE WITH MATERIAL CORRECTIONS. This is a decision review, not legal advice.

## Review method and limits

I checked the high impact legal and competitor claims against official legislation or authority pages and provider owned pages. The review is a same family, single reviewer pass, so it is not independent external counsel or independent model consensus. The supplied documents are dated 12 September 2026. Legal and price observations need a fresh check before launch.

## Ranked findings

### P1, Germany recommendation is conditional on practitioner authorization

`LEGAL_DACH.md` correctly quotes the Heilpraktikergesetz definition of healing practice and the MPhG protected title. However, `VENTURE_GO_TO_MARKET_DACH.md` treats Germany-first as the default launch recommendation while the proposed package is called physiotherapy, includes an assessment and treatment plan, and targets people without a prescription. The documents do not establish that the proposed German clinicians have a Heilpraktiker authorization or another basis for direct-access treatment.

The official German sources support the risk: MPhG §1 requires permission to use the physiotherapist title, while HeilprG §1 requires permission to practise healing arts and defines that activity as professional diagnosis, healing or alleviation of illness, suffering, or bodily injury. These are different permissions. [MPhG §1](https://www.gesetze-im-internet.de/mphg/__1.html), [HeilprG §1](https://www.gesetze-im-internet.de/heilprg/__1.html).

**Required correction:** make the country decision conditional. Germany is first only if written advice confirms the exact clinician and entity model. If the available clinicians are Austrian-qualified and Austria is operationally available, Austria is the cleaner first legal test because MTDG §28(3) expressly permits telemedicine when professionally defensible and lege artis and requires patient information about communication-media particulars. [Austrian MTDG §28](https://ris.bka.gv.at/eli/bgbl/i/2024/100/P28/NOR40264033), lines 78–84.

### P1, the two strategy memos disagree on the first wedge

`MARKET_COMPETITION_DACH.md` recommends persistent or recurrent back and neck pain for working adults, with sports as a channel and proof point. `VENTURE_GO_TO_MARKET_DACH.md` recommends sports/MSK and names “Performance Reset” as the launch package. Both are plausible, but they imply different acquisition channels, outcome measures, clinical exclusions, price willingness, and competitor sets. A founder cannot run both as one focused pilot and interpret the results cleanly.

**Required correction:** choose one primary wedge before the first paid cohort. Recommendation: keep sports as the primary wedge only if the team has credible sports credentials and partner access. Otherwise test desk-worker neck/back pain as the adjacent, broader remote-compatible wedge in a separately tagged cohort. Do not combine the cohorts in the RAT or call the result a single product-market signal.

### P1, the RAT is too compound to be a single go/no-go test

The RAT requires 8 of 20 prospects to pay at least €399, complete 70% of touchpoints, improve function, and have no safety incident. This is useful as a north-star, but it conflates willingness to pay, adherence, clinical effect, and safety. A zero safety incident cannot be evaluated as a stable rate with 20 cases, and a single serious event should be handled by a clinical incident protocol regardless of aggregate conversion.

**Required correction:** use separate gates: (a) safety and referral gate, with no preventable serious incident and clinical-lead sign-off; (b) paid conversion gate, at least 8/20 eligible assessed prospects; (c) delivery gate, median clinician time at or below 4 hours; (d) adherence and outcome gates, reported with denominators and a pre-specified measure. A failure in safety stops the cohort; it is not averaged against revenue.

### P1, package economics do not support the proposed €150 contribution gate at base assumptions

The script reproduces the stated values:

| Scenario | First contribution | Cohort contribution | LTV:CAC | Capacity | Fixed-cost break-even |
|---|---:|---:|---:|---:|---:|
| Downside | -€211.63 | -€202.76 | -1.45x | 24.1 | not viable |
| Base | €55.07 | €82.54 | 1.21x | 27.1 | 36.3 packages/month |
| Upside | €246.55 | €294.50 | 5.53x | 33.3 | 10.2 packages/month |

The arithmetic is correct. The documents should state more clearly that base first-order contribution is only €55. The €150 first-order contribution threshold is a validation target requiring realised price, time, support, refunds, payment fees, and CAC to improve materially. It is not a consequence of the base case. The break-even calculation uses expected repeat contribution to fund current fixed costs, so it is a cohort approximation and should not be read as same-month cash break-even.

**Required correction:** add a cash view with timing and tax/VAT treatment before committing to the €15,000 budget. Keep paid acquisition off until realised first-order contribution is positive with a margin for clinical refunds and support. The “usual 3x LTV:CAC heuristic” is a management heuristic, not evidence of this market, and should be labelled as such.

### P2, Germany advertising analysis is legally relevant but its scope is not precise enough

The legal memo correctly cites HWG §3 and §9. The official text says misleading advertising is prohibited and §9 restricts advertising for remote diagnosis or treatment unless generally accepted professional standards do not require personal physician contact. [HWG](https://www.gesetze-im-internet.de/heilmwerbg/BJNR006049965.html), lines 80–103 and 251–254.

The memo should avoid implying that §9 is a blanket prohibition on the service itself. It is an advertising rule, and the exception is fact-sensitive. The proposed landing pages contain treatment claims, diagnosis terms, testimonials or outcome language that may trigger further review under HWG, UWG, professional rules, and medical-device rules if software makes treatment recommendations.

**Required correction:** maintain a claim register with the exact German wording, evidence, reviewer, and channel. Counsel should review “return to sport,” “schmerzfrei,” “evidenzbasiert,” testimonials, self-check questions, and any claims made by creators or referral partners.

### P2, competitor evidence is strong for observed prices but weak for market distance

The provider observations are supported. DR PHYSIO publishes €150 for the initial assessment, €150 for a single appointment, €300/month for ongoing support, and €450/month for intensive support, with app exercises and WhatsApp support. [DR PHYSIO online rehab](https://www.physio-dr.de/online-reha), lines 106–150 and 216–217. Digiphysio’s booking page lists CHF 89 for a 45-minute first online appointment, CHF 59 for a 30-minute follow-up, and CHF 299 for a 120-minute running assessment. [Digiphysio booking](https://tbooking.ch/de/frank-arends/4896-6049), lines 48–71.

These pages validate price anchors and direct supply. They do not establish competitor reach, conversion, retention, clinical outcomes, market share, or that a package at €449–€549 is accepted at scale. The phrase “higher willingness-to-pay proxies” for Switzerland is not sufficiently evidenced by the cited sources.

**Required correction:** label competitor “distance” as offer similarity and observable price, not market power. Add a live mystery-shop or structured page audit before launch, and remove or qualify any uncited claims about search density, reach, or willingness to pay.

### P2, Swiss legal treatment is appropriately cautious but needs a named-canton launch test

The Swiss memo’s core claim is supported by BAG material: GesBG sets federal education and professional standards, while cantons issue and supervise professional practice permits. [Swiss BAG GesBG](https://www.bag.admin.ch/bag/de/home/berufe-im-gesundheitswesen/gesundheitsberufe-der-tertiaerstufe/bundesgesetz-ueber-die-gesundheitsberufe.html). BAG’s FAQ says the cantonal authority decides case by case whether a person works in own professional responsibility and therefore needs a permit. [Swiss BAG FAQ](https://www.bag.admin.ch/bag/de/home/berufe-im-gesundheitswesen/gesundheitsberufe-der-tertiaerstufe/faq-bundesgesetz-ueber-die-gesundheitsberufe.html).

**Required correction:** do not describe Switzerland as a single national launch market. Name the canton, clinician location, entity, and care location in the counsel question. The stated Swiss “private-pay economics” remain a hypothesis, not a verified market fact.

### P3, source and date hygiene needs one final pass

The source links reviewed resolve for the key claims above. The documents use a future-looking date relative to many ordinary research workflows, which is valid in this environment but makes revalidation essential. Some primary-source links were not fetchable in one pass, including the HeilprG PDF and one BAG page, while equivalent official HTML/search records were available. Record exact retrieval dates and, where possible, paragraph or section references in the final memo.

## Reconciled decision

**Proceed with a constrained pilot, but do not approve “Germany-first” as an unconditional decision.** The venture has a testable private-pay offer and credible observed price anchors. It is not ready for a broad DACH launch, paid scale, or proprietary platform. The immediate decision gate is legal operating-model confirmation plus 20 manually delivered cases in one country and one primary wedge.

Use this order:

1. Confirm the clinician authorization, entity, place of care, insurance, records, privacy, consumer checkout, and advertising claims for the chosen country in writing.
2. Run one tagged wedge, sports return-to-performance or desk-worker neck/back pain, with separate outcome and acquisition reporting.
3. Apply separate safety, conversion, delivery-margin, adherence, and functional-outcome gates.
4. Expand to a second country only after the first country clears the gates and the second country has a named local legal and clinical model.

**Confidence:** medium for the constrained-pilot recommendation; low to medium for the exact launch country until practitioner authorization and entity facts are supplied. **Reversal conditions:** any unresolved German direct-access issue, preventable serious clinical incident, fewer than 4 paid packages from 20 eligible assessed prospects, median delivery above 4.5 clinician hours, or realised contribution that stays negative after one offer and one wedge test.

## Final review status

**DONE_WITH_CONCERNS.** Arithmetic and key observed price claims reproduce. Austrian telemedicine, German authorization, Swiss cantonal supervision, and German advertising claims were checked against official sources. Material corrections remain in the launch-country condition, wedge selection, RAT design, and cash economics interpretation. No source memo was edited.
