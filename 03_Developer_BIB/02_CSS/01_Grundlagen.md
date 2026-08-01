# CSS – Grundlagen

## Was ist das?

CSS (**Cascading Style Sheets**) beschreibt Darstellung und Layout von
HTML: Farben, Schriften, Abstände, Größen, Positionierung und responsive
Anpassungen.

## Warum brauche ich das?

HTML soll die Bedeutung des Inhalts ausdrücken. CSS trennt davon das Design,
sodass dieselbe Struktur wartbar, wiederverwendbar und für verschiedene
Bildschirmgrößen gestaltet werden kann.

## Syntax

```css
selektor {
    eigenschaft: wert;
}

.article-card {
    padding: 1rem;
    background-color: #111827;
    color: #ffffff;
}
```

## Erklärung

CSS besteht aus Regeln. Ein Selektor wählt Elemente aus, Deklarationen
weisen Eigenschaften Werte zu.

- `p` ist ein Typselektor.
- `.card` wählt eine Klasse.
- `#navigation` wählt eine ID.
- `.card > h2` wählt direkte `h2`-Kinder.
- `:hover` ist eine Pseudoklasse.

Welche Regel gewinnt, bestimmen Kaskade, Herkunft, Wichtigkeit, Spezifität
und Reihenfolge. Vererbbare Eigenschaften wie `color` werden häufig vom
Elternelement übernommen.

## Beispiel

```css
*,
*::before,
*::after {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: system-ui, sans-serif;
    line-height: 1.5;
}
```

## Typische Fehler

- Ein Punkt vor einer Klasse oder `#` vor einer ID fehlt.
- Semikolon, Doppelpunkt oder schließende Klammer fehlt.
- Eine spezifischere oder spätere Regel überschreibt den gewünschten Stil.
- Feste Pixelbreiten verursachen horizontales Scrollen.
- Inline-Styles erschweren die Kaskade.

## Merksatz

**HTML strukturiert – CSS gestaltet. Die Kaskade entscheidet, welche
Gestaltung gilt.**

## Verwandte Themen

- [Wichtige CSS-Eigenschaften](02_Wichtige_Eigenschaften.md)
- [CSS-Workflow](03_Workflow.md)
- [HTML-Grundlagen](../01_HTML/01_Grundlagen.md)

## Prüfungswissen

Prüfe Selektoren, Box-Modell, Kaskade, Spezifität, Vererbung und
responsive Einheiten. Du solltest eine CSS-Regel lesen und ihre Wirkung
begründen können.
