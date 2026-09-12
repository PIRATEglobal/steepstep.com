# Swiss AGB research and drafting brief

Status: research and implementation brief, 12 September 2026

Audience: the implementation agent preparing the public `Allgemeine Geschäftsbedingungen` page for steepstep.com.

Scope: Swiss-facing private-pay online physiotherapy, operated by PIRATE GmbH, with a free 20-minute orientation call, a paid 60-minute online assessment for CHF 149, and paid packages of CHF 549 and CHF 749. The public terms must read as live terms. Any lawyer review is an internal release gate and must not be mentioned in the public page.

This is a first legal pass, not legal advice. A Swiss-qualified lawyer should review the final text, especially the classification of the clinical relationship, cancellation and refund policy, liability wording, tax/VAT treatment, and cross-border customers.

## Confirmed legal frame

| Issue | Confirmed point | Consequence for steepstep |
|---|---|---|
| Contract formation | Swiss OR Art. 1 requires concordant expressions of intent. OR Art. 7 says price lists generally are not offers, while an expressly marked order flow can create a contract. | State that website information is an invitation to request or book. Define the exact acceptance event, for example written booking confirmation or payment confirmation after the customer has reviewed the summary and AGB. |
| Online selling duties | UWG Art. 3 para. 1 lit. s requires clear identity and contact address, the technical steps to conclude a contract, tools to detect and correct input errors, and prompt electronic confirmation. SECO explains these duties in its online commerce guidance. | Keep PIRATE GmbH, postal address and `contact@steepstep.com` visible. Explain the booking steps and provide a final review before a paid order. Send an electronic confirmation. |
| Prices | SECO says advertised prices must be clear and, where PBV applies, the actual amount payable in CHF must include mandatory public charges. Price information must be available without asking. | Keep CHF 149, CHF 549 and CHF 749 next to duration and inclusions. Confirm whether VAT is included or whether PIRATE GmbH is not VAT liable. Do not add undisclosed mandatory fees. |
| Withdrawal | Switzerland has no general online-shop withdrawal right. A statutory withdrawal right exists for defined door-to-door situations under OR Art. 40a ff.; SECO says internet purchases generally do not receive a general right of withdrawal. | The terms may provide a fair voluntary cancellation/refund policy. Do not claim a general statutory 14-day right for this online booking flow. Counsel should confirm whether any customer acquisition channel triggers OR 40a ff. |
| Consumer venue | Swiss ZPO Art. 32 gives consumers venue at the consumer’s domicile or the supplier’s domicile for actions brought by the consumer, and limits the supplier to the defendant’s domicile. | Do not impose a one-sided foreign forum. Preserve mandatory consumer venue and rights. |
| Data | Under FADP/revDSG Art. 5(c)(2), health data are sensitive personal data. The FDPIC confirms patient data are sensitive. | Terms should direct health-data handling to the privacy policy, forbid sending health data through the general contact form, and describe confidentiality without promising absolute secrecy beyond law and the actual service setup. |
| AGB fairness | OR Art. 19–20 permit freedom of contract only within the law; unlawful or immoral terms are void. UWG Art. 8 addresses abusive standard terms. | Use short, readable clauses. Avoid blanket exclusions, surprise conditions, automatic renewal, unilateral fee changes, or disproportionate cancellation charges. |

## Recommended public AGB structure

### 1. Geltungsbereich and operator

Identify PIRATE GmbH, Brabanter Str. 53, 50672 Köln, Deutschland, and `contact@steepstep.com`. Say the terms govern the paid online physiotherapy services and related booking and payment process. State that the offer currently targets customers who are physically in Switzerland for the appointment, subject to suitability and professional jurisdiction checks.

### 2. Service and clinical boundary

Describe the 20-minute orientation call as free and non-binding. It is for first orientation and fit, not diagnosis, physical examination or emergency care. Describe the 60-minute assessment and the four- and six-session packages exactly as displayed on `/preise`.

State that online care requires a suitable situation, sufficient space and a functioning camera/microphone. The practitioner can pause, decline or end online care if an in-person examination, imaging, urgent assessment or another local service is safer. This is a service-suitability rule, not a disclaimer of professional responsibility.

Tell customers to use emergency services for urgent symptoms. The live safety page names Swiss emergency number 144. Keep medical safety language consistent across AGB, privacy, FAQ and safety pages.

### 3. Booking, formation and customer information

Recommended flow: customer chooses a service, reviews duration, price, inclusions and AGB, corrects errors, actively accepts the AGB, and submits the booking or payment. The contract becomes binding only when steepstep confirms the paid booking in text. If the current implementation does not yet provide checkout, terms should say that a request by form or email is not itself a paid contract and that steepstep confirms the scope, appointment and payment separately.

Give the customer the accepted AGB version with the confirmation. Do not rely on a footer link alone. If a booking provider is introduced, its exact confirmation and payment behavior must be checked against this clause.

### 4. Prices and payment

Use these approved public prices only if they remain approved:

- Orientation: 20 minutes, free, non-binding.
- Online assessment: 60 minutes, CHF 149.
- Begleitung: four sessions of 45 minutes, CHF 549.
- Fortschritt: six sessions of 45 minutes, CHF 749.

State whether prices include applicable VAT. This is an unresolved business fact and must not be guessed in the public terms. State payment method, invoice/payment timing, and that no package auto-renews. A package is purchased once; any further service requires a new agreement.

### 5. Package validity and fair cancellation

Choose and publish a concrete validity period before launch. The current project materials do not establish one. Recommended starting rule for counsel review: the package can be used within six months from purchase, with a reasonable extension when steepstep cannot offer appointments or when an agreed medical pause makes continuation inappropriate.

