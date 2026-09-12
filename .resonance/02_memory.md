# Project Memory

The compound-knowledge index for this project. One line per durable lesson; longer detail goes in a leaf file under `memory/`. This file loads at the start of every session, so a lesson written here once is read every time after. The rule is simple: never solve the same problem twice.

How to use it: when you learn something durable, a bug and its fix, a project convention, a research finding, or a user preference, add a one-line entry under Lessons, newest first. Keep it specific and greppable. If it needs more than a line, write `memory/<slug>.md` and link it. Curate the file: when a lesson stops being true, correct or remove it. Retire a lesson only when the code or system demonstrably contradicts it, never for lack of proof that it still holds. A repo rarely witnesses its own operational truths, so unverifiable is not false.

## Lessons

- **Client messaging is private by design.** Never publish messenger accounts or invite unsolicited messages. Describe the protected, pre-agreed communication route only as a benefit for active programme clients between appointments; route public enquiries through the protected form.

- **Shared outer geometry, focused reading measures.** Keep all route openings on `--outer-measure` and use narrower inner text/image measures only when line length or visual focus requires it. Explain the choice in the design record.
- **Visual explanations must carry a real decision.** Use semantic ordered HTML for care paths and progressions, omit decorative ordinals, collapse to one column on mobile, and respect reduced motion.

- **Condition pages use one distinct local WebP image each.** The image is illustrative movement context with honest alt text and caption, and must not imply a diagnosis, treatment outcome, patient, or clinician identity. Keep the five condition assets in `public/images/conditions/` and recheck Unsplash rights, model, logo, and crop status before final publication.
- **All-Inkl generated PHP must use valid `declare` syntax.** The live secret include had `declare(strict_types:1);` with a colon, causing a PHP parse error when `ss_secret()` required it and returning HTTP 500. CI must lint and require the generated file before upload. API `.htaccess` files also avoid `Options` directives and use supported access_compat denial rules.

- Typed lessons live in [les-clinical-content-needs-evidence](ledger/lessons.md), [les-image-trust-requires-licensing-and-variety](ledger/lessons.md), [les-remote-care-boundary](ledger/lessons.md), and [les-public-release-gates](ledger/lessons.md).

## Decisions

Settled decisions live here so they resurface every session and never get re-litigated. One line each: date, the decision, the why. Supersede by editing the line; git history keeps the audit trail.

- Typed decisions live in [dec-market-language-and-scope](ledger/decisions.md), [dec-offer-and-pricing](ledger/decisions.md), [dec-practice-identity](ledger/decisions.md), [dec-content-and-experience-standard](ledger/decisions.md), [dec-brand-and-interface](ledger/decisions.md), [dec-privacy-and-contact](ledger/decisions.md), and [dec-deployment-boundary](ledger/decisions.md).

---

[View State (active context)](01_state.md) | [View Soul (vision and laws)](00_soul.md)
