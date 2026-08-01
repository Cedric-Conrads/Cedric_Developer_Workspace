# SELECT: ein oder mehrere Datensätze

## Was ist das?

Eine SELECT-Abfrage kann genau einen erwarteten Datensatz oder eine Liste
von Datensätzen liefern. Die Ergebnisverarbeitung richtet sich danach.

## Warum brauche ich das?

Die Bearbeitungsseite benötigt genau einen Artikel; der Lagerbestand
benötigt alle passenden Artikel. Unterschiedliche Erwartungen brauchen
unterschiedliche Kontrollen.

## Syntax

```php
// Ein Datensatz
$article = $result->fetch_assoc();

// Mehrere Datensätze
while ($article = $result->fetch_assoc()) {
    // jeden Artikel verarbeiten
}
```

## Erklärung

Bei einer eindeutigen `WHERE`-Bedingung wird einmal `fetch_assoc()`
aufgerufen. Das Ergebnis kann `null` sein, wenn nichts gefunden wurde.

Bei einer Liste holt die Schleife nacheinander jede Zeile. Die Schleife
endet, wenn keine weitere Zeile vorhanden ist. Eine leere Liste ist kein
technischer Datenbankfehler, sondern ein Anwendungszustand.

## Beispiel

```php
$stmt = $connection->prepare(
    "SELECT * FROM artikel WHERE artikelnummer = ?"
);
$stmt->bind_param("i", $articleNumber);
$stmt->execute();
$article = $stmt->get_result()->fetch_assoc();

if ($article === null) {
    http_response_code(404);
    exit("Artikel nicht gefunden.");
}
```

## Typische Fehler

- Bei einem erwarteten Einzelwert wird ungeprüft eine Schleife verwendet.
- `null` wird nicht als „nicht gefunden“ behandelt.
- Eine Liste wird nur einmal gefetcht und zeigt deshalb nur den ersten Datensatz.
- `WHERE` nutzt keine eindeutige Spalte, obwohl genau eine Zeile erwartet wird.

## Merksatz

**Ein Artikel: einmal fetchen. Eine Liste: in der Schleife fetchen.**

## Verwandte Themen

- [PHP und HTML-Tabellen](06_PHP_und_HTML_Tabellen.md)
- [SELECT mit Prepared Statements](21_SELECT_mit_Prepared_Statements.md)
- [Get Result](../05_SQL/06_Get_Result.md)

## Prüfungswissen

Kardinalität, Leerergebnis, eindeutige Schlüssel und Schleifenlogik sind
typische Prüfungs- und Code-Review-Themen.
