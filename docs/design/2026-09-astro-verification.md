# Astro preview verification

**Date:** 12 September 2026
**Scope:** Swiss Standard German online physiotherapy preview in `site/`

## Evidence

- `npm install` completed in `site/`; dependencies are isolated to the Astro app.
- `npm run check` completed with 0 errors, 0 warnings, and 0 hints after scoping the local TypeScript project to `site/src`.
- `npm run build` completed successfully and generated four static routes: `/`, `/erstgespraech-buchen/`, `/fragen/`, and `/sicherheit-und-privatsphaere/`.
- A local Astro preview was opened at `http://127.0.0.1:4321/` and the accessibility tree confirmed the expected heading order, CTA destinations, image alt text, FAQ disclosures, and preview gates.
- Images are bundled at `site/public/images/hero.jpg` and `site/public/images/proof.jpg`; the page does not hotlink fonts or photography at runtime.

## Design and interaction notes

The page uses the consultation-sheet concept: a warm paper ground, blue-green ink, editorial serif display type, hairline datum rules, a four-stop care path, and one dominant offer sheet. The only JavaScript supports the mobile navigation and reveal-on-scroll entrance states. `prefers-reduced-motion` removes transitions while keeping all content visible. When JavaScript is disabled, the document remains fully visible because the reveal styles are scoped behind a `.js` root class.

The temporary Unsplash images are labelled as illustrative. No clinician identity, price, insurance promise, health intake, payment, or live booking behavior is fabricated. The booking destination explains that it is disabled until clinical, legal, commercial, privacy, and identity gates are approved.

## Remaining publication gates

Replace the preview gates with the verified practice and clinician details, Swiss service area, CHF price and terms, approved safety and emergency route, privacy and processor details, real contact path, owned photography, and the approved booking provider before publication.
