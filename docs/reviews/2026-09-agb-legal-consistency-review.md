# AGB legal consistency review

Date: 12 September 2026
Scope: `src/pages/agb.astro`, compared with `docs/legal/2026-09-swiss-agb-research.md`, live `/preise`, `/datenschutz`, `/impressum`, and current Swiss primary guidance.

This is a read-only first-pass review. It is not a legal opinion. The page is written as live terms, as requested. Any counsel review belongs in the internal release record, not on the public page.

## Findings

### P1: Contract-formation and payment wording is internally inconsistent

Location: `src/pages/agb.astro:39` and `:46`.

Section 4 says the contract is formed when the customer confirms and steepstep confirms the paid booking in text. Section 5 says the booking becomes binding only after confirmation and “Zahlung beziehungsweise Rechnungsfreigabe”. “Rechnungsfreigabe” is undefined, and the two clauses leave uncertainty about whether confirmation alone, successful payment, or an invoice event forms the contract.

Why it matters: Swiss OR Art. 1 requires concordant intent. SECO’s e-commerce guidance also expects the technical steps to contract and prompt electronic confirmation to be clear. An unclear acceptance event creates avoidable disputes over appointment and payment obligations.

Recommendation: align both clauses to the real flow. If bookings are currently handled manually, use one rule such as: “Der Vertrag kommt zustande, wenn Sie die von uns mitgeteilten Buchungsdaten bestätigen und wir Ihnen den Termin sowie die Leistung in Textform bestätigen. Bei einer Rechnung ist die Zahlungsfrist in der Rechnung genannt.” If a future checkout requires successful payment, state that exact event and provide a final review/correction step before submission.

### P1: Late-cancellation charge is not sufficiently determinable

Location: `src/pages/agb.astro:57–58`.

The page says a late cancellation or no-show is generally treated as consumed/performed, then says an “allfällige, verhältnismässige Gebühr” may be deducted. The amount, calculation, and whether the charge is capped at the reserved session price are not stated.

Why it matters: Swiss UWG Art. 8 addresses abusive standard terms. A consumer should be able to understand the financial consequence before booking. A full package-session forfeiture can be challenged if the provider can resell the slot or the service was not meaningfully delivered, even though the page includes illness, emergency and other important-reason exceptions.

Recommendation: choose a concrete, proportionate rule before publication. For example, cap the charge at the affected session’s published pro-rata price, state that no charge applies where steepstep can fill the slot or where a good reason applies, and say how the customer can notify steepstep. Have counsel confirm the exact amount and treatment of no-shows.

### P1: Six-month package validity is now a business term that needs explicit owner approval

Location: `src/pages/agb.astro:51–52`.

The legal brief identified the validity period as an unresolved commercial fact. The implementation now chooses six months and adds an extension where no appointments are available or a medically justified pause is agreed.

Why it matters: this is not inherently unlawful, but it determines when paid sessions expire. It must match the offer page, booking confirmation and the actual scheduling capacity. “Angemessen” is fair in spirit but leaves the extension length open.

Recommendation: keep six months only if the business owner has approved it. Define the extension trigger and minimum extension in the booking confirmation or terms, and ensure any unused-session refund rule remains available where steepstep ends care for suitability reasons.

### P2: VAT/tax treatment is omitted

Location: `src/pages/agb.astro:45` and the `/preise` page.

The site gives CHF prices but does not say whether applicable VAT is included, whether PIRATE GmbH is VAT-registered, or whether the company is not liable for Swiss VAT.

Why it matters: SECO’s PBV guidance requires clear actual prices and inclusion of mandatory public charges where PBV applies. The correct tax treatment depends on the entity, service classification, place-of-supply rules and registration status. It cannot be inferred from the public prices.

Recommendation: obtain the accountant/tax adviser’s answer. Then state one accurate sentence consistently beside each price and in the AGB. Do not invent “inkl. MwSt.” or “exkl. MwSt.”.

### P2: Clinical provider identity is described at company level only

Location: `src/pages/agb.astro:18, 24–27`.

PIRATE GmbH is identified as operator, but the AGB does not identify the practitioner who provides a specific appointment or explain that the named practitioner is confirmed in the booking. The service language says “steepstep begleitet” and “wir” throughout.

Why it matters: this is not a defect in Swiss contract formation by itself, but it creates uncertainty about who has the professional relationship and where professional authorisation applies. The project’s own clinical review has flagged that authorisation and reviewer identity must not be guessed.

Recommendation: keep the company as contracting party, and state in the booking confirmation the practitioner’s name and professional title actually verified for that appointment. Do not add a licence, canton or registration claim until documented.

### P2: Cross-border scope needs a clear operational rule

Location: `src/pages/agb.astro:19, 32, 88–89`.

The page says customers should be in Switzerland for the appointment, and chooses Swiss law for Swiss customers while preserving mandatory protections of the customer’s habitual residence. This is sensible but does not say whether customers outside Switzerland are accepted at all.

Why it matters: online clinical services can engage professional, consumer, tax and data rules based on the patient’s location and the practitioner’s location. A German GmbH serving Swiss residents is a cross-border model. The terms should not imply a wider service area than the business can legally support.

Recommendation: until separately reviewed, restrict booking acceptance to customers physically in Switzerland at the time of the appointment and decline other locations. If Germany, Austria or other countries are enabled later, add a country-specific legal review and terms path.

## Positive checks

- No public “draft”, “preview”, “under construction” or lawyer-review language appears in `agb.astro`.
- The operator, postal address and `contact@steepstep.com` match the current imprint.
- The prices and durations match `/preise`: free 20-minute orientation, CHF 149 for 60 minutes, CHF 549 for four 45-minute sessions, CHF 749 for six 45-minute sessions.
- No automatic package renewal is promised.
- The page contains a clear online-care suitability boundary, local-referral route and Swiss emergency number 144, consistent with the safety page.
- The page preserves statutory claims and statutory consumer venues, including the consumer’s own domicile and the operator’s seat.
- The privacy page is linked and the contact-form prohibition on health data is consistent with the privacy and safety pages.
- The terms provide refunds for unused sessions where steepstep ends care because online care is unsuitable and provide a fair technical-failure remedy.
- No blanket exclusion of liability for health injury, intent, gross negligence or non-excludable statutory liability was found.

## Source checks

- Swiss OR, SR 220, Arts. 1, 7, 19–20 and 40a ff.: https://www.fedlex.admin.ch/eli/cc/27/317_321_377/de
- Swiss UWG, SR 241, Art. 3(1)(s) and Art. 8: https://www.fedlex.admin.ch/eli/cc/1988/223_223_223/de
- SECO online commerce duties and contract steps: https://www.seco.admin.ch/de/onlinehandel and https://www.seco.admin.ch/de/vor-dem-kauf-und-vertragsabschluss
- SECO price clarity and PBV: https://www.seco.admin.ch/de/faq-pbv and https://www.seco.admin.ch/de/grundlagen-pbv
- Swiss consumer withdrawal guidance: https://www.seco.admin.ch/de/probleme-nach-dem-kauf
- FDPIC patient data as sensitive personal data: https://www.edoeb.admin.ch/en/patient-data-disclosure
- Swiss ZPO, SR 272, consumer venue: https://www.fedlex.admin.ch/eli/cc/2011/533/de

## Release recommendation

The current AGB are materially stronger than a generic template and contain no obvious unlawful blanket disclaimer. Before relying on them for paid consumer bookings, resolve the contract-formation/payment event, the late-cancellation amount, VAT wording, package validity approval, and practitioner/location confirmation. These are P1/P2 release items, not reasons to add hedging language to the public page.
