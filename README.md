# steepstep.com Schweiz, Astro preview

Swiss Standard German (`de-CH`) static preview for the private-pay online physiotherapy offer.

## Run

```sh
npm install
npm run check
npm run build
npm run dev
```

The page is intentionally a preview. It does not collect health data, take payment, or expose a live booking route. Preview pages emit `noindex, nofollow`. The steepstep.com identity is integrated as a working preview identity; trademark, company name, domain ownership, practitioner details, service area, CHF prices and terms, clinical escalation copy, privacy details, real contact details, owned photography, and the approved booking provider still require confirmation before publication.

Temporary Unsplash images are illustrative only. Sources are recorded in `../docs/design/assets/unsplash-register.md` and must be rechecked before use.

## Content map

The home page carries the primary decision journey. Supporting answer pages are available at `/online-physiotherapie-schweiz` and `/so-funktionierts`. Their content is preview material and remains gated by clinical review, verified practitioner details, and final service terms. See `../docs/design/2026-09-depth-implementation.md` for the implementation record and publication backlog.