Recommended fair appointment rule: free cancellation or rescheduling up to 24 hours before the appointment. For later cancellations or no-shows, charge only a reasonable amount reflecting the reserved slot, with an exception for illness, emergency or other documented good reason. Do not take the full package price automatically without a proportionate basis.

For package refunds, refund unused sessions on request, less only completed services and any clearly disclosed, proportionate cancellation amount. If steepstep has to end care because online care is unsuitable, refund unused sessions. If a customer ends care for another reason, handle unused sessions under the same transparent calculation. Counsel should approve the exact formula and whether any administrative fee is permissible.

### 6. Technical interruptions

If a session cannot reasonably be delivered because of a steepstep or agreed platform failure, reschedule it without charge or refund that session. If the customer’s connection fails, the practitioner should attempt the agreed contact route and agree a fair next step. The terms must not shift all technical risk to the customer.

### 7. No outcome guarantee, professional responsibility and liability

Say that physiotherapy supports a jointly agreed process and that individual progress depends on the situation, participation and factors outside steepstep’s control. Do not promise healing, a return-to-sport date or a particular result.

Keep the lawful baseline: nothing excludes or limits liability for intent, gross negligence, injury to life, body or health, or other liability that cannot legally be excluded. For ordinary negligent property or financial loss, any limitation must be proportionate and lawyer-reviewed. Avoid the phrase “no liability whatsoever.”

### 8. Privacy and confidentiality

Refer to the privacy policy for the controller, data categories, purposes, processors, retention and rights. Explain that information shared in the clinical relationship is handled confidentially within the legal and professional framework. State that the general contact form is for administrative questions and must not contain diagnosis, symptoms, treatment history or other health information. Do not promise that an unencrypted email channel is suitable for health data.

### 9. Changes, termination and complaints

Do not change an agreed price or package scope unilaterally. Future versions can apply to future bookings after publication. A material change should be communicated before the next purchase.

Allow either party to end an ongoing package for good cause. Settle completed and unused services transparently. Give `contact@steepstep.com` as the complaints and service contact, and describe a reasonable response path without inventing a regulator, mediation body or certification.

### 10. Law and jurisdiction

Recommend Swiss law for Swiss-facing consumer contracts, subject to mandatory protections of the customer’s home jurisdiction where applicable. State that consumer venue and other mandatory rights remain unaffected. Because the operator is a German GmbH and cross-border clinical services are involved, a Swiss-qualified lawyer and German counsel should confirm the final choice-of-law wording and any mandatory German/EU consumer rules for customers outside Switzerland.

## Open facts that must be resolved before publication

1. Is PIRATE GmbH registered for Swiss VAT, German VAT, or neither for these services? State the correct tax treatment and whether published prices are VAT-inclusive.
2. What payment provider or invoice process will be used? Add its actual payment terms and processor name to the privacy policy where applicable.
3. What package validity period is approved? Do not invent one in code.
4. What exact cancellation window and proportionate late-cancellation amount will be used?
5. Will the free orientation be booked directly, or confirmed manually by email? Match the contract-formation clause to the real flow.
6. Which Swiss-qualified practitioners deliver care, and from which locations? The AGB should not make unsupported authorisation claims.
7. Does any booking channel involve telephone or comparable real-time solicitation that could trigger OR 40a ff.?
8. Will customers outside Switzerland be accepted? If yes, add a separate cross-border legal review before enabling those bookings.

## Source register, accessed 12 September 2026

Primary and official guidance used:

- Swiss Code of Obligations, SR 220, especially Arts. 1, 7, 19–20 and 40a ff.: [Fedlex SR 220](https://www.fedlex.admin.ch/eli/cc/27/317_321_377/de).
- Federal Act against Unfair Competition, SR 241, Art. 3 para. 1 lit. s and Art. 8: [Fedlex SR 241](https://www.fedlex.admin.ch/eli/cc/1988/223_223_223/de).
- SECO, online commerce duties: [Onlinehandel](https://www.seco.admin.ch/de/onlinehandel) and [Vor dem Kauf und Vertragsabschluss](https://www.seco.admin.ch/de/vor-dem-kauf-und-vertragsabschluss).
- SECO, price disclosure and total-price principles: [FAQ zur Preisbekanntgabe](https://www.seco.admin.ch/de/faq-pbv) and [Grundlagen PBV](https://www.seco.admin.ch/de/grundlagen-pbv).
- Swiss Federal Consumer Affairs, withdrawal rights: [Probleme nach dem Kauf](https://www.seco.admin.ch/de/probleme-nach-dem-kauf) and [FAQ Konsum](https://www.konsum.admin.ch/de/haeufige-fragen-faq).
- Swiss Federal Data Protection and Information Commissioner, patient data as sensitive data: [Patient data disclosure](https://www.edoeb.admin.ch/en/patient-data-disclosure).
- Swiss Civil Procedure Code, SR 272, Art. 32 consumer contracts: [Fedlex SR 272](https://www.fedlex.admin.ch/eli/cc/2011/533/de).

Secondary cross-check used for the contract rule summary: [Swiss Code of Obligations text and annotations](https://lex.weblaw.ch/lex.php?lex_id=104542&norm_id=220&source=sr&use_lang=en). It is not an official source and should not replace the Fedlex text.

## Release gate

The public page may be presented as live AGB once the factual questions above are answered and the final copy is checked against the real booking/payment flow. The internal release ledger should record that a lawyer final check remains outstanding. The public page should contain no “draft”, “preview”, “under construction” or similar language.
