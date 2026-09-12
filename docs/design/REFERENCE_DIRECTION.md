# Website reference direction

Date: 2026-09-12
Scope: Swiss-first private-pay online physiotherapy website
Owner: Design and conversion workstream

## Design decision

Build a calm, editorial health practice with the visual confidence of a Swiss performance studio. The page should feel personal before it feels technological. The distinctive idea is **measured movement**: generous quiet space, one precise line or motion cue, and photography that shows a person returning to a real activity rather than posing in a clinic.

The site should make three facts easy to believe within one minute:

1. A qualified human professional will assess the person and stay accountable.
2. The service is genuinely online and fits around Swiss working life and sport.
3. The visitor can understand the package, price, suitability, and next step without a call to decode it.

This is a brand-register marketing surface. The design can be distinctive, but every expressive move must improve confidence or comprehension.

## Reference sites and what to borrow

These are references for decisions, not templates to copy. Review date: 2026-09-12.

| Reference | Useful pattern | Use here | Leave behind |
| --- | --- | --- | --- |
| [Sword Health](https://swordhealth.com/en-ca) | Starts with a plain benefit, then shows the care journey in four concrete steps. It names body areas, explains matching to a clinician, and repeats the action at natural stopping points. | Use a short “how it works” sequence: tell us what is happening, meet your physio, follow your plan, review progress. Show the human clinician before any technology. | Their scale claims, insurer-led framing, app/device emphasis, and anonymous testimonials are unsuitable until independently evidenced. |
| [Kaia Health](https://kaiahealth.com/) | Uses evidence and trust marks as a separate proof layer. It states who develops the programs and links outcomes to trials. | Create a compact “who you are trusting” section with names, credentials, Swiss professional status, clinical approach, privacy, and a link to the evidence or method behind each claim. | “3x ROI” and enterprise language. The Swiss visitor is buying care, not an employer benefit. |
| [Neko Health](https://www.nekohealth.com/gb/en/about) | Leads with a clear point of view about health and gives the company a visible human and geographic origin. The copy stays direct and the product story is easy to scan. | State the practice belief in one sentence, introduce the actual clinicians, and show where the service is based and where it is available. | Futuristic scanning imagery, oversized technology claims, and prevention claims that do not describe physiotherapy. |
| [Modern Roots Healthcare](https://www.modernrootshealthcare.com/) | A warm bone/dark ink palette, editorial typography, prominent booking, transparent cash-pay pricing, real provider introduction, and deliberate image aspect ratios. | Borrow the restraint: one dark anchor color, a warm paper background, one accent, pricing early, and fixed image crops that stay composed on mobile. | Luxury-gold clinic styling, testimonial sliders, and decorative cards. The brand should feel Swiss and clinical, not like a medspa. |
| [Squarespace wellness examples](https://www.squarespace.com/blog/health-wellness-website-examples) | Shows how muted palettes, practitioner-led stories, and quiet imagery can make a care site feel human. | Use it as a mood reference for softness and pace, then add stronger clinical proof and sharper hierarchy. | Generic template composition, “spa” cues, and wellness language detached from outcomes. |

The strongest shared pattern is not a visual style. It is an argument order: felt problem, credible person, simple process, clear offer, evidence, objections, action. That order should govern the Swiss page.

## Proposed visual system

### Register and composition

- Swiss precision with human warmth. Think studio, daylight, paper, movement, and considered margins.
- Use a 12-column desktop grid with an intentionally narrow reading measure, about 58–68 characters for body copy. On mobile, use one column and preserve generous side padding.
- Prefer asymmetry with a reason: a portrait or movement image can sit off-axis beside a short statement, but the reading order must remain obvious.
- Build a page with 5–7 strong sections, not a stack of identical cards. Use thin rules, captions, and whitespace to mark changes in thought.
- Use a single primary CTA label throughout, such as **“Erstgespräch buchen”** or **“Passendes Paket finden”** after the product owner confirms the actual flow. Do not use “Mehr erfahren” as the main action.

### Color

Use perceptual tokens and check contrast in the browser. Suggested starting values, to be tuned in OKLCH:

- Paper: warm off-white, approximately `oklch(97% 0.012 90)`.
- Ink: deep blue-green charcoal, approximately `oklch(24% 0.035 205)`.
- Quiet text: blue-gray that still passes body-text contrast.
- Accent: a restrained alpine green or mineral blue, used for primary actions and small directional cues only.
- Signal color: reserve amber or red for warnings, contraindications, and errors. Never use an alarming medical red as a brand accent.

Avoid pure white, pure black, gradients, neon sport colors, purple-blue “AI” gradients, and more than one strong accent. A dark ink section can introduce the clinicians or method, but it should not become a dark-mode novelty.

### Type

- Pair one expressive editorial serif for large headlines with a highly legible grotesk for UI, labels, and small text. A restrained option is **Newsreader** for display and **Inter** or **Source Sans 3** for interface text, subject to licensing and final art direction.
- Use optical sizing, modest tracking, and sentence case. Do not use all caps for paragraphs or fake authority with heavy weights.
- Suggested scale: display 56/1.02 desktop, 40/1.08 mobile; section title 34/1.1 desktop, 28/1.15 mobile; body 18/1.55 desktop, 17/1.55 mobile; labels 13/1.3 with modest tracking.
- Prevent headline widows. Give German and French copy room to expand by at least 30 percent. Swiss German, French, and Italian versions should be edited by native speakers.

### Shape, depth, and motion

- Use 1px hairlines and one consistent light source. Shadows should be soft and barely visible, with no floating dashboard effect.
- Use one radius family, around 10–14px for controls and 18–24px for large media. Do not mix pills, circles, and sharp cards without meaning.
- Motion should orient and reassure: image reveals, progress of the booking path, and a subtle movement cue can use 200–350ms ease-out. Respect `prefers-reduced-motion` and never delay a booking action.
- A useful signature detail is a thin line that traces a path through a section or a small “movement note” caption. Keep it static or very lightly animated. It should read as clinical notation, not decoration.

## Photography direction

### What the image should communicate

Show capable people in real, calm moments: standing beside a desk, preparing for a run, doing a controlled exercise in a home with enough space, or speaking with a practitioner on a laptop. The body should look lived-in and varied. Include age, gender, skin tone, and ability diversity without turning anyone into a symbol.

Use daylight, neutral interiors, natural posture, visible room context, and compositions with quiet space for copy. Avoid grimaces, exaggerated injury poses, white-coat theatre, treatment-room closeups, medical equipment, and before/after body imagery. Do not imply a person in a stock image is a client or clinician.

### Initial Unsplash shortlist

These links were checked as individual Unsplash pages on 2026-09-12. The first three are free under the Unsplash License according to the page. Confirm the license again at download time and archive the source URL, photographer, date, and downloaded file in the asset ledger.

| Role | Photo | Photographer | Recommendation |
| --- | --- | --- | --- |
| Sports hero or section opener | [Man in athletic wear stretching under a bridge](https://unsplash.com/photos/man-in-athletic-wear-stretching-under-a-bridge-AQUqPAmifsU) | Vitaly Gariev | Free under Unsplash License. Strong negative space and a real outdoor context. Crop to avoid making the person look like a fitness model. |
| Movement detail | [Athletic man stretching his arm on an outdoor court](https://unsplash.com/photos/athletic-man-stretching-his-arm-on-an-outdoor-court-rA02te1T2ik) | Alekon Pictures | Free under Unsplash License. Use as a secondary image only, since the page is new and the photographer page has limited history. |
| Neutral movement portrait | [Woman practicing yoga in a modern living room](https://unsplash.com/photos/woman-practicing-yoga-in-a-modern-living-room-NtANZNby_qs) | Vitaly Gariev | Free under Unsplash License. The home setting supports remote care. Use a crop that shows room and movement, not a generic wellness pose. |
| Clinician or care section placeholder | [A woman standing next to a woman on a treadmill](https://unsplash.com/photos/a-woman-standing-next-to-a-woman-on-a-treadmill-7vXHRcMGETQ) | Ahmet Kurt | Free under Unsplash License. It depicts physiotherapy, but the child and condition are identifiable. Use only after a careful dignity and context review, never as a claim that the pictured person is a patient. |
| Alternative hero | [Athletic man in white tank top stretching](https://unsplash.com/photos/athletic-man-in-white-tank-top-stretching-xxWI_m22aUw) | Alexis Maxell | Free under Unsplash License. Use only if the image fits the brand after color grading. It risks reading as gym advertising. |
| Future women’s health exploration | [Young woman doing yoga at home](https://unsplash.com/photos/young-woman-doing-yoga-at-home-p0BCyelJNmo) | Getty Images | Unsplash+ license, not free Unsplash License. Keep as a research reference unless a paid Unsplash+ license is purchased and recorded. |

### License and rights guardrails

Unsplash states that its standard license permits free commercial use without mandatory attribution, but it does not grant rights to trademarks, visible artwork, or recognizable people. Its terms also prohibit compiling images to replicate a competing service. The [Unsplash License](https://unsplash.com/license) and [Terms, section 5](https://unsplash.com/terms) are the source of truth.

For a healthcare brand, the practical rule is stricter: prefer unrecognizable subjects, obtain a model release when a recognizable person is central to a commercial claim, remove visible logos and artwork, and keep attribution anyway. Do not use a stock image beside a quote, outcome, credential, or “patient story” unless the relationship is explicit and documented. Replace stock imagery with commissioned team and patient-safe environment photography before launch.

Do not hotlink images. Download the selected file, retain the Unsplash page URL and photographer credit, check the image license, optimize a local derivative, and record the asset in `docs/design/assets/unsplash-register.md` when the site build begins. The site should be able to replace each placeholder image one-for-one with owned photography.

## Anti-slop constraints

- No hero with a smiling stock clinician pointing at a laptop.
- No purple-to-blue gradients, glass cards, floating blobs, or generic medical blue.
- No repeated three-card feature row after every section.
- No fake metric, anonymous quote, review carousel, insurer logo, certification badge, or “Swiss quality” seal without a source and permission.
- No claims such as “pain free,” “guaranteed recovery,” “instant,” or “works for everyone.”
- No AI-generated patient or clinician imagery. Faces and clinical trust must be real.
- No jargon in the first screen. Explain what happens in a session and what the visitor buys.
- No sticky mobile CTA that covers text or consent controls. Keep touch targets at least 44px and focus states visible.
- No inaccessible text over photography. Use a solid text panel or controlled overlay with measured contrast.

## Trust and conversion expression

The page should earn trust through specifics, in this order:

1. Above the fold: what problem the practice helps with, who provides care, Swiss availability, and the primary action.
2. Immediately below: a three or four step process with session length, response expectations, and what happens if online care is not appropriate.
3. Offer section: package name, total price in CHF, number and type of appointments, between-session support, validity, cancellation terms, and what insurance may or may not cover.
4. Practitioner proof: full name, photograph, training, registration or professional authorization, sports and clinical focus, languages, and a human reason for the work.
5. Safety and privacy: scope, red flags and escalation, secure video, data handling, and a plain statement that stock photographs are illustrative if they remain on the page.
6. Evidence: link to the clinical approach or relevant research. Separate evidence for the method from outcomes actually observed by this practice.
7. FAQ: online suitability, equipment, privacy, refunds, language, invoices, and what happens after the first appointment.

The action should feel like a low-risk first step. If the real flow is a screening call, say so. If the real flow is direct purchase, show the package before asking for details. The conversion skill requires pricing to be visible within five seconds and the CTA to be visually distinct; these are acceptance criteria for the first design, not later polish.

## Mobile and accessibility acceptance criteria

- Test at 360px, 390px, 768px, 1280px, and 2560px widths, plus 200% zoom.
- Keep the primary action reachable without covering content. Use a bottom action bar only when it does not obscure consent or form errors.
- Body text must meet WCAG AA contrast. Verify large display text separately. Never rely on color alone for status or selected options.
- Keyboard focus, reduced motion, screen-reader names, error recovery, and video captions are designed before the happy path.
- Booking forms use one question per step when information is sensitive. Explain why each health question is needed and avoid collecting clinical details before consent.
- Long German and French labels must wrap without clipping. Test language switching without losing selected package or form data.

## Build handoff

The eventual website PRD should turn this direction into:

- a page map and content model;
- a verified claim and trust-signal register;
- an owned-photo replacement plan;
- design tokens in OKLCH, type, spacing, radii, shadows, and motion;
- responsive wireframes for the home, offer, practitioner, method, safety, and booking surfaces;
- a conversion event map for CTA clicks, package selection, screening completion, and booking completion.

The next design pass should use actual practitioner names, credentials, languages, service area, package price, booking behavior, and legal wording. Until those are supplied and verified, keep copy and badges as clearly marked content placeholders.

## Sources

- [Sword Health, digital-first care for musculoskeletal pain](https://swordhealth.com/en-ca)
- [Kaia Health](https://kaiahealth.com/)
- [Neko Health, about](https://www.nekohealth.com/gb/en/about)
- [Modern Roots Healthcare](https://www.modernrootshealthcare.com/)
- [Squarespace, health and wellness website examples](https://www.squarespace.com/blog/health-wellness-website-examples)
- [Unsplash License](https://unsplash.com/license)
- [Unsplash Terms, section 5](https://unsplash.com/terms)
- [Unsplash Help, commercial projects](https://help.unsplash.com/en/articles/2612315-can-i-use-unsplash-images-for-personal-or-commercial-projects)
