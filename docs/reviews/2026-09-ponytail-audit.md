# Ponytail over-engineering audit, 12 September 2026

Scope is the current implementation tree. Correctness, security, and performance bugs are excluded from this audit and remain in the operations audit.

- `yagni: keep `OfferSummary.astro` and `offers.ts` as the single offer abstraction; do not add a second pricing factory or CMS layer for four static offers. [src/components/OfferSummary.astro, src/data/offers.ts]
- `native: the small menu behavior uses one inline script, which is appropriate for an Astro static site; do not add a client framework or state library for it. [src/layouts/BaseLayout.astro]
- `yagni: `ProcessDiagram.astro` has a clear repeated semantic use across care paths; retain it, but avoid introducing a generic diagram builder with configurable render modes until a second distinct visual grammar exists. [src/components/ProcessDiagram.astro]
- `shrink: keep condition content data in the page props while the cluster is five pages; a collection schema or runtime content registry would add indirection without a current editing or validation need. [src/components/ConditionPage.astro, src/pages/beschwerden]
- `delete: no dead product routes were found in the generated 20-route set; do not restore thin speculative sport pages simply to increase route count. [src/pages, public/sitemap.xml]
- `native: the system font stack avoids an external font loader and its privacy cost; do not add a font dependency until a measured brand need and local licensing decision exist. [src/styles/global.css]
- `shrink: the single `BaseLayout.astro` owns shared shell, metadata, structured data, and menu behavior; do not create route-specific layouts that repeat header/footer markup. [src/layouts/BaseLayout.astro, src/components/SiteHeader.astro, src/components/SiteFooter.astro]
- `shrink: the mobile menu declarations appear in two global media blocks, one at the 1050px breakpoint and a near-duplicate at 800px. Keep the 1050px block as the source and retain only intentional small-screen overrides. [src/styles/global.css]

**net: approximately -20 lines, -0 deps possible.** The implementation is lean for its content scope; the duplicate mobile declarations are the only clear simplification. The remaining concerns are release verification and factual ownership, not over-engineering.
