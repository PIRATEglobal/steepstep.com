# Motion and interaction audit, 12 September 2026

## Scope

This is an independent static audit of all 20 Astro routes, the shared header and footer, `global.css`, `motion.css`, `conditions.css`, `OfferSummary.astro`, `ProcessDiagram.astro` and the shared inline menu and reveal behavior in `BaseLayout.astro`. It checks motion intent, hover and focus states, reduced motion, touch behavior, overflow risk and cross-route consistency against the Resonance design and page-audit standards.

The local browser surface was unavailable for this pass. The findings below are therefore based on source and route inventory, not a claim that every viewport was visually verified. The screenshot showing the clipped `Orientierungsgespräch` card remains valid evidence that a browser check is needed after the latest component changes.

## What is consistent and working in source

- All 20 routes use the shared `BaseLayout`, `SiteHeader` and `SiteFooter`.
- The shared `.button` owns rest, hover, active and focus-visible treatment. Price cards use the same button class.
- Image motion is scoped to pointer hover. It is removed on touch surfaces and under reduced motion.
- Section and process reveals are progressive, short and one-time. The no-JavaScript and reduced-motion paths keep content visible.
- `ProcessDiagram` uses semantic ordered HTML, has a readable wide layout, a 2 by 2 container-query fallback and a one-column mobile flow.
- Offer cards have a restrained lift and price nudge on hover or focus-within, gated by pointer capability and reduced-motion preference.
- The sticky header, mobile menu, submenu dismissal, Escape handling and anchor scroll padding are shared globally rather than route-specific.
- Each condition and sport route has a distinct image or meaningful diagram. Legal, privacy and contact pages remain intentionally quiet because decoration would compete with their job.

## Findings

### P1, browser release gate: verify the compact price-card long label

The user screenshot shows `Orientierungsge...` cut off in the four-column compact offer rail. The current source now uses a shared component, a 2-column fallback below 1200px, a one-column mobile fallback and `overflow-wrap: break-word` on the card heading. That is a plausible fix, but static inspection cannot prove the screenshot regression is gone at the reported width or at intermediate widths. Run a browser matrix at 300, 360, 390, 768, 850, 1024 and 1440px, and check that all four names, prices, durations and CTAs remain visible without horizontal overflow.

### P1, production release gate: contact motion states depend on live endpoint proof

The form has visible loading, error and success text states, but the corrected PHP endpoint has not yet been deployed and verified. Treat the form interaction as incomplete until the live token request, protected secret path, invalid submission and controlled successful delivery are checked after deployment.

### P2, responsive interaction proof: mobile menu needs real pointer and keyboard checks

The source has a 48px-class trigger and a menu breakpoint through 1050px, which covers tablet widths. The open menu has an internal viewport-constrained scroll area. A source audit cannot prove that the CTA is readable, the full complaints submenu is reachable, focus returns to the trigger, or clicking outside closes the menu on a real narrow viewport. Verify open, close, Escape, outside click, submenu expansion, keyboard tab order, 200% zoom and landscape orientation.

### P2, reduced-motion completeness: several small transitions are not globally neutralized

The reduced-motion block disables button, image and reveal transitions, and the component styles disable process and offer-card motion. The shared navigation underline, chevron, menu icon and form field transitions still have their own declarations without an explicit reduced-motion override. These are small, but the design contract says reduced motion should remove non-essential movement consistently. Either verify that the remaining transitions are acceptable as state changes or add a scoped override in the shared stylesheet.

### P2, maintainability: mobile declarations are duplicated

The shared stylesheet contains a primary 1050px mobile-menu block and a second near-duplicate block later in the mobile section. The behavior is currently coherent, but duplicate declarations make future fixes easy to apply to one breakpoint and miss the other. Consolidate the shared declarations and retain only intentional small-screen overrides, as already noted by the Ponytail audit.

### P3, polish: card and diagram hover needs a focus-visible visual review

Offer cards use `:focus-within`, while process and content cards use hover only. Their links still receive the global focus ring, so keyboard access is present. A visual pass should confirm that the focus ring remains legible against the paper and dark surfaces and that elevation does not clip against adjacent hairlines.

## Route-level motion and depth disposition

The source route inventory supports a coherent pattern: home, sport, running, skiing, online care and condition pages use images or decision diagrams with restrained reveals; pricing and explanatory pages use cards and process structures; legal, privacy, contact and imprint pages prioritize reading and trust. Adding motion to every legal paragraph would weaken the information job. The right standard is meaningful change of state or explanation, not equal animation density.

No repeated image, infinite animation, carousel, floating chat prompt, gradient treatment or hover-only essential information was found in the inspected source. No P0 was found.

## Release disposition

**DONE_WITH_CONCERNS.** The shared motion system is coherent in source and follows the intended restrained, tactile register. Release remains conditional on the browser matrix, the price-card clipping check, reduced-motion review, and live contact smoke. The P2 stylesheet consolidation can follow the release if it is not folded into the current candidate, but the P1 browser and production checks should close before deployment is called complete.
