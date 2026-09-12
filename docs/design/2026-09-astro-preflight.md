# Astro site preflight, Switzerland website

**Date:** 12 September 2026
**Scope:** A lean Swiss Standard German (`de-CH`) marketing site for the online physiotherapy offer
**Status:** Ready for Luna Medium to implement in an isolated `site/` app

## Repository findings

This checkout is the `@manusco/resonance` framework repository, version `2.5.34`. Its root `package.json` contains Python based framework validation and build commands, but no Astro dependency, frontend source tree, Astro config, or lockfile. The root also contains the public `.resonance/` project scaffold and framework maintenance code.

The Swiss product and design source of truth already exists in:

- [`docs/prd/01_swiss_online_physio_website.md`](../prd/01_swiss_online_physio_website.md)
- [`docs/design/WEBSITE_BRIEF_SWITZERLAND.md`](WEBSITE_BRIEF_SWITZERLAND.md)
- [`docs/design/REFERENCE_DIRECTION.md`](REFERENCE_DIRECTION.md)
- [`docs/design/ANTI_SLOP_UI_REVIEW.md`](ANTI_SLOP_UI_REVIEW.md)
- [`docs/design/ANTI_SLOP_COPY_REVIEW.md`](ANTI_SLOP_COPY_REVIEW.md)
- [`docs/design/assets/unsplash-register.md`](assets/unsplash-register.md)

The working tree already contains user authored research and design documents. The implementation must preserve them and avoid modifying framework files unless a build command explicitly requires a narrowly scoped root change.

## Recommended boundary

Create a self contained Astro project at `site/`:

```text
site/
  package.json
  package-lock.json
  astro.config.mjs
  tsconfig.json
  public/
    favicon.svg
    robots.txt
  src/
    assets/
    components/
    layouts/
    pages/
      index.astro
      wie-es-funktioniert.astro
      pakete.astro
      fachpersonen.astro
      sicherheit-und-privatsphaere.astro
      fragen.astro
      erstgespraech-buchen.astro
    styles/
      global.css
```

This follows Astro’s documented project layout while keeping the framework root’s package scripts, dependencies, and public scaffold untouched. It also leaves a clean seam for later extraction into a standalone product repository.

Use Astro components and CSS first. Do not add React, Tailwind, a component kit, animation library, CMS, or booking SDK until an actual requirement proves it necessary. The public site has no application state yet. A small, progressively enhanced suitability or booking handoff can be added as a bounded island later.

## Package and runtime recommendation

Use the latest stable Astro release available when implementation starts. The latest official release found on 12 September 2026 is Astro 7.2, published 6 August 2026. Pin the resolved version in `site/package-lock.json` rather than relying on an unbounded range. Keep Node at the project’s existing supported baseline, Node 18 or newer, and verify the actual installed Node version before scaffolding.

Initial dependencies should be only:

- `astro` as the site framework;
- no UI framework integration;
- no runtime image hotlinks;
- no analytics or health-data collection in the first static build.

Use Astro’s built-in asset pipeline for local images in `src/assets/`. Use `public/` only for files that must be copied unchanged, such as `robots.txt` and the favicon. Download and record any temporary Unsplash image with source URL, photographer, license review date, and local filename before use. Do not present a stock subject as a clinician or patient.

## Implementation sequence

1. Scaffold `site/` with Astro’s official CLI or manual setup, using TypeScript strict settings and a minimal `astro.config.mjs`.
2. Add a shared `BaseLayout.astro` with `lang="de-CH"`, title, description, canonical placeholder, theme color, skip link, semantic landmarks, and a reliable focus style.
3. Add a small set of purposeful components: `Header`, `Footer`, `PrimaryAction`, `SectionLabel`, `CarePath`, `OfferPanel`, `PractitionerProof`, `SafetyNote`, and `FaqList`.
4. Put all visual tokens in `src/styles/global.css`: paper, ink, mineral accent, signal colors, type scale, spacing, rules, radii, focus ring, and reduced-motion behavior. Use CSS custom properties and avoid utility-class sprawl.
5. Build the home page around one argument: the felt problem, the real professional, the care path, the first paid step, proof, safety, FAQ, and booking action. Keep the assessment as the clear first purchase; do not present equal competing cards.
6. Add the supporting pages only with content already supported by the PRD and brief. Keep unresolved names, credentials, prices, legal copy, booking URL, service area, and emergency contact as visibly marked content gates in source, never as invented public claims.
7. Add only small browser-native interactions that improve comprehension: accessible details disclosures, a mobile menu if needed, and a short progressive enhancement for the booking handoff. Keep the happy path usable with JavaScript disabled.
8. Add an asset and claim check to the implementation notes before replacing placeholders with live credentials, prices, or clinical statements.

