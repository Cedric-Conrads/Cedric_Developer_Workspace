# get_result() und Ergebnismengen

## Was ist das?

`get_result()` ist eine MySQLi-Methode in PHP. Sie liefert nach einem
ausgeführten SELECT-Statement eine Ergebnismenge.

## Warum brauche ich das?

Mit der Ergebnismenge können Zeilenzahl und einzelne Datensätze verarbeitet
werden. Sie enthält nur die von der Abfrage ausgewählten Treffer.

## Syntax

```php
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo htmlspecialchars($row["name"]);
}
```

## Erklärung

`get_result()` gibt nicht „die ganze Datenbank“ zurück. Es liefert die
Spalten und Zeilen, die `SELECT`, `WHERE`, `JOIN`, `GROUP BY` und weitere
Klauseln bestimmen. `num_rows` zählt Treffer; `fetch_assoc()` holt eine
Zeile mit Spaltennamen als Schlüssel.

Bei manchen PHP-Installationen hängt `get_result()` vom mysqlnd-Treiber ab.
Als Alternative existiert `bind_result()`.

## Beispiel

```php
$result = $stmt->get_result();
$article = $result->fetch_assoc();

if ($article === null) {
    http_response_code(404);
    exit("Artikel nicht gefunden.");
}
```

## Typische Fehler

- `get_result()` wird bei `INSERT`, `UPDATE` oder `DELETE` verwendet.
- Ergebnis wird vor `execute()` angefordert.
- `fetch_assoc()` wird nicht auf `null` geprüft.
- Eine Liste wird nur einmal gefetcht.
- SQL-Spaltenalias und Array-Schlüssel stimmen nicht überein.

## Merksatz

**SELECT erzeugt eine Ergebnismenge; `fetch_assoc()` holt daraus eine Zeile.**

## Verwandte Themen

- [SELECT ein oder mehrere Datensätze](../04_PHP/17_SELECT_ein_oder_mehrere_Datensaetze.md)
- [PHP und HTML-Tabellen](../04_PHP/06_PHP_und_HTML_Tabellen.md)
- [Prepared-Statement-Ablauf](07_Prepared_Statements_Ablauf.md)

## Prüfungswissen

Unterscheide Statement, Ergebnismenge, Zeile und betroffene Zeilen.
