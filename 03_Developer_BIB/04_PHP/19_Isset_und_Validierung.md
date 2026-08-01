# isset() und Validierung

## Was ist das?

`isset()` prüft, ob eine Variable oder ein Array-Schlüssel existiert und
nicht `null` ist. Es prüft nicht, ob der Inhalt fachlich gültig ist.

## Warum brauche ich das?

Formularwerte können fehlen, leer, im falschen Format oder außerhalb eines
erlaubten Bereichs sein. Diese Fälle müssen getrennt behandelt werden.

## Syntax

```php
if (!isset($_POST["name"])) {
    exit("Feld wurde nicht übertragen.");
}

$name = trim((string) $_POST["name"]);

if ($name === "") {
    exit("Name darf nicht leer sein.");
}
```

## Erklärung

Validierung besteht aus mehreren Ebenen:

1. Existenz: Wurde das Feld übertragen?
2. Typ/Format: Ist es eine ganze Zahl, E-Mail oder erlaubtes Datum?
3. Wertebereich: Ist der Bestand mindestens `0`?
4. Fachregel: Darf dieser Artikel verändert werden?
5. Berechtigung: Darf dieser Benutzer die Aktion ausführen?

Clientseitige HTML- oder JavaScript-Prüfungen verbessern Bedienung, ersetzen
aber niemals die serverseitige Kontrolle.

## Beispiel

```php
$stock = filter_input(INPUT_POST, "bestand", FILTER_VALIDATE_INT);

if ($stock === false || $stock === null || $stock < 0) {
    http_response_code(422);
    exit("Bestand muss eine nicht negative ganze Zahl sein.");
}
```

## Typische Fehler

- `isset()` wird mit „Inhalt ist richtig“ übersetzt.
- `empty()` verwirft gültige Nullwerte.
- Nur HTML `required` prüft die Eingabe.
- Fehlerzustände `false`, `null`, `0` und `""` werden verwechselt.
- Validierung und HTML-Kodierung werden gleichgesetzt.

## Merksatz

**`isset()` fragt: „Ist es da?“ – Validierung fragt: „Ist es erlaubt und
brauchbar?“**

## Verwandte Themen

- [GET und POST](08_GET_und_POST.md)
- [PHP – wichtige Befehle](02_Wichtige_Befehle.md)
- [Security – Grundlagen](../11_Security/01_Grundlagen.md)

## Prüfungswissen

Mehrstufige Validierung, serverseitige Kontrolle, Datentypen und
Fehlerstatus gehören zum Standardwissen.
