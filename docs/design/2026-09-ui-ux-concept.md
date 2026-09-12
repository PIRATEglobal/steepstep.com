# UI/UX concept: Bewegungsprotokoll

**Date:** 12 September 2026
**Market:** Switzerland
**Language:** Swiss Standard German (`de-CH`) only
**Build target:** Astro, lean static site, progressive enhancement

## The concept

**Bewegungsprotokoll** is a quiet editorial practice site shaped like a personal movement record. It gives the visitor a readable account of what happens next: what is holding them back, who will listen, what the first appointment contains, and how a return to movement is followed.

The page has one visual signature: a fine mineral-green route line that begins at the visitor's problem and passes through four numbered notes. It is a diagram of the care journey, not an illustration of anatomy and not a decorative scroll effect. The line stays still by default. A short 220ms reveal may draw each segment when it enters view, with `prefers-reduced-motion` removing the animation.

This is not average generated marketing design because every expressive element has a job. The serif is used to give the practice a voice. The route line explains sequence. The paper ground slows the page without making it feel luxurious or vague. The dark panel gives credentials and safety enough weight. The asymmetry marks a real change in thought. There are no interchangeable cards, badges, gradients, fake metrics, or empty movement effects.

## Home page composition

### 1. Header and first screen

Use a compact header with the practice wordmark at left, three text links, and one dark ink booking button. On mobile, retain the wordmark and booking action, with a native details menu for the remaining links.

The hero is two columns on desktop. The left side contains:

`ONLINE-PHYSIOTHERAPIE IN DER SCHWEIZ`

`Physiotherapie für Sport und Bewegung in der Schweiz.`

`Schmerzen oder eine Verletzung halten Sie vom Sport ab? Im Online-Ersttermin besprechen Sie Ihre Situation mit einer qualifizierten Fachperson. Danach wissen Sie, ob eine Betreuung per Video für Sie passt und was Sie als Nächstes tun können.`

The primary button is `Online-Ersttermin buchen`. Beneath it, show `60 Minuten · [freigegebener Preis] · Videotermin`. The right side holds one local, responsive Unsplash image with quiet negative space, a small caption reading `Illustrative Aufnahme. Eigene Bilder folgen.` until owned photography is ready, and a narrow vertical caption for the practice location or confirmed service area.

Do not put a rotating carousel, claim counter, or floating chat bubble in the first screen. The visitor should see the job, professional, first step, price placeholder state, and CTA without hunting.

### 2. The movement record

Place a short rule and the heading `Sie wissen, was Sie wieder tun möchten. Wir klären den nächsten Schritt.` On desktop, the route line sits beside four notes. On mobile, it becomes a vertical rule with the number aligned to the left and the copy to the right.

1. `Erzählen Sie, was passiert ist.` Beschwerden, Ziel und Bewegung.
2. `Besprechen Sie Ihre Situation.` 60 Minuten mit einer qualifizierten Fachperson.
3. `Sie erhalten eine Empfehlung.` Schriftlich, verständlich, mit dem nächsten Schritt.
4. `Bleiben Sie in Bewegung.` Eine längere Begleitung nur, wenn sie fachlich passt.

The notes are plain text blocks, not cards. Each has a 13px index, a sentence-case heading, a 17 to 18px explanation, and generous space below. The route line is 1px. It stops at the final note rather than continuing into the footer.

### 3. Offer and price

The offer is a dark ink section with a warm paper price sheet inset. Give the first appointment a single dominant column:

`Online-Ersttermin`
`60 Minuten per Video`
`Ihre Situation, Ihre Ziele, ein klarer nächster Schritt.`

List the inclusions with small rules and checkmarks expressed as text, not decorative icons. Show the approved CHF total as a large tabular number only when supplied. If it is not approved, display a visible pending state in the private build and prevent checkout. Include validity, payment, cancellation, and insurance wording before the button.

The continuation package is a secondary text link or a quieter adjacent panel. It does not compete with the first paid step. This respects the user's decision order and keeps the clinical assessment from reading like an upsell.

### 4. Human proof

Use a split section with a real practitioner portrait on one side and the person's name, professional title, Swiss authorisation or registration, sports focus, languages, and short biography on the other. The portrait should be commissioned before publication. Until then, the private build can use an Unsplash image only as an explicitly labelled placeholder and never as a clinician claim.

