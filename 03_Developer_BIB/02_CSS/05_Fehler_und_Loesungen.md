# CSS – Fehler und Lösungen

## Was ist das?

CSS-Fehler entstehen meist durch falsche Selektoren, die Kaskade, das
Box-Modell, Layoutkontexte oder ungeeignete Größen.

## Warum brauche ich das?

Die sichtbare Abweichung liegt oft nicht in der Regel, die man gerade
betrachtet. Systematische Diagnose verhindert zufällige Gegenregeln.

## Syntax

```text
Element inspizieren
→ passende Regel vorhanden?
→ Regel durchgestrichen?
→ berechneten Wert prüfen
→ Elternlayout und Box-Modell prüfen
→ minimale Änderung testen
```

## Erklärung

- Stil fehlt: CSS-Verknüpfung und Selektor prüfen.
- Regel ist durchgestrichen: Spezifität und Reihenfolge untersuchen.
- Breite ist zu groß: `box-sizing`, `padding`, `border` und feste Breiten prüfen.
- Flex-Elemente stehen falsch: Haupt- und Querachse sowie `flex-direction` prüfen.
- `z-index` wirkt nicht: Stacking Context und `position` untersuchen.
- Mobile Ansicht bricht: feste Breiten, lange Wörter und `overflow` prüfen.

## Beispiel

```css
/* Problematisch */
.content {
    width: 100%;
    padding: 2rem;
}

/* Robuste Grundlage */
*,
*::before,
*::after {
    box-sizing: border-box;
}
```

## Typische Fehler

- Sofort `!important` hinzufügen.
- Symptome mit negativen Margins verschieben.
- Nur den Kindknoten prüfen, obwohl das Elternlayout die Position bestimmt.
- Browserzoom oder Cache für jede Abweichung verantwortlich machen.
- Fehler im HTML-DOM nicht beachten.

## Merksatz

**DevTools zeigen, welche Regel gewinnt – raten musst du nicht.**

## Verwandte Themen

- [CSS – Workflow](03_Workflow.md)
- [HTML – Fehler und Lösungen](../01_HTML/05_Fehler_und_Loesungen.md)
- [JavaScript – Fehler und Lösungen](../03_JavaScript/05_Fehler_und_Loesungen.md)

## Prüfungswissen

Bei Analyseaufgaben solltest du Kaskade, Spezifität, Box-Modell und
Layoutkontext sauber unterscheiden und die Ursache Schritt für Schritt
eingrenzen.
