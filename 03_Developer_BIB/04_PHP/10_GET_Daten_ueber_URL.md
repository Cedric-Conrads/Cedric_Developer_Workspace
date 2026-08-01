# GET-Daten über die URL übergeben

## Was ist das?

Ein Query-String übergibt Schlüssel-Wert-Paare nach einem `?` in der URL.
PHP stellt sie in `$_GET` bereit.

## Warum brauche ich das?

Damit lassen sich Datensätze auswählen, Suchbegriffe teilen, Filter setzen
und Seitenzahlen abbilden.

## Syntax

```text
bearbeiten.php?artikelnummer=1001&modus=kurz
```

```php
$articleNumber = $_GET["artikelnummer"] ?? null;
$mode = $_GET["modus"] ?? "voll";
```

## Erklärung

`?` beginnt den Query-String, `&` trennt Parameter und `=` trennt Schlüssel
und Wert. Beim Erzeugen dynamischer URLs müssen Werte URL-kodiert werden.
Beim Empfangen werden Existenz, Typ, Wertebereich und Berechtigung erneut
geprüft. Ein Parameter ist niemals ein Beweis, dass der Benutzer den
Datensatz sehen oder ändern darf.

## Beispiel

```php
<a href="bearbeiten.php?artikelnummer=<?= urlencode($row["artikelnummer"]) ?>">
    Bearbeiten
</a>

<?php
$articleNumber = filter_input(
    INPUT_GET,
    "artikelnummer",
    FILTER_VALIDATE_INT
);
?>
```

## Typische Fehler

- Werte werden ohne URL-Kodierung zusammengesetzt.
- `$_GET["artikelnummer"]` wird ohne Existenzprüfung gelesen.
- Sichtbare URL-Parameter enthalten Passwörter oder Tokens.
- ID-Manipulation wird nicht durch Berechtigungsprüfung abgefangen.
- GET löst direkt eine Löschung aus.

## Merksatz

**Die URL wählt aus; der Server prüft trotzdem alles erneut.**

## Verwandte Themen

- [GET und POST](08_GET_und_POST.md)
- [SELECT einzelner Datensatz](17_SELECT_ein_oder_mehrere_Datensaetze.md)
- [Security – Grundlagen](../11_Security/01_Grundlagen.md)

## Prüfungswissen

Query-String, Kodierung, Validierung, sichere HTTP-Methoden und
Zugriffskontrolle können direkt geprüft werden.
