# Astro technical audit

**Date:** 12 September 2026
**Scope:** `site/`, the static Swiss Standard German physiotherapy site

## Verdict

The site is a valid lean static Astro app. The implementation now runs Astro 7.3.0 and passes `astro check` and `astro build`. Astro 7.3 was published 3 September 2026. The app uses static output with no client framework.

The configuration is now framework-native: the unnecessary Vite `esbuild.tsconfigRaw` override and React JSX source setting are gone. `tsconfig.json` carries Astro’s strict compiler defaults locally because Astro 7.3’s Rolldown resolver reports `Tsconfig not found astro/tsconfigs/strict` even with the package preset present. `vite.resolve.tsconfigPaths: false` is safe here because the site has no path aliases and avoids that resolver failure. The broad parent-tree exclude is gone.

## Checks run

From `site/`:

- `npm run check` passed with 0 errors, 0 warnings, and 0 hints across 6 Astro files.
- `npm run build` passed and generated 4 static routes in about 0.5 seconds.
- `git diff --check` passed after the configuration change.
- Local Node is `v22.22.3`, which satisfies the current Astro 7 engine requirement reported by the installed package (`>=22.12.0`).
- The local images are modest JPEGs, 148 KB for `hero.jpg` and 60 KB for `proof.jpg`, but they remain unprocessed `public/` assets.

## Findings and actions

### Resolved

1. `astro.config.mjs` carried a Vite `esbuild` override that duplicated JSX settings and can become a compatibility liability as Astro 7 adopts Vite 8 and Rolldown. The site contains no JSX or React integration, so the override had no product purpose. It was removed.
2. `tsconfig.json` declared `jsxImportSource: react` without React installed or used. It now extends `astro/tsconfigs/strict`, keeping Astro’s recommended strict defaults while retaining only project-relevant compiler options.
3. `exclude: ["../../**/*"]` reached above the app boundary and made the project harder to reason about. It was narrowed to generated output and dependencies.

### Follow-up for the implementer

1. Recheck the Astro version before release. The lockfile currently pins Astro 7.3.0, the official stable release line verified during this audit.
2. Move the two publication-approved images to `src/assets/` and import them through Astro’s image pipeline once the photography register and final image choices are approved. The current `public/` files are acceptable for a private preview, but Astro cannot optimize them there.
3. Do not add a client framework or animation package for the current interactions. The menu and IntersectionObserver reveal are small, progressive enhancements. Verify them with JavaScript disabled, keyboard navigation, and `prefers-reduced-motion` before release.
4. Keep generated `site/dist/` and `site/.astro/` out of version control.
5. The `site/` pages are compact, but several supporting pages are intentionally one-line templates. Before public handoff, format those files for reviewability without changing markup or copy.

## Astro 7 evidence

- [Astro 7.3 release](https://astro.build/blog/astro-730/), published 3 September 2026. It documents the current 7.3 release and the supported upgrade commands.
- [Astro 7 release](https://astro.build/blog/astro-7/), published 22 June 2026. It documents the Vite 8 and Rolldown transition and recommends `npm create astro@latest` for new projects.
- [Astro project structure](https://docs.astro.build/en/basics/project-structure/), accessed 12 September 2026. It documents `src/pages`, `src/components`, `src/layouts`, processed `src/` assets, and unchanged `public/` assets.
- [Astro TypeScript guide](https://docs.astro.build/en/guides/typescript/), accessed 12 September 2026. It documents the `base`, `strict`, and `strictest` presets.

## Upgrade reproduction note

An isolated copy was created under `/private/tmp/physio-astro7-audit` so the working tree stayed intact. The initial offline install could not resolve registry metadata. With approved registry access, `npm install astro@7.3.0` updated the lockfile. The first Astro 7 build exposed Rolldown’s package tsconfig resolution error. Reproducing it with and without a project `extends` entry showed the resolver failure persisted until `vite.resolve.tsconfigPaths` was disabled. The site has no aliases, so this is a documented, bounded configuration choice rather than a runtime workaround.

**Status: DONE_WITH_CONCERNS.** The app is verified on Astro 7.3.0. Before publication, configure the real domain so canonical URLs can be emitted, replace the neutral `physio / vorschau` label with the approved practice identity, and remove the preview `noindex` directive after the final content and legal review.
