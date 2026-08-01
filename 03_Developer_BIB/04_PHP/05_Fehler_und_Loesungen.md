# PHP – Fehler und Lösungen

## Was ist das?

PHP-Fehler reichen von Parse Errors über Warnungen bis zu Exceptions und
falscher Fachlogik. Meldung, Datei, Zeile und Anfragekontext führen zur
Ursache.

## Warum brauche ich das?

Das Backend ist für den Benutzer oft unsichtbar. Ohne strukturierte
Fehlersuche erscheinen Datenbank-, Formular- und Weiterleitungsprobleme
gleich.

## Syntax

```text
HTTP-Status/Fehlermeldung → Datei und Zeile → Syntax
→ Request-Daten → Verbindung → SQL/Statement → Rückgabewert
```

## Erklärung

- `Parse error`: meist fehlendes `;`, Anführungszeichen oder Klammer.
- `Undefined array key`: Schlüssel fehlt; `name`, Methode und `??` prüfen.
- `Headers already sent`: vor `header()` wurde bereits ausgegeben.
- `Table doesn't exist`: Datenbank- und Tabellennamen vergleichen.
- `Call to a member function ... on bool`: vorherige Operation ist fehlgeschlagen.
- XAMPP „Not Found“: Datei unter `htdocs`, URL und Endung prüfen.
- Session fehlt: `session_start()` muss vor Nutzung und Ausgabe stehen.

## Beispiel

```php
$name = trim((string) ($_POST["name"] ?? ""));

if ($name === "") {
    http_response_code(422);
    exit("Name fehlt.");
}
```
Das verhindert nicht jede fehlerhafte Eingabe, aber den direkten Zugriff
auf einen möglicherweise nicht vorhandenen Schlüssel.

## Typische Fehler

- Nur die sichtbare Fehlermeldung lesen, aber nicht Datei und Zeile.
- Fehler mit `@` unterdrücken.
- SQL im Browser statt in Datenbankwerkzeugen isoliert testen.
- Zugangsdaten oder vollständige Stacktraces öffentlich anzeigen.
- Nach einer Änderung nicht dieselbe Anfrage erneut reproduzieren.

## Merksatz

**Erste fehlerhafte eigene Zeile finden, Eingaben und Rückgabewerte prüfen.**

## Verwandte Themen

- [HTML – Fehler und Lösungen](../01_HTML/05_Fehler_und_Loesungen.md)
- [SQL – Fehler und Lösungen](../05_SQL/05_Fehler_und_Loesungen.md)
- [Prepared Statements](12_Prepare_Bind_Param_Execute.md)

## Prüfungswissen

Prüfungsaufgaben verlangen Fehleranalyse und geeignete Maßnahmen. Benenne
Fehlerart, Ursache, Auswirkung, Korrektur und einen Test, der die Korrektur
bestätigt.
