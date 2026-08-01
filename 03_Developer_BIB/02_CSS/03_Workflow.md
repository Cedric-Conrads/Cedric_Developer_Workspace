# CSS – Workflow

## Was ist das?

Der CSS-Workflow ist eine schrittweise Vorgehensweise vom groben Layout bis
zu Details, Zuständen und responsiven Anpassungen.

## Warum brauche ich das?

Ein fester Ablauf verhindert, dass lokale Einzelwerte ein grundsätzlich
falsches Layout überdecken. Die Browser-Entwicklertools machen Ursachen
sichtbar.

## Syntax

```text
Basis/Reset → Layout → Komponenten → Typografie/Farbe
            → Zustände → Responsive Design → Browser-Test
```

## Erklärung

1. HTML-Struktur prüfen.
2. Globale Basisregeln und Designwerte festlegen.
3. Hauptlayout mit Grid oder Flexbox aufbauen.
4. Komponenten mit Klassen gestalten.
5. Typografie, Farben und Abstände ergänzen.
6. Hover-, Fokus-, Fehler- und deaktivierte Zustände gestalten.
7. Kleine und große Viewports testen.
8. In DevTools Box-Modell, berechnete Werte und überschreibende Regeln prüfen.

## Beispiel

Statt für jede Karte feste Breiten zu setzen, baust du zuerst das
Kartenraster:

```css
.articles {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
    gap: 1rem;
}
```
Danach gestaltest du die einzelne `.article-card`.

## Typische Fehler

- Pixelwerte werden ohne übergeordnetes Layout angepasst.
- Responsive Design wird erst nach Fertigstellung „angehängt“.
- DevTools zeigen eine Überschreibung, aber stattdessen wird `!important` gesetzt.
- Zustände wie Fokus, Fehler oder leere Listen fehlen.
- Änderungen werden nur in einer Browsergröße getestet.

## Merksatz

**Von außen nach innen: Seite, Layout, Komponente, Detail.**

## Verwandte Themen

- [CSS – Fehler und Lösungen](05_Fehler_und_Loesungen.md)
- [HTML – Workflow](../01_HTML/03_Workflow.md)
- [Git – täglicher Workflow](../06_Git/16_Taeglicher_Git_Workflow.md)

## Prüfungswissen

In Projektaufgaben zählt ein nachvollziehbarer responsiver Aufbau. Nenne
Testgrößen, Zustände, DevTools und wiederverwendbare Klassen.
