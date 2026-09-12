# Umsetzungsplan: Sport SEO, GEO und AEO

**Ziel:** `/sport/` wird zur klaren, zitierfähigen Einstiegsseite für Online-Sportphysiotherapie in der Schweiz, ohne die tiefen Beschwerde- und Sportseiten zu kannibalisieren.

## Lieferumfang

1. Seitentitel, Description und Einstieg an die Seitenrolle anpassen.
2. Sichtbaren Antwortblock zu Definition, Eignung und Grenze ergänzen.
3. Sportarten- und Beschwerdeverlinkung mit sinnvollen Ankern ausbauen.
4. JSON-LD, Open Graph, Bild-Alt-Text und Canonical prüfen.
5. Mobile, Build-, Link-, Sitemap- und Structured-Data-Prüfungen ausführen.
6. Search Console/Bing-Messplan und fachliche Review als Release-Gates dokumentieren.

## Atomare Arbeitspakete

| ID | Aufgabe | Datei/Bereich | Akzeptanzkriterium |
| --- | --- | --- | --- |
| seo-sport-01 | Meta-Titel und Description überarbeiten | `src/pages/sport/index.astro` | **Erledigt.** Titel nennt Online-Sportphysiotherapie und Schweiz; Description erklärt Sportfokus und Belastungsaufbau. |
| seo-sport-02 | Antwortblock einfügen | `src/pages/sport/index.astro` | **Erledigt.** Im sichtbaren Einstieg stehen Definition, passende Fälle, die fachliche Video-Grenze und der kostenlose 20-Minuten-Einstieg. |
| seo-sport-03 | Sportarten konkretisieren | `src/pages/sport/index.astro` | **Erledigt.** Laufen, Skifahren, Fussball, Wandern, Radfahren und Klettern erhalten unterschiedliche Belastungsfragen. |
| seo-sport-04 | Clusterlinks schärfen | `src/pages/sport/index.astro` | **Erledigt.** Alle fünf Beschwerde-Guides sowie Laufen und Skifahren sind mit beschreibenden Ankern erreichbar. |
| seo-sport-05 | Bildsignale prüfen | `src/pages/sport/index.astro`, `src/layouts/BaseLayout.astro` | Sportmotiv ist einzigartig, Alt-Text beschreibt das Bild, OG und `primaryImageOfPage` referenzieren kein generisches Hero-Motiv. |
| seo-sport-06 | Strukturierte Daten prüfen | Layout und Seiten | JSON-LD stimmt exakt mit sichtbarem Inhalt überein; keine unbelegte Person, Bewertung, FAQ-Rich-Result- oder medizinische Anbieterbehauptung. |
| seo-sport-07 | Crawl- und URL-Gate | `public/robots.txt`, `public/sitemap.xml` | Alle sieben Clusterziele liefern 200, sind intern verlinkt, kanonisch und in der Sitemap nur einmal enthalten. |
| seo-sport-08 | Responsive Gate | globales CSS und Sportseite | **Code-seitig vorbereitet.** 360, 390, 768, 1024 und 1440 Pixel ohne horizontales Überlaufen; Browserbeweis bleibt offen. |
| seo-sport-09 | Clinical review gate | Dokumentation und Ledger | Benannte Fachperson bestätigt Aussagen, Eignungsgrenze, Warnzeichen und sportartspezifische Beispiele vor öffentlicher Freigabe. |
| seo-sport-10 | Measurement setup | Search Console/Bing, nach Zugang | Sitemap eingereicht; 28-Tage-Baseline für Queries, Impressionen, Klicks, Indexstatus und AI-Zitation angelegt. |

## Reihenfolge und Abhängigkeiten

`seo-sport-01` bis `seo-sport-04` bilden den Inhaltskern. `seo-sport-05` und `seo-sport-06` folgen erst, wenn das konkrete Sportmotiv und die sichtbaren Texte feststehen. `seo-sport-07` und `seo-sport-08` sind vor Commit und Deployment Pflicht. `seo-sport-09` ist die fachliche Freigabe für klinische Aussagen. `seo-sport-10` benötigt Kontozugriff und wird nach Veröffentlichung ausgeführt.

## Nicht Teil des Plans

- Keine `/sport/`-Unterseiten für jede erwähnte Sportart ohne eigenständige Tiefe.
- Kein `llms.txt` als vermeintlicher Rankinghebel.
- Kein FAQ-Schema nur für einen Rich Result.
- Keine Ortsseiten für Städte ohne echten Standort.
- Keine Keyword-Wiederholungen, Rankings, Suchvolumina oder Konversionswerte ohne Daten.

## Verifikation

```text
npm run check
npm run build
git diff --check
```

Danach: erzeugte Routen gegen Sitemap, interne Links, Canonical/JSON-LD, verbotene Launch-Sprache, Trackerfreiheit und die fünf mobilen Viewports prüfen. Bei der nächsten Live-Veröffentlichung zusätzlich `/sport/`, Sitemap, robots.txt und den bestehenden Kontakt-Endpunkt testen.
