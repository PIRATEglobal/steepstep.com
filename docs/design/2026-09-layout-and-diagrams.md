# Layout and visual explanation pass

**Date:** 12 September 2026
**Scope:** all public Astro routes in `/Users/piratex/Documents/projects/physio`

## Layout decision

Every route now opens on the same outer measure, `--outer-measure: 72rem`, through the shared `.wrap` and `.article-page` geometry. This gives the header, footer, article openings, condition pages, sport pages, pricing, legal pages, and contact page one stable left and right edge.

The reading blocks remain narrower inside that frame. Body copy is capped around 42 to 46rem, and long form text uses the established reading measure. This is intentional: a wide frame gives images, diagrams, and section structure room to breathe, while a shorter line keeps German prose readable. The page width is shared; the reading measure is content-specific.

The former condition-only outer cap and pricing-only outer cap were removed. The condition pages still use narrower feature images and text blocks where the content benefits from focus. This is a visual hierarchy choice, not a separate page grid.

## Visual explanations

`src/components/ProcessDiagram.astro` is a small, server-rendered Astro component. It uses an ordered list so the sequence remains meaningful without CSS or JavaScript. It currently explains three different decisions:

- the care path from the free orientation call through assessment and follow-up;
- the progression logic for each complaint page;
- how a sport goal becomes an observable next task.

Arrows are connective cues, not decoration. On narrow screens they become a vertical path. The numeric ordinal treatment was deliberately omitted because it adds visual noise and a generic process-template signal. CSS hover movement is limited to pointer devices and reduced-motion users receive no movement requirement.

## Astro and accessibility choices

- The diagrams render as static HTML with no client island and no new dependency.
- Intrinsic image dimensions and the existing local WebP assets remain unchanged.
- The shared reading width is controlled through existing design tokens instead of route-specific magic numbers.
- The component uses a semantic `section`, heading, and ordered list with an explicit accessible label.
- At 320px and above, the diagram uses one column, keeps text within the viewport, and preserves the reading order.

## Verification target

Run `npm run check` and `npm run build` after integration. Inspect the route set at 360px, 390px, 768px, 1024px, and 1440px for overflow and alignment. Keep the process diagram only where it explains a real decision or progression.
