# Motion specification: measured movement

**Date:** 12 September 2026
**Surface:** Swiss online physiotherapy site, Astro static build
**Language:** Swiss Standard German (`de-CH`)
**Status:** Implementation contract for the Luna Astro build

## Motion has one job

The site should feel attentive, like a practitioner making space for the person in front of them. Motion may clarify sequence, confirm an action, or reveal a relationship between a goal and its next step. It must never make the visitor wait, compete with medical information, or imply clinical efficacy.

The signature is the **care-path line**. It is a quiet route through the four steps of the first appointment. The line is a diagram with meaning, not a decorative flourish. Everything else stays close to the page: small opacity and translation changes, tactile controls, and a restrained image shift on pointer hover.

This avoids generic landing-page motion: no floating blobs, bouncy cards, scroll-jacking, cursor trails, auto-playing video, animated counters, perpetual loops, or full-screen parallax. The design feels individual because the movement belongs to the care model.

## Motion tokens

Define these once in `src/styles/global.css`:

```css
:root {
  --ease-out: cubic-bezier(.22, .8, .28, 1);
  --ease-standard: cubic-bezier(.2, 0, 0, 1);
  --duration-fast: 160ms;
  --duration-standard: 240ms;
  --duration-slow: 420ms;
}
```

Use `transform` and `opacity` for moving elements. Do not animate layout properties such as `top`, `left`, `width`, `height`, `margin`, or `font-size`. Do not add `will-change` globally. Add it only during a proven long-running transform animation, then remove it.

The visual feel is a soft deceleration, never a spring or elastic overshoot. A patient should feel guided, not entertained.

## Component behaviour

### First screen

The hero loads in its final layout. No delayed content and no staged cascade that makes the visitor wait for the headline or booking action.

If a reveal is used, apply one 240ms opacity transition with a maximum 6px upward translation to the hero eyebrow, heading, copy, then CTA as a single group. Start only after the first paint, and keep the LCP heading visible immediately. The hero image may fade from 0.92 to 1 opacity over 420ms after its intrinsic dimensions are reserved. If this adds visual delay or affects LCP, remove it.

### Header and booking CTA

The primary CTA has three states:

- Rest: ink background, paper text, hairline border.
- Hover, pointer only: translateY(-1px), background shifts one token darker, 160ms ease-out. No scale.
- Active: translateY(1px), 80ms ease-standard. This is the physical confirmation of a press.

Use `:focus-visible` for a 3px mineral outline with a 3px offset. Focus must never depend on motion. The same states apply to text links, with an underline that grows from 0 to 100% using `transform: scaleX`, transform origin left. On touch, there is no hover-only information.

### Care-path line

On desktop, the vertical mineral rule beside the four numbered notes may reveal one segment as its note enters the viewport. Use a view timeline where supported:

```css
@supports (animation-timeline: view()) {
  .care-path__segment {
    animation: path-reveal linear both;
    animation-timeline: view(block 12% 70%);
  }
}
```

`path-reveal` may change only `transform: scaleY(0)` to `scaleY(1)` with `transform-origin: top`. Keep each segment's final state visible by 55% of its view range. The route must remain understandable if the browser does not support scroll-driven timelines, so the default state is a fully visible 1px line. The line is a progressive enhancement, not required content.

On mobile, keep the rule static. The narrow viewport already supplies enough movement and the vertical line should not chase the user's scroll. Numbered notes may use a one-time 6px opacity/translate reveal when they enter, via `IntersectionObserver` only if it can be kept tiny; CSS view timelines are preferred. Do not observe the entire document or run a scroll event handler.

### Offer panel

The first appointment remains visible as the user arrives. Do not animate the price, inclusions, or legal conditions. If an optional details disclosure is used, open it instantly or with a 160ms opacity/clip transition that preserves document flow and focus. The content must remain usable with JavaScript disabled.

The booking button does not show a spinner before navigation. If an external handoff needs a loading state, keep the button label and replace only the trailing indicator with a CSS opacity pulse under 1 second, then show a timeout message. Never hide the price or cancellation conditions while loading.

### Practitioner proof

The portrait gets no Ken Burns effect and no scroll zoom. On pointer hover, a 1.015 scale over 420ms is acceptable only inside an overflow-hidden media frame, with no layout movement. The name, title, registration and biography stay still. A real person should read as present and credible, not as an advertising asset.

### FAQ and safety disclosures

