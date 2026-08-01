# CSS – Best Practices

## Was ist das?

CSS-Best-Practices sind Regeln für verständliche Selektoren,
wiederverwendbare Komponenten, stabile Layouts und barrierearme Zustände.

## Warum brauche ich das?

CSS wächst schnell. Ohne Konventionen entstehen Überschreibungen,
`!important`-Ketten und schwer änderbare Abhängigkeiten.

## Syntax

```css
:root {
    --color-primary: #2563eb;
    --space-md: 1rem;
    --radius-md: 0.5rem;
}

.button {
    padding: 0.75rem var(--space-md);
    border-radius: var(--radius-md);
    background: var(--color-primary);
}
```

## Erklärung

- Bevorzuge Klassen mit sprechenden Namen vor tiefen Selektorketten.
- Verwende Custom Properties für wiederkehrende Designwerte.
- Nutze Flexbox für eindimensionale und Grid für zweidimensionale Layouts.
- Beginne mit robusten, fließenden Größen (`rem`, `%`, `min()`, `max()`).
- Halte Spezifität niedrig und vermeide `!important`.
- Gestalte `:focus-visible`, nicht nur `:hover`.
- Gruppiere Regeln nachvollziehbar und entferne toten Code.
- Verwende `prefers-reduced-motion`, wenn Animationen relevant sind.

## Beispiel

```css
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        scroll-behavior: auto;
        transition-duration: 0.01ms;
    }
}
```

## Typische Fehler

- IDs werden zum Styling genutzt und erhöhen unnötig die Spezifität.
- Sehr allgemeine Klassennamen wie `.red` beschreiben Aussehen statt Aufgabe.
- Responsive Regeln überschreiben sich unkontrolliert.
- Unbenutzte Regeln bleiben dauerhaft bestehen.
- Fokusrahmen werden entfernt, ohne Ersatz bereitzustellen.

## Merksatz

**Wenig Spezifität, klare Komponenten, sichtbare Zustände.**

## Verwandte Themen

- [CSS-Grundlagen](01_Grundlagen.md)
- [Wichtige Eigenschaften](02_Wichtige_Eigenschaften.md)
- [HTML – Best Practices](../01_HTML/04_Best_Practices.md)

## Prüfungswissen

Prüfungswissen umfasst Wartbarkeit, Responsive Design,
Barrierefreiheit und die begründete Wahl zwischen Flexbox und Grid.
