# CSS – Wichtige Eigenschaften

## Was ist das?

CSS-Eigenschaften steuern das Box-Modell, Typografie, Farben, Layout,
Zustände und responsive Verhalten eines Elements.

## Warum brauche ich das?

Wer die wichtigsten Eigenschaftsgruppen versteht, kann Layouts gezielt
aufbauen, statt Werte zufällig zu verändern.

## Syntax

```css
.card-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
    gap: 1rem;
}

.card {
    padding: 1rem;
    border: 1px solid #d1d5db;
    border-radius: 0.75rem;
}
```

## Erklärung

Wichtige Gruppen:

| Bereich | Eigenschaften |
| --- | --- |
| Box-Modell | `width`, `max-width`, `margin`, `padding`, `border` |
| Typografie | `font-family`, `font-size`, `line-height`, `text-align` |
| Farben | `color`, `background-color`, `opacity` |
| Flexbox | `display`, `flex-direction`, `justify-content`, `align-items`, `gap` |
| Grid | `grid-template-columns`, `grid-column`, `gap` |
| Verhalten | `overflow`, `position`, `z-index` |
| Interaktion | `:hover`, `:focus-visible`, `transition`, `cursor` |

`margin` ist Außenabstand, `padding` Innenabstand. `max-width` begrenzt ein
Element, ohne kleinere Bildschirme unnötig zu sprengen.

## Beispiel

```css
.button {
    padding: 0.75rem 1rem;
    border: 0;
    border-radius: 0.5rem;
    background: #2563eb;
    color: white;
    cursor: pointer;
    transition: background-color 150ms ease;
}

.button:hover,
.button:focus-visible {
    background: #1d4ed8;
}
```

## Typische Fehler

- `justify-content` und `align-items` werden ohne Kenntnis der Achse vertauscht.
- `height` wird fest gesetzt, obwohl Inhalt wachsen kann.
- `z-index` wird erhöht, obwohl keine passende Positionierungs- oder
  Stacking-Context-Situation vorliegt.
- Nur `:hover`, aber kein sichtbarer Tastaturfokus wird gestaltet.
- `100vw` verursacht durch die Scrollbar unnötiges horizontales Scrollen.

## Merksatz

**Außen ist `margin`, innen ist `padding`; Layout ist meist Flexbox oder
Grid.**

## Verwandte Themen

- [CSS-Grundlagen](01_Grundlagen.md)
- [CSS – Best Practices](04_Best_Practices.md)
- [HTML – Wichtige Elemente](../01_HTML/02_Wichtige_Elemente.md)

## Prüfungswissen

Box-Modell, Flexbox, Grid, Einheiten und Zustände sind häufige
Prüfungsinhalte. Erkläre nicht nur die Eigenschaft, sondern auch ihre
Layoutwirkung.