Use native `<details>` and `<summary>` for FAQs. The browser's disclosure behaviour is the fallback. If styling the open state, animate only the content's opacity and a small 4px translate over 160ms. Do not rotate a large chevron, as rotation adds motion without helping comprehension. Safety copy has no attention-seeking animation, pulse, or red flash.

### Final action

The final booking action may receive a single 160ms underline or background transition on hover. It must not stay sticky, bounce, or follow the cursor. A fixed mobile CTA is allowed only if user testing shows the main booking action is otherwise missed; it is excluded from this first build to keep the reading experience calm.

## Parallax decision

Do not use page-level parallax. The information is clinical and trust-led, and a moving background behind health copy creates vestibular risk while adding no orientation. The one permitted depth cue is the 1.5% practitioner image hover scale for a pointer, which is local, reversible, and absent on touch. There is no background attachment trick and no scroll-linked image translation.

## Reduced motion and user control

Honor the operating system preference in CSS and JavaScript. The reduced mode must preserve the same layout, content, focus order, and meaning:

```css
@media (prefers-reduced-motion: reduce) {
  *, *::before, *::after {
    animation-duration: 1ms !important;
    animation-iteration-count: 1 !important;
    scroll-behavior: auto !important;
    transition-duration: 1ms !important;
  }

  .care-path__segment,
  .care-path__note,
  .practitioner-proof__image {
    animation: none !important;
    transform: none !important;
  }
}
```

If a script creates an observer or animation, check `matchMedia('(prefers-reduced-motion: reduce)').matches` before registering it. Do not replace the visual content with a blank gap. The route line is simply present; notes and images are simply present.

The site must also avoid automatic movement that would require a pause control. There are no carousels, autoplay media, looping decorative animations, or marquee text.

## Performance contract

- Keep the initial JavaScript at zero for the static page. A tiny observer is optional and must be progressively enhanced.
- Prefer CSS timelines over a JavaScript scroll loop. Never attach `scroll` listeners for visual effects.
- Animate compositor-friendly `transform` and `opacity`; verify in DevTools that there are no non-composited animation warnings.
- Reserve every image's intrinsic dimensions and use responsive local AVIF/WebP assets. The actual hero image is the only preload candidate.
- Do not let an animation change layout or cause cumulative layout shift.
- Check the production preview on a low-power mobile profile. Targets are LCP ≤ 2.5s, INP ≤ 200ms, and CLS ≤ 0.1 at the 75th percentile, matching the current Core Web Vitals guidance.

## Acceptance checks

1. With JavaScript disabled, the full care path, offer, safety content, FAQ, and booking links are visible and usable.
2. With `prefers-reduced-motion: reduce`, there is no route draw, reveal, parallax, hover scale, or smooth-scroll animation.
3. At 360px and 390px, there is no horizontal overflow and no interaction depends on hover.
4. Keyboard focus remains visible through every link, disclosure, and booking control. Active feedback never replaces focus.
5. Scroll-driven animation is wrapped in `@supports`; unsupported browsers show the complete static route.
6. A production build passes Astro checks and build, and a browser audit shows no console errors, missing assets, or non-composited animation warnings.

## Evidence

- [MDN: Scroll-driven animation timelines](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Scroll-driven_animations/Timelines), accessed 12 September 2026. Use view-progress timelines as a CSS progressive enhancement and remove the timeline in reduced-motion mode.
- [MDN: `prefers-reduced-motion`](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/At-rules/%40media/prefers-reduced-motion), accessed 12 September 2026. The preference is widely supported and exists to reduce or replace motion that can cause discomfort.
- [W3C WAI: Understanding SC 2.3.3](https://www.w3.org/WAI/WCAG21/Understanding/animation-from-interactions), updated 16 September 2025 and accessed 12 September 2026. Non-essential interaction animation must be disableable; parallax is explicitly called out as a possible vestibular trigger.
- [web.dev: Web Vitals](https://web.dev/articles/vitals?hl=en), updated 31 October 2024 and accessed 12 September 2026. Current targets are LCP ≤ 2.5s, INP ≤ 200ms, and CLS ≤ 0.1 at the 75th percentile.
- [Chrome for Developers: Avoid non-composited animations](https://developer.chrome.com/docs/lighthouse/performance/non-composited-animations), accessed 12 September 2026. Layout and paint animations can be janky and contribute to layout shift; compositor-friendly properties are preferred.

## Handoff

The Astro implementer should build the static state first, then add only the care-path view reveal and the listed tactile states. If a visual effect cannot be explained by one of the jobs above, delete it. The finished page should feel alive because the content has a clear progression and the controls respond with care, not because the screen is constantly moving.