Add one line that explains the practice belief in first person. Keep it specific and modest. Example: `Gute Betreuung beginnt damit, dass jemand genau zuhört.` The final version must come from the actual clinician.

### 5. Safety and privacy

Use a two-column dark-on-paper section with two titled statements: `Online ist nicht für jede Situation der richtige Ort.` and `Sie wissen, was mit Ihren Daten geschieht.`

Make the safety boundary visible at the same visual level as the offer. Include the approved red-flag route, patient-location rule, in-person referral path, emergency instruction, secure video description, recording status, processor details, and link to the full privacy notice. This section should be readable in one pass. Do not bury it in a modal or accordion.

### 6. Final action

Finish with a large but restrained statement: `Prüfen Sie, ob ein Online-Ersttermin für Sie passt.` Use the same booking label as the header and hero. Place a small support link below for questions. The footer contains legal pages and a real contact address.

## Visual system

### Color tokens

Use OKLCH values so lightness remains intentional across the palette.

```css
--paper: oklch(97% 0.012 90);
--paper-deep: oklch(93% 0.018 90);
--ink: oklch(24% 0.035 205);
--ink-soft: oklch(38% 0.028 205);
--mineral: oklch(53% 0.075 165);
--mineral-deep: oklch(39% 0.065 165);
--warning: oklch(55% 0.13 55);
--error: oklch(48% 0.16 28);
--line: oklch(78% 0.02 90);
```

Check every actual pair in the browser. Use `--mineral` for the route line and secondary links. Use `--ink` for the primary CTA. Keep `--warning` and `--error` for safety and form states, never as brand decoration.

### Type

Use `Newsreader` or another licensed editorial serif for display headings, with `Source Sans 3` or another licensed grotesk for body and controls. Self-host the selected files in the final build. Avoid using an unlicensed remote font as a runtime dependency.

- Display: `clamp(2.75rem, 5.5vw, 5.4rem)`, line-height 0.98 to 1.04, normal weight.
- Section heading: `clamp(2rem, 3.4vw, 3.4rem)`, line-height 1.05 to 1.12.
- Body: 18px desktop, 17px mobile, line-height 1.55.
- Labels: 13px, line-height 1.3, modest tracking, sentence case.
- Reading measure: 58 to 68 characters for body copy.

Avoid all-caps paragraphs, extreme letter spacing, faux-bold text, and fixed heights that clip long German words.

### Space, line, and depth

Use a 4px base scale with 8, 16, 24, 32, 48, 64, 96, and 128px steps. Keep 1px hairlines at section boundaries. Use one radius family: 12px controls, 22px media and paper sheets. Shadows are optional and tinted toward the ink, with low opacity. The page should feel held by layout and paper, not floating effects.

## Interaction states

The build must define rest, hover, focus-visible, active, disabled, loading, error, and success states for every action. The booking button gives immediate pressed feedback and then navigates. Suitability answers show a clear selected state without relying on color. Accordions open inline and preserve focus. Form errors appear beside the field and in a summary at the top. The success screen repeats the selected appointment, price, cancellation rule, patient location, and contact route.

## Responsive behavior

- 360 and 390px: one column, 20px side padding, no horizontal overflow, route line at left.
- 768px: two-column proof and offer layouts may begin, but body copy keeps its measure.
- 1280px: 12-column grid, hero image spans five columns, copy spans six, one empty column remains as deliberate air.
- 2560px: cap reading content at 1440px and preserve the same hierarchy. Do not stretch text across the screen.
- 200% zoom: no clipped headings, hidden controls, or horizontal scroll in the primary journey.
- Touch: all controls at least 44px, visible pressed state, no hover-only information.
- Reduced motion: no route-line draw, parallax, autoplay video, or image reveal.

## Performance and implementation constraints

Astro should render the content as static HTML with minimal islands. Use semantic landmarks, local CSS, `picture` and `srcset` for the hero image, explicit image dimensions, and lazy loading below the fold. Preload only the actual LCP image. Keep the initial JavaScript small. The primary experience remains usable if the booking provider or optional enhancement fails.

## Release gates

The visual concept is ready for implementation. Publication still requires the actual practice name, practitioner proof, service area, approved CHF prices, safety wording, privacy map, booking behavior, real contact details, and replacement of stock imagery with owned photography. No placeholder should be presented as live trust proof.
