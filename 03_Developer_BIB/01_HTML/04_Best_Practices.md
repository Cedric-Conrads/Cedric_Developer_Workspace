# HTML – Best Practices

## Was ist das?

Best Practices sind bewährte Regeln für lesbares, semantisches,
barrierearmes und wartbares HTML.

## Warum brauche ich das?

Gültiges HTML kann trotzdem schwer bedienbar oder schlecht wartbar sein.
Qualitätsregeln verhindern technische Schulden und schaffen eine stabile
Grundlage für CSS, JavaScript, Tests und Suchmaschinen.

## Syntax

```html
<button class="article-card__delete" type="button">
    Artikel löschen
</button>
```
Aussagekräftiger Name, korrektes Element und expliziter Button-Typ.

## Erklärung

- Verwende semantische Elemente und eine logische Überschriftenhierarchie.
- Nutze nur eine eindeutige `id`; verwende Klassen für wiederholbare Stile.
- Verknüpfe Formulareingaben mit sichtbaren `label`-Elementen.
- Schreibe aussagekräftige `alt`-Texte und setze `lang`.
- Halte Einrückung und Namenskonventionen einheitlich.
- Verwende kleine Dateinamen ohne Leerzeichen; im Projekt bevorzugt
  Kleinbuchstaben und Bindestriche.
- Öffne externe Links nur mit gutem Grund in einem neuen Tab.
- Lade JavaScript mit `defer` oder nach dem relevanten HTML.

## Beispiel

```html
<script src="assets/js/app.js" defer></script>

<nav aria-label="Hauptnavigation">
    <a href="index.html" aria-current="page">Startseite</a>
</nav>
```
`defer` wartet mit der Ausführung, bis HTML geparst ist.
`aria-current` kennzeichnet die aktive Seite.

## Typische Fehler

- ARIA wird verwendet, obwohl ein passendes natives Element existiert.
- Dateinamen und Pfade wechseln willkürlich zwischen Groß- und
  Kleinschreibung.
- Inline-Styles und Inline-Events vermischen alle Verantwortlichkeiten.
- Nicht sichtbare Inhalte werden mit leeren Links oder `<br>` konstruiert.
- Benutzereingaben werden ausschließlich clientseitig validiert.

## Merksatz

**Semantisches HTML ist die API deiner Benutzeroberfläche.**

## Verwandte Themen

- [Wichtige HTML-Elemente](02_Wichtige_Elemente.md)
- [CSS – Best Practices](../02_CSS/04_Best_Practices.md)
- [JavaScript – Best Practices](../03_JavaScript/04_Best_Practices.md)
- [Security – Grundlagen](../11_Security/01_Grundlagen.md)

## Prüfungswissen

Prüfungsrelevant sind Trennung der Verantwortlichkeiten, Barrierefreiheit,
Validierung, sprechende Namen und der Unterschied zwischen technischer
Gültigkeit und guter Qualität.
