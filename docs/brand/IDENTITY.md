# steepstep.com identity

**Version:** 1.0, 12 September 2026  
**Market:** German-speaking Switzerland  
**Language:** Swiss Standard German (`de-CH`)  
**Status:** Working identity for the private preview. Trademark, company name, and domain ownership still require legal clearance.

## The idea

**Steepstep is the next sure step.**

The name holds two truths about rehabilitation. Progress is rarely a straight line, and the next useful action can still be clear. Steepstep helps a person move from uncertainty to an informed, manageable next step with a qualified human physiotherapist.

The identity treats movement as a **route with decisions**, not as speed, exertion, or a perfect body. A stepped line is the visual signature. It marks a change in thought, shows a sequence, or points towards an action. It never becomes a progress promise or an anatomy diagram.

The brand register is **Swiss precision with human warmth**: quiet enough for a person in pain, exact enough for a serious athlete, and personal enough to make remote care feel accountable.

## Positioning

For people in Switzerland who want to return to sport or everyday movement and are willing to pay privately for clear professional guidance, steepstep.com offers online physiotherapy with a qualified human professional.

The brand earns trust through four visible facts:

- a named practitioner with verifiable qualification and Swiss professional status;
- a clear first appointment and written next step;
- honest boundaries for situations that need an in-person assessment;
- transparent price, privacy, cancellation, and patient-location information.

The brand is not a sports-performance app, a wellness club, or an anonymous booking marketplace. Those distinctions belong in the facts and service design, not in boastful copy.

## Identity principles

1. **Name the next step.** Every page and action should answer what happens now.
2. **Show the person behind the care.** Credentials and method sit close to the first decision.
3. **Use restraint as a trust signal.** One line, one accent, one clear action.
4. **Make room for real bodies and real lives.** Photography shows context, effort, and recovery without performance theatre.
5. **Let the system carry the feeling.** Warmth comes from spacing, language, light, and attention to detail.

## Mark and wordmark

### Primary mark

The mark is a single continuous, rounded route that climbs through three unequal steps. The lower landing is longer, the middle landing is shorter, and the final rise finishes with an open turn. That asymmetry prevents the symbol from reading as a stock staircase or mountain icon. It gives the eye a clear entry point and direction.

The route has two permitted states:

- **Ink mark on paper:** primary use for header, documents, and light backgrounds.
- **Paper mark on ink:** reverse use for footer, dark panels, and social avatars.

Use the supplied SVGs in `site/public/brand/`. Do not redraw it with a new stroke, add a circle, enclose it in a badge, or pair it with a medical cross.

### Wordmark

Typeset `steepstep` in lowercase. The lowercase form is calm and direct. Keep `steep` and `step` visually connected. Do not add a slash, a descriptor inside the logo, or a second decorative typeface.

Recommended lockup:

- mark at 24px to 32px cap height;
- wordmark set in the display face at 1.05em relative to the mark height;
- optical gap between mark and wordmark equal to the mark's smallest internal gap;
- `.com` is a quiet suffix only in legal or digital contexts, never as a separate badge.

The supplied mark is the stable asset. Keep the wordmark as live text in the site so it is selectable, searchable, and available to assistive technology.

### Clear space and minimum size

Let `x` equal the width of the route stroke. Keep at least `4x` of clear space on every side of the lockup. For the standalone mark, keep `3x`.

Minimum sizes: digital lockup 112px wide, standalone digital mark 24px wide, print lockup 28mm wide. For the favicon, use the standalone mark only and optically enlarge it to fill the square.

## Colour

These values extend the existing preview tokens. The OKLCH values define intent; the hex values support implementation and production handoff.

| Token | OKLCH | Hex | Role |
| --- | --- | --- | --- |
| Paper | `oklch(96.5% 0.014 90)` | `#F3F0E8` | Main page ground |
| Paper deep | `oklch(92.5% 0.018 90)` | `#E8E4D9` | Rules and secondary surfaces |
| Ink | `oklch(27% 0.045 190)` | `#183B3A` | Headings, body text, primary action |
| Ink soft | `oklch(43% 0.035 185)` | `#49615E` | Secondary text and captions |
| Mineral | `oklch(53% 0.075 165)` | `#487E70` | Route line, links, directional cues |
| Mineral deep | `oklch(40% 0.065 165)` | `#2F6257` | Hover and selected states |
| Amber signal | `oklch(58% 0.13 65)` | `#A66A2E` | Focus ring and caution only |
| Red signal | `oklch(50% 0.16 28)` | `#A34839` | Error and urgent safety state only |

