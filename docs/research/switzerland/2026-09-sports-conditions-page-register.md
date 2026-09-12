# Sports condition pages, editorial register

**Editorial date:** 12 September 2026
**Market:** Switzerland, private-pay online physiotherapy
**Status:** Draft for practitioner review before clinical publication

## What these pages do

The cluster answers a recognisable symptom question, explains what a video appointment can observe, gives an illustrative progression, and names the point where local assessment is the safer route. The pages do not diagnose readers, promise an outcome, or prescribe an exercise to an unknown person.

## Routes and evidence

| Route | Primary evidence used | Editorial choice |
|---|---|---|
| `/beschwerden/knieschmerzen-sport/` | Neal et al., BJSM best-practice guide, 2024; APTA telehealth CPG, 2024 | Knee and hip exercise are described as a foundation, with a 12-week-or-more horizon presented only as study context. |
| `/beschwerden/umgeknickter-knoechel/` | JOSPT/APTA lateral ankle sprain CPG, 2021; North Bristol NHS Trust guidance | Structured loading, balance and sport tasks are described. The 8–12-week range is explicitly an orientation, not a promise. |
| `/beschwerden/achillessehne/` | APTA midportion Achilles CPG revision, 2024; Dutch guideline, 2021; RNOH patient guidance | Months are named as a realistic horizon. The RNOH 6–9-month full-activity context is attributed and qualified. |
| `/beschwerden/oberschenkelzerrung/` | London International Hamstring Consensus, BJSM, 2023; APTA telehealth CPG, 2024 | Progression follows capacity and sport demand. No single return date is claimed. |
| `/beschwerden/rueckenschmerzen-sport/` | WHO chronic primary low-back-pain guideline, 2023; NICE NG59; JOSPT/APTA low-back-pain CPG, 2021 | Active care and warning-sign screening lead. No fixed healing date or scan promise is used. |

## Clinical review gate

Before publication, a named licensed practitioner must check every exercise example, referral boundary, source link and Swiss terminology. The copy intentionally uses “kann passen”, “muss abgeklärt werden” and “Beispiel, individuell angepasst” where remote care has limits.

## Build decisions

- The shared `BaseLayout`, header and footer remain unchanged.
- The condition template keeps one content width and one navigation path across all pages.
- The pages use no stock imagery. The information architecture carries the depth so clinical claims are not decorated with irrelevant photographs.
- `MedicalWebPage` JSON-LD contains only visible page facts and FAQ text. It does not claim practitioner review or outcomes.
