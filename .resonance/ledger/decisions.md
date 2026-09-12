# Decisions
schema: resonance-ledger/1

> Settled calls. One entry each, id prefix `dec-`. Supersede to change one; never delete. Spec: the ops-core skill, references/state_ledger.md.

## dec-market-language-and-scope: Swiss-first online private-pay physiotherapy
type: decision
created: 2026-09-12
status: active
confidence: high
review_due: 2026-12-12

Steepstep launches in Switzerland for privately paying active people. The public site uses Swiss Standard German (`de-CH`) only. The offer is clinician-led online physiotherapy for sport, movement and common musculoskeletal problems. Germany and Austria remain outside the current launch scope.

## dec-offer-and-pricing: Free orientation followed by visible CHF offers
type: decision
created: 2026-09-12
status: active
confidence: medium
review_due: 2026-12-12

The first call is a free 20-minute orientation. Continued care begins with a paid CHF 149 assessment. The current package anchors are CHF 549 for Begleitung and CHF 749 for Fortschritt, with inclusions explained before enquiry. Prices are in Swiss francs and remain subject to commercial review after live demand evidence.

## dec-practice-identity: PIRATE GmbH operates Steepstep and Natalja Krol is a named expert
type: decision
created: 2026-09-12
status: active
confidence: high
review_due: 2026-12-12

PIRATE GmbH is the legal operator named in the imprint. Natalja Krol is a contact person and one member of the expert group. Public positioning may describe the group as having decades of combined experience, while individual professional titles, registrations and Swiss practice permissions must remain tied to verified records.

## dec-content-and-experience-standard: Every public page must earn its place
type: decision
created: 2026-09-12
status: active
confidence: high
review_due: 2026-12-12

The site keeps only pages with meaningful user value, expert depth and a clear navigation path. All pages share one header, footer and content width. No public page may contain preview, unfinished or future-availability wording. Content must explain relevant sports problems, likely care phases, time horizons, online suitability and referral limits without promising a diagnosis or guaranteed recovery.

## dec-brand-and-interface: Steepstep means measured progress with human care
type: decision
created: 2026-09-12
status: active
confidence: high
review_due: 2026-12-12

Steepstep is the working brand because recovery is built through a series of manageable steps, including difficult ones. The visual identity should feel warm, exact and premium, with distinct sport-physiotherapy imagery, restrained tactile motion, useful hover states and reduced-motion support. Copy must stay specific, caring and native to Swiss Standard German, with no generic AI phrasing.

## dec-privacy-and-contact: No tracking and protected contact by email
type: decision
created: 2026-09-12
status: active
confidence: high
review_due: 2026-12-12

Steepstep does not use analytics, advertising pixels, tracking cookies or other behavioural tracking. The contact form sends to `contact@steepstep.com`, must discourage health information in email, and must use layered abuse controls, safe mail headers, rate limits and protected secrets. The privacy page must explain form data, technical logs, retention, deletion and rights in plain Swiss Standard German.

## dec-client-communication: Private communication belongs only to active programmes
type: decision
created: 2026-09-12
status: active
confidence: high
review_due: 2026-12-12

The public site publishes no messenger account, telephone number or invitation to send unsolicited messages. Active programme clients may use the protected communication route agreed before purchase for questions and observations between appointments. Public enquiries use the protected contact form and must not include health data.

## dec-deployment-boundary: Astro 7 static site with one All-Inkl FTPS destination
type: decision
created: 2026-09-12
status: active
confidence: high
review_due: 2026-12-12

The site uses Astro 7 and GitHub Actions. Deployment uses the tested All-Inkl FTPS flow with TLS certificate verification set to `loose`, and may write only to the exact remote directory `/steepstep.com/`. The project workspace is `/Users/piratex/Documents/projects/physio`; the separate `piratex.com` repository must remain untouched.
