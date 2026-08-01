# HTML – Grundlagen

## Was ist das?

HTML (**HyperText Markup Language**) ist die Auszeichnungssprache, mit der
Inhalte einer Webseite strukturiert werden. HTML beschreibt beispielsweise
Überschriften, Absätze, Links, Bilder, Formulare und Tabellen.

## Warum brauche ich das?

Ohne HTML besitzt eine Webseite keine verlässliche Inhaltsstruktur. Browser,
Suchmaschinen, Screenreader, CSS und JavaScript orientieren sich am
HTML-Dokument. Eine saubere Struktur erleichtert deshalb Gestaltung,
Programmierung, Barrierefreiheit und Wartung.

## Syntax

```html
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seitentitel</title>
</head>
<body>
    <h1>Meine erste Seite</h1>
    <p>Ein sinnvoll strukturierter Inhalt.</p>
</body>
</html>
```

## Erklärung

- `<!doctype html>` aktiviert den aktuellen HTML-Standard.
- `<html lang="de">` kennzeichnet Sprache und Dokumentanfang.
- `<head>` enthält Metadaten, Titel und Verknüpfungen zu anderen Dateien.
- `<body>` enthält den sichtbaren und bedienbaren Seiteninhalt.
- Tags werden meist als öffnendes und schließendes Element geschrieben.

HTML legt Bedeutung und Struktur fest. Das Aussehen gehört zu CSS, das
Verhalten zu JavaScript und serverseitige Verarbeitung beispielsweise zu
PHP.

## Beispiel

```html
<main>
    <article>
        <h1>Lagerverwaltung</h1>
        <p>Hier werden alle Artikel verwaltet.</p>
        <a href="lagerbestand.php">Lagerbestand öffnen</a>
    </article>
</main>
```
`main` und `article` erklären die Aufgabe des Inhalts besser als mehrere
bedeutungslose `div`-Container.

## Typische Fehler

- Schließende Tags fehlen oder sind falsch verschachtelt.
- Im Dokument existieren mehrere Elemente mit derselben `id`.
- Dateipfade beachten Groß-/Kleinschreibung nicht.
- Inhalte werden nur mit `<br>` statt mit passenden Elementen strukturiert.
- CSS oder JavaScript wird im falschen Pfad eingebunden.

## Merksatz

**HTML sagt, was etwas ist. CSS sagt, wie es aussieht. JavaScript sagt, was
es tut.**

## Verwandte Themen

- [Wichtige Elemente](02_Wichtige_Elemente.md)
- [HTML-Workflow](03_Workflow.md)
- [Best Practices](04_Best_Practices.md)
- [CSS-Grundlagen](../02_CSS/01_Grundlagen.md)
- [JavaScript-Grundlagen](../03_JavaScript/01_Grundlagen.md)

## Prüfungswissen

Für Prüfungsaufgaben solltest du ein vollständiges Grundgerüst erklären,
semantische von neutralen Elementen unterscheiden und den Zweck von
`lang`, `charset`, `viewport`, `head` und `body` kennen.
