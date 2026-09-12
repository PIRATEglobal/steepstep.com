# Page depth implementation

**Date:** 12 September 2026
**Scope:** Swiss Standard German Astro preview

## What changed

The home page now follows the life of one consultation. It explains what is discussed, what can be observed, what the patient receives afterwards, how a continuation works between appointments, how to prepare, and how suitability or referral is decided.

The new modules are deliberately plain HTML and remain useful without JavaScript:

- `Was Sie im Online-Ersttermin klären` names the four decisions a first appointment can produce.
- `Ihre schriftliche Empfehlung` shows a clearly labelled fictional specimen. It contains no patient data and makes no clinical promise.
- `Der Alltag gehört zum Plan` explains the between-session mechanics while marking unconfirmed service details as such.
- `Damit die Stunde Ihnen gehört` gives practical preparation guidance.
- The safety section now contains a text-first suitability route and links to the privacy page.
- The FAQ answers preparation, output, patient location, connection loss, insurance, recording, and cancellation questions.

Two self-contained support pages were added:

- `/online-physiotherapie-schweiz` answers what online physiotherapy can do in Switzerland, who it may suit, its limits, preparation, and pricing status.
- `/so-funktionierts` gives the pre-appointment, appointment, after-appointment, and connection-loss journey.

Both pages use direct answer passages, honest preview and review gates, internal links, and no invented practitioner, price, outcome, insurance, or service-area claims.

## Anti-slop decisions

No decorative ordinal labels, counters, logo walls, fake testimonials, generic blog grid, scroll hijacking, parallax, or client-only content were added. Depth comes from concrete care decisions and operational detail. The existing editorial palette, serif display type, hairline rules, restrained motion, and quiet image treatment remain intact.

## Verification

`npm run check` passes with 0 errors, 0 warnings, and 0 hints. `npm run build` passes and emits six static routes. Core content is server-rendered Astro HTML. The preview remains `noindex, nofollow` and the booking flow remains inactive.

## Clinician-authored backlog

Before publication, a named Swiss clinician should own and review:

- the final suitability, warning, urgent escalation, and referral wording;
- the written recommendation specimen and the actual post-appointment format;
- the confirmed package contents, response time, exclusions, payment, refund, and cancellation terms;
- one first-person method note explaining how sport goals and progress are discussed;
- one activity page for the first paid cohort, with author, review date, sources, and a maintenance owner;
- real practitioner names, qualifications, Swiss authorisation or registration, and service availability;
- the privacy, video provider, recording, storage, patient-location, and contact details.
