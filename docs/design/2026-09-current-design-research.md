# Current design research for the Swiss physiotherapy site

**Date:** 12 September 2026
**Scope:** Swiss market, Swiss Standard German (`de-CH`), private-pay online physiotherapy
**Purpose:** Set evidence-backed UI and UX decisions before the Astro build.

## Executive finding

The site should feel like a small, serious Swiss practice with a clear clinical point of view. Its advantage will come from proof, plain language, and a composed editorial system rather than visual novelty. The current web guidance supports a fast, semantic, accessible page with real people, explicit boundaries, visible prices, and a short path to a paid first appointment.

The distinctive design move is **the movement record**: the page is composed like a beautifully typeset clinical training sheet. A thin route line connects the visitor's situation, first conversation, written next step, and return to activity. It gives the site one memorable visual idea while keeping the care argument easy to scan.

## Fresh evidence checked on 12 September 2026

### Accessibility is a design constraint, not a compliance footer

[WCAG 2.2](https://www.w3.org/TR/wcag/) remains the current W3C Recommendation, with the W3C page dated 12 December 2024. The added criteria include minimum target size, focus visibility, dragging alternatives, predictable help, and redundant-entry reduction. The [W3C WCAG 2.2 update](https://www.w3.org/WAI/standards-guidelines/wcag/new-in-22/) specifically calls out 24 by 24 CSS pixel targets at AA, with 44 by 44 as the enhanced target-size level. [Technique G195](https://www.w3.org/WAI/WCAG22/Techniques/general/G195), updated 15 July 2025, gives a practical focus treatment: a visible indicator with sufficient area and at least 3:1 contrast, or a 2px indicator where needed.

**Swiss page implication:** Design the booking CTA, navigation, accordions, and suitability controls at 44px or larger. Make the focus ring a deliberate part of the brand system. Keep the reading order semantic in the HTML. Do not hide focus beneath a sticky action bar. Use labels and text alongside color for suitability, privacy, and error states.

### Responsive design now means responsive content and input

[MDN's accessibility media-query guidance](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Media_queries/Using_for_accessibility), last modified 7 November 2025, documents `prefers-reduced-motion` and `prefers-contrast`. The page must adapt to a person's settings rather than treating animation as a default experience.

**Swiss page implication:** Use a single-column reading path at small widths, preserve large tap targets, and let German copy wrap naturally. Remove the movement-line animation and image reveals when reduced motion is set. Never communicate the service's safety boundary through color alone.

### Responsiveness is part of trust

[web.dev's INP guidance](https://web.dev/articles/optimize-inp), last updated 2 September 2025, recommends an Interaction to Next Paint of 200ms or less at the 75th percentile. It links poor interaction performance to long main-thread tasks, large DOMs, layout thrashing, and late feedback. [web.dev's responsive-image guidance](https://web.dev/articles/preload-responsive-images), last updated 10 July 2026, recommends matching image dimensions to the viewport and preloading the responsive LCP image when appropriate. [The LCP guidance](https://web.dev/articles/optimize-lcp), last updated 31 March 2025, favors server-rendered or prerendered content and early discovery of the main image.

**Swiss page implication:** Astro should ship mostly static HTML and CSS, with JavaScript only for the suitability flow, navigation, and small accordions. The hero image must have explicit dimensions, a local optimized derivative, and a mobile crop. The CTA must respond immediately, even if a booking service loads later. Avoid a large animation library and avoid client-rendering the page content.

### Motion can now be progressive enhancement

[Chrome's 2025 View Transition update](https://developer.chrome.com/blog/view-transitions-in-2025), published 8 October 2025, describes broader support for same-document transitions and notes Safari support for cross-document transitions. It still recommends progressive enhancement where support differs.

**Swiss page implication:** Use no transition for the primary purchase action. If used, a 180–280ms cross-page fade or a small route-line continuation can soften navigation. The base experience must be complete without the API. Never use motion to imply clinical progress or treatment efficacy.

### Healthcare trust is earned through visible people and specific proof

The live [Neko Health about page](https://www.nekohealth.com/gb/en/about), crawled 12 September 2026, gives its model a clear origin, location, named clinical leadership, credentials, and a concrete account of how a 60-minute visit works. The useful pattern is the order: point of view, real people, process, clinical standard, evidence. Its technology claims are specific and supported by links to studies and transparency pages.

The live [Sword Canada page](https://sword.com/en-ca), crawled 11 September 2026, makes the first steps explicit, shows session expectations, names body areas, and introduces a clinician before asking a visitor to start. It also demonstrates a risk: scale statistics and anonymous quotes are weak proof for a small Swiss practice.

The live [Modern Roots Healthcare site](https://www.modernrootshealthcare.com/), checked 12 September 2026, shows how a cash-pay practice can combine a warm paper-like palette, provider introduction, booking, and transparent offer framing. Its restraint is useful. The site should borrow the pace, then add stronger Swiss availability, safety, privacy, and credential proof.

**Swiss page implication:** Put the actual physiotherapist and professional title close to the first action. Show the CHF price and what the first appointment includes. Add the service area and patient-location rule before booking. Keep claims attributable. Do not use anonymous testimonials, borrowed clinic badges, invented outcomes, or stock portraits presented as practitioners.

### Current Swiss discovery reinforces the value of concrete, local information

[Hierarchy Agency's Zurich physiotherapy search analysis](https://hierarchy.ch/news/physiotherapie-marketing-zuerich-ki-empfehlungen), published about two weeks before this research date, reports that practice websites account for a large share of AI-referred local physiotherapy recommendations in its sample. This is an agency analysis, not an independent market census, so it is directional. It does support making the site's location, service, professionals, and answers easy for both people and search systems to parse.

**Swiss page implication:** Use clear German headings, one service name per concept, descriptive page titles, visible contact and professional details, structured FAQ content, and local service-area language. Treat search as a by-product of a useful page, not as a reason to add keyword-heavy copy.

## What the research rejects

- Generic blue healthcare template layouts with a smiling practitioner pointing at a laptop.
- Purple-blue gradients, glass panels, floating blobs, oversized rounded cards, and decorative “AI” effects.
- A full-screen hero that hides the offer, price, clinician, or service boundary.
- Repeated three-card rows that flatten every idea into the same visual component.
- Testimonials or outcome metrics without a named, permissioned source.
- Parallax, scroll hijacking, cursor effects, and motion that delays comprehension.
- Text over uncontrolled photography where contrast changes as the page moves.
- A sticky mobile booking bar that covers content or keyboard focus.
- A page that collects symptoms before explaining consent, purpose, and privacy.

## Design decisions carried into the build

1. Brand register: a practice with an editorial point of view, not a software dashboard.
2. One signature motif: the movement record route line, used sparingly to show sequence.
3. One dark ink, one mineral accent, a warm paper ground, and a quiet warning color.
4. Serif display type paired with a neutral, highly legible sans for UI and long copy.
5. Real copy in Swiss Standard German from the first layout pass.
6. 5 to 7 purposeful sections on the home page, with prices and proof before the final CTA.
7. Static HTML first. Minimal JavaScript. Local responsive images. No layout shifts.
8. Safety, suitability, privacy, credentials, and price are visual content, not legal fine print.
9. Every interactive control has rest, hover, focus, active, disabled, loading, error, and success states.
10. Test at 360, 390, 768, 1280, and 2560px, at 200% zoom, with keyboard and reduced motion.

## Sources and access dates

- [W3C WCAG 2.2](https://www.w3.org/TR/wcag/), Recommendation dated 12 December 2024, checked 12 September 2026.
- [W3C What's New in WCAG 2.2](https://www.w3.org/WAI/standards-guidelines/wcag/new-in-22/), checked 12 September 2026.
- [W3C Technique G195](https://www.w3.org/WAI/WCAG22/Techniques/general/G195), updated 15 July 2025, checked 12 September 2026.
- [MDN accessibility media queries](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Media_queries/Using_for_accessibility), updated 7 November 2025, checked 12 September 2026.
- [web.dev INP](https://web.dev/articles/optimize-inp), updated 2 September 2025, checked 12 September 2026.
- [web.dev responsive image preload](https://web.dev/articles/preload-responsive-images), updated 10 July 2026, checked 12 September 2026.
- [web.dev LCP](https://web.dev/articles/optimize-lcp), updated 31 March 2025, checked 12 September 2026.
- [Chrome Developers, View Transitions 2025](https://developer.chrome.com/blog/view-transitions-in-2025), published 8 October 2025, checked 12 September 2026.
- [Neko Health about](https://www.nekohealth.com/gb/en/about), crawled 12 September 2026.
- [Sword Health Canada](https://sword.com/en-ca), crawled 11 September 2026.
- [Modern Roots Healthcare](https://www.modernrootshealthcare.com/), checked 12 September 2026.
- [Hierarchy Agency, Zurich physiotherapy search analysis](https://hierarchy.ch/news/physiotherapie-marketing-zuerich-ki-empfehlungen), published about two weeks before 12 September 2026.

**Evidence limit:** Award galleries and design trend roundups were not used as evidence for healthcare UX. Visual references were judged by clarity, proof, and care context.
