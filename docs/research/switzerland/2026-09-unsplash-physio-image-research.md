# Image research: sport physiotherapy imagery

**Checked:** 12 September 2026
**Scope:** Distinct, locally hosted imagery for steepstep pages. Images should explain a real moment in care or sport, not decorate a template.

## Finding

Unsplash search results for physiotherapy and sports rehabilitation contain a large share of Unsplash+ and Getty Images material, plus generic gym and wellness scenes. The strongest visual direction for steepstep is therefore a small, deliberate set of locally hosted images, each with one job: assessment, coached exercise, sport-specific context, team credibility, or a return-to-movement moment. A larger gallery would add repetition and rights uncertainty without adding trust.

The best long-term solution is owned photography showing the actual steepstep team coaching a real, consented movement session. Stock images should remain clearly illustrative and should never stand beside a testimonial, outcome, credential, or claim that the pictured person is a clinician or client.

## Existing approved candidates and placement map

The project already has eight distinct local candidates. The asset registers remain the source of truth for the image URL, photographer, download date, crop, hash, and rights review.

| Page or job | Local image | Why it earns its place | Treatment and performance |
| --- | --- | --- | --- |
| Home, first view | `images/optimized/hero-1400.webp` | An athlete warming up makes the return-to-movement promise immediate. | Eager, 1400px WebP, reserved dimensions, no scroll zoom. Replace with owned clinician-led sports assessment when available. |
| Home, team proof | `images/optimized/proof-1000.webp` | A quiet movement image gives the written recommendation section breathing room. | Lazy, 1000px WebP, illustrative caption, no outcome implication. |
| Sport hub | `images/optimized/sport-rehab-1200.webp` | A track-based athlete stretch gives the hub a direct sport and movement context before the visitor chooses a discipline. | Eager on hub, 1200px WebP, wide crop. Source and attribution are recorded in `docs/design/assets/unsplash-register.md`; it remains a stock context image, not a Steepstep treatment scene. |
| About | `images/optimized/natalja-900.webp` | Shows the named expert whose background gives the team a human point of entry. | Eager, 900px WebP, portrait crop, caption credits Powerflow. Do not call the image a treatment scene. |
| Laufen | `images/optimized/running-900.webp` | A runner on uneven terrain supports the page's focus on load, terrain, rhythm, and return to running. | Eager, 900px WebP, portrait crop, distinct from all other routes. |
| Skifahren | `images/optimized/skiing-1200.webp` | A turn on snow makes edge change, fatigue, and variable load concrete. | Eager, 1200px WebP, wide crop, distinct from all other routes. |
| So funktionierts, preparation | Use a future owned assessment frame | The process page needs a visual of camera setup or a coached task, not another athlete landscape. | Lazy, 900px WebP or AVIF, only after real rights are documented. |
| Condition pages, method | Use a future owned exercise or assessment frame per condition family | A knee step-down, calf raise, landing, or running drill would make the method legible. Generic injury close-ups would not. | One asset per substantive condition cluster, lazy below the first answer, descriptive alt text. |

The current eight files are distinct by hash according to the last image audit. No image should be repeated across the home, sport, running, skiing, and about pages. Condition pages can remain text-led until a clinically truthful, rights-cleared image exists.

## Source and rights findings

Unsplash's standard licence permits broad commercial use of the image file, but it does not settle rights for recognisable people, trademarks, logos, or artwork visible inside a photograph. The project register records this distinction and marks every current candidate as pending final rights review. Powerflow images were authorised by the project owner for this build, but photographer and model rights still need confirmation before treating them as final commercial assets.

The following search pages were checked for current availability and licence mix:

- [Unsplash, sports rehabilitation](https://unsplash.com/s/photos/sports-rehabilitation)
- [Unsplash, sports therapy](https://unsplash.com/s/photos/sports-therapy)
- [Unsplash, physiotherapy](https://unsplash.com/s/photos/physiotherapy)
- [Unsplash, sports medicine](https://unsplash.com/s/photos/sports-medicine)
- [Unsplash, runner stretching](https://unsplash.com/s/photos/runner-stretching)

The only directly surfaced specialist-looking result in this pass was a Getty Images Unsplash+ asset, so it is excluded from the free image plan: [rehabilitation specialist doing active treatment](https://unsplash.com/photos/rehabilitation-specialist-doing-active-treatment-on-suspension-straps-to-a-male-patient-concept-of-therapeutic-exercises-to-restore-pain-free-movement-patterns-and-improve-function-XpGa9d7S7ZI). Do not use Unsplash search-result thumbnails as a rights or quality decision.

## Image direction for the next photo session

Commission six short scenes in one real setting: a clinician observing a squat or step-down, coaching a calf raise, reviewing a running clip, preparing a home camera view, discussing a written plan, and an athlete performing a sport-specific task. Photograph hands, posture, and the interaction as often as faces. Keep logos and medical records out of frame. Record consent, photographer ownership, model release, location permission, exact crops, and alt text in the asset register.

That set would give the process and condition pages genuine depth while keeping the brand recognisable. Until then, restraint is the more credible choice.

## Design and performance rules

- One image, one question answered. Do not add a photo simply to fill a long page.
- Reserve intrinsic dimensions on every image to keep CLS below the project's target.
- Use local WebP or AVIF derivatives, with the smallest useful width for each crop.
- Load only the first-view image eagerly. Lazy-load every image below the first viewport.
- Keep image hover motion pointer-only, compositor-friendly, under 1.5% scale, and disabled for reduced-motion users.
- Never use parallax behind clinical information. It adds vestibular risk and does not clarify the care path.
- Alt text describes what is visible. Captions state when an image is illustrative and identify the source where required.