## Design and anti-slop guardrails

The design concept is **measured movement**: a calm editorial practice with Swiss precision, generous paper space, one mineral accent, thin rules, and photography showing a person returning to a real activity. Its signature is the relationship between a named goal and a visible care path, not decorative technology.

The page must not use purple or blue gradients, glass panels, floating blobs, repeated three-card rows, pill-heavy UI, fake metrics, anonymous testimonials, unverified badges, AI generated people, or stock clinicians. Use asymmetry only when it clarifies the relationship between a statement, a real portrait, and the next action. Use one primary CTA label throughout, after the actual booking flow confirms the wording. Keep Swiss Standard German native edited, concrete, and free of translated Denglish.

The first screen must tell a visitor what can improve, who is responsible for the care, that the service is available in Switzerland, and what the first step costs or how to reach the approved booking flow. Trust must come from named credentials, clear limits, transparent pricing, privacy basics, and a specific care sequence. No visual treatment may imply a medical outcome that the evidence does not support.

## Performance and accessibility requirements

- Static output by default. No client hydration unless an interaction needs it.
- Local, optimised AVIF/WebP assets, explicit dimensions, and a high priority only for the actual LCP image.
- Test at 360px, 390px, 768px, 1280px, and 2560px, plus 200% zoom.
- No horizontal overflow at 320px. Touch targets are at least 44px.
- Body text and controls meet WCAG AA contrast. Status and warnings use text and icon as well as color.
- Keyboard navigation, skip link, visible focus, semantic headings, accessible disclosure names, and reduced-motion behavior are required.
- Videos, if later added, require captions and a transcript.
- Do not send health-related answers to analytics. Avoid analytics entirely in the first build unless a reviewed event map and privacy basis exist.
- Target LCP below 2.5 seconds, INP below 200ms, and CLS below 0.1. Confirm with a production preview and browser audit, not a local development guess.

Astro view transitions are optional. If used, add the current `astro:transitions` router only after testing script re-execution, focus restoration, route announcements, reduced motion, and non-supporting browsers. Regular document navigation is the safer default for this mostly static launch.

## Verification commands and evidence

From `site/`, the minimum checks are:

```sh
npm run check
npm run build
npm run preview
```

Add `check` and `build` scripts to `site/package.json`. A browser pass must inspect the home page and every linked route at the required widths, then check keyboard flow, no-JavaScript rendering, console errors, missing assets, heading order, link destinations, and metadata. Record the build output and any remaining content gates in a site-specific verification note under `docs/design/`.

Do not add framework root scripts or a second lockfile at repository root. Do not commit `dist/` or `.astro/` output.

## Current official Astro evidence

- [Astro project structure](https://docs.astro.build/en/basics/project-structure/), accessed 12 September 2026. Documents `src/pages`, `src/components`, `src/layouts`, `src/styles`, processed `src/` assets, and unchanged `public/` assets.
- [Astro 7.2 release](https://astro.build/blog/astro-720/), published 6 August 2026 and accessed 12 September 2026. Establishes the current release reference and upgrade command.
- [Astro view transitions](https://docs.astro.build/en/guides/view-transitions/), accessed 12 September 2026. Documents opt-in routing, lifecycle behavior, accessibility, reduced motion, and the script re-execution tradeoff.
- [Astro develop and build guide](https://docs.astro.build/en/develop-and-build/), accessed 12 September 2026. Recommends the project structure, TypeScript configuration, content collections where needed, and performance oriented Astro workflow.

## Preflight verdict

**READY FOR IMPLEMENTATION.** The safest build is an isolated static Astro app in `site/`, with no UI framework and no runtime dependencies beyond Astro. The existing PRD and Swiss brief provide the content and design constraints. The Luna implementer must preserve all unresolved publication gates and return browser evidence before the site can be treated as launch ready.
