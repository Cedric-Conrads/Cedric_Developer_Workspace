# HTML – Wichtige Elemente

## Was ist das?

HTML-Elemente kennzeichnen verschiedene Arten von Inhalt. Semantische
Elemente wie `header`, `nav`, `main`, `section`, `article` und `footer`
beschreiben zusätzlich die Bedeutung eines Bereichs.

## Warum brauche ich das?

Die richtige Elementwahl macht Quellcode verständlich, verbessert
Tastaturbedienung und Screenreader-Ausgabe und hilft Suchmaschinen, Inhalte
korrekt einzuordnen.

## Syntax

```html
<header>...</header>
<nav aria-label="Hauptnavigation">...</nav>
<main>
    <section>
        <h2>Artikel</h2>
    </section>
</main>
<footer>...</footer>
```

Häufige Elemente:

| Aufgabe | Elemente |
| --- | --- |
| Text | `h1`–`h6`, `p`, `strong`, `em`, `span` |
| Listen | `ul`, `ol`, `li` |
| Medien | `img`, `audio`, `video` |
| Verweise | `a` |
| Formulare | `form`, `label`, `input`, `select`, `textarea`, `button` |

## Erklärung

- Eine Seite besitzt normalerweise eine zentrale `h1`.
- Die Überschriftenhierarchie bildet die inhaltliche Gliederung ab.
- `div` und `span` sind neutrale Container ohne eigene Bedeutung.
- `id` muss im Dokument eindeutig sein; `class` darf wiederholt werden.
- `name` bestimmt bei Formularfeldern den Schlüssel der übertragenen Daten.
- `alt` beschreibt den Zweck eines Bildes; rein dekorative Bilder erhalten
  `alt=""`.

## Beispiel

```html
<form action="save_article.php" method="post">
    <label for="name">Artikelname</label>
    <input id="name" name="name" type="text" required>
    <button type="submit">Speichern</button>
</form>
```
`for="name"` verbindet das Label mit `id="name"`. PHP liest den Wert später
über `$_POST["name"]`, weil das Feld `name="name"` besitzt.

## Typische Fehler

- Ein `a` ohne sinnvolles `href` wird als Button missbraucht.
- Ein `button` in einem Formular hat unbeabsichtigt `type="submit"`.
- Eingabefelder besitzen nur einen `placeholder`, aber kein `label`.
- Überschriftenstufen werden nur nach gewünschter Schriftgröße gewählt.
- Eine `id` wird mehrfach vergeben.

## Merksatz

**Wähle ein Element nach seiner Bedeutung – nicht nach seinem
Standardaussehen.**

## Verwandte Themen

- [Formulardaten mit GET und POST](../04_PHP/08_GET_und_POST.md)
- [HTML-Tabellen](06_Tabellen.md)
- [CSS-Selektoren](../02_CSS/01_Grundlagen.md)
- [DOM und Events](../03_JavaScript/02_Wichtige_Befehle.md)

## Prüfungswissen

Typische Aufgaben prüfen Elementwahl, Formulare, Attribute,
Überschriftenhierarchie und Barrierefreiheit. Erkläre besonders den
Unterschied zwischen `id`, `class` und `name`.