Use ink for the strongest hierarchy. Use mineral for direction, never for long body text. Amber and red are signals, not brand decoration. Never use gradients, pure black, pure white, neon sports colours, or a second saturated accent.

Body text must pass WCAG AA contrast in the implemented pair. Check the actual rendered type size, not only token values. The amber focus ring must remain visible against both paper and ink.

## Typography

**Display:** Newsreader, variable, normal optical sizing.  
**Interface and body:** Source Sans 3, variable.

Both families are available under the SIL Open Font License 1.1. Newsreader's project documentation confirms its Google Fonts Latin Plus coverage and OFL licensing, and Source Sans 3's repository includes the OFL text. Self-host approved files in production and keep license notices in the repository. Sources: [Newsreader project](https://github.com/productiontype/NewsReader), [Source Sans 3 license](https://github.com/google/fonts/blob/main/ofl/sourcesans3/OFL.txt), [SIL OFL](https://openfontlicense.org/).

The current preview's system fallback is acceptable while the practice identity is being approved. Do not make an external font request part of the published privacy or performance budget.

Typesetting rules:

- Use Newsreader for the wordmark and display headlines. Its role is a human voice, not a luxury cue.
- Use Source Sans 3 for body, labels, navigation, forms, prices, and legal text.
- Use sentence case. Reserve uppercase for short metadata labels of three words or fewer.
- Use `font-variant-numeric: tabular-nums` for prices and durations.
- Keep body copy between 58 and 68 characters per line on desktop.
- Give Swiss Standard German enough width for long compounds. Never force line breaks in headlines.
- Use proper Swiss spelling and `ss`, never `ß`; use `Sie` consistently until the practice explicitly chooses another register.

## Layout and graphic language

The page uses a 12-column grid on wide screens and one reading column on small screens. Empty space is part of the identity. It lets a difficult subject breathe and gives the next action weight.

The stepped route may appear once as the hero or care-path signature. Supporting graphics use hairlines, small captions, and measured alignment. They do not use numbered section markers, floating pills, dashboard cards, decorative blobs, or repeated rounded containers.

Shape language is consistent: controls use an 8px radius, large media and paper sheets use a 20px radius, rules are 1px hairlines, and any shadow is soft, low opacity, and tinted towards ink. There is no glassmorphism, glow, bevel, or decorative drop shadow.

## Photography and imagery

Show capable people in real Swiss working and sporting contexts: a controlled exercise at home, a runner preparing beside a door, a conversation over a laptop, or a person returning to a familiar route. Use daylight, lived-in spaces, visible context, and natural posture.

Avoid injury grimaces, body-part closeups, white-coat theatre, perfect gym poses, medical props, before-and-after bodies, and stock people presented as clinicians or clients. Stock is temporary and must be labelled as illustrative. Owned photography should replace it before publication.

Crop for quiet space and use the same tonal treatment across the set: warm daylight, moderate contrast, honest skin tones, no heavy teal/orange grading. Keep visible logos and recognisable people in the asset register with rights review. The existing [Unsplash register](../../../docs/design/assets/unsplash-register.md) remains the source of truth for temporary assets.

## Motion

Motion expresses orientation and care. It never promises healing.

- route-line reveal: 220ms, ease-out, only when it enters view;
- image or section arrival: 350–550ms, one modest translation and opacity change;
- button hover: 180ms, colour and 1px optical lift at most;
- button press: immediate scale to `0.985`, then release;
- accordion: 220ms height and opacity transition, with focus retained;
- navigation: no delay on the primary action;
- reduced motion: remove route drawing, parallax, autoplay, and image reveals.

Use one physical direction, generally along the route. Do not stack simultaneous fades, floating objects, scroll-jacking, cursor effects, or perpetual loops.

## Voice and copy

Steepstep speaks like a good physiotherapist in a first appointment: attentive, specific, calm. It uses short sentences, concrete verbs, and honest boundaries. It does not sound like an app, a spa, or a sports commentator.

Voice rules:

- Say what happens and who does it.
- Put the person's situation before the practice's ambitions.
- Use `Sie` and Swiss Standard German.
- Prefer `Physiotherapeutin`, `Physiotherapeut`, `Termin`, `Erstgespräch`, `Übungen`, `Empfehlung`, and `Behandlung` over imported product language.
- Name uncertainty plainly: `Wir prüfen gemeinsam, ob eine Betreuung per Video für Sie passt.`
- Avoid inflated claims, guaranteed outcomes, anonymous praise, urgency theatre, and unexplained clinical jargon.
- Keep one promise per sentence. Let a full stop do the work.

Approved direction, pending factual review:

> **Der nächste Schritt zurück zu Ihrer Bewegung.**
>
> Online-Physiotherapie für Sport und Alltag in der Schweiz. Sie besprechen Ihre Situation mit einer qualifizierten Fachperson und erhalten eine klare Empfehlung für das weitere Vorgehen.
>
> **Erstgespräch buchen**
>
> Persönlich begleitet. Fachlich eingeordnet. Mit klaren Grenzen für das, was online möglich ist.

These lines are direction only until the responsible clinician approves the clinical wording and the entity, price, patient-location rule, and booking path are real.

## Applications

### Website

Use the primary lockup in the header. The first screen should combine the job, the named professional, the first appointment, the approved CHF price, and the action. Use the route line to explain the care sequence. Keep safety and privacy as visible sections, not hidden in a footer.

### Email

Use the wordmark lockup at 160px maximum width. Paper background, ink text, one mineral link. Put the sender's real name, professional title, and contact details in the signature. Never use a stock photo as a pseudo-clinician portrait.

### Invoice and documents

Paper ground, ink text, mineral rules. Mark the document type in Source Sans 3, set patient and service details in a generous reading column, and place practitioner and entity details where they can be checked quickly. Use the mark in the top left, never as a watermark behind sensitive data.

### Social profile

Use the standalone mark on paper or ink. The profile name remains `steepstep.com`; the bio states the Swiss service and language plainly. Posts should teach one useful movement or decision in the clinician's own voice. Avoid quote cards, generic motivation, and fabricated progress stories.

## Anti-slop guardrails

Reject a direction if it contains a purple-to-blue gradient, gradient text, a generic mountain/pulse/spine/running-person icon, a grid of identical feature cards, fake ratings, invented outcomes, anonymous testimonials, borrowed badges, all-caps wellness slogans, urgency theatre, a floating chat bubble that interrupts a healthcare decision, excessive parallax, cursor trails, scroll-jacking, three unrelated typefaces, novelty display fonts, or stock photography used as proof of a practitioner, patient, or result.

Steepstep stands out through its point of view, the stepped route, Swiss restraint, and factual care sequence. It does not need visual noise to be memorable.

## Accessibility and production checks

- Confirm text and interactive contrast at the actual rendered sizes.
- Keep all core information in semantic HTML and available without JavaScript.
- Give the mark an empty accessible label when adjacent live text already says `steepstep.com`; give it a useful label when standalone.
- Preserve visible `:focus-visible` states on paper and ink.
- Test at 360px, 390px, 1280px, 2560px, and 200% zoom.
- Test long de-CH strings, keyboard navigation, reduced motion, and a slow connection.
- Provide meaningful alt text for owned photography. Label illustrative stock photography in visible captions.
- Keep the mark as SVG with a viewBox and no embedded raster data.
- Retain OFL notices for any self-hosted font files.
- Before publication, replace provisional practitioner, entity, contact, service-area, price, safety, privacy, and booking content with verified facts.

## Asset inventory

| Asset | Path | Use |
| --- | --- | --- |
| Ink standalone mark | `site/public/brand/steepstep-mark.svg` | Header, documents, light backgrounds |
| Reverse standalone mark | `site/public/brand/steepstep-mark-reverse.svg` | Dark panels, footer, social avatar |
| Favicon mark | `site/public/brand/steepstep-favicon.svg` | Browser tab and pinned shortcut |

The wordmark remains live text to preserve sharp rendering and accessibility across the website.

## Open gates

This identity is a usable design system, not legal clearance. Before public launch, verify `steepstep.com` domain ownership, Swiss trademark and company-name position, practitioner details, service geography, final commercial terms, clinical safety copy, privacy and video processor map, and owned photography. Keep the site `noindex` until those facts are approved.
