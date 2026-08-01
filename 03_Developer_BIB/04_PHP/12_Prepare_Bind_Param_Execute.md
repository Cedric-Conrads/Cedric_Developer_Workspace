# prepare(), bind_param() und execute()

## Was ist das?

Diese drei MySQLi-Schritte bereiten eine SQL-Struktur vor, binden PHP-Werte
an Platzhalter und führen das Statement aus.

## Warum brauche ich das?

Das Verfahren ist sicherer und klarer als das Zusammenbauen von SQL per
Stringverkettung und kann mehrfach mit unterschiedlichen Werten ausgeführt
werden.

## Syntax

```php
$stmt = $connection->prepare(
    "INSERT INTO artikel (artikelnummer, name, bestand, lagerort)
     VALUES (?, ?, ?, ?)"
);
$stmt->bind_param(
    "isis",
    $articleNumber,
    $name,
    $stock,
    $location
);
$stmt->execute();
```

## Erklärung

1. `prepare()` prüft und kompiliert die SQL-Struktur mit Platzhaltern.
2. `bind_param()` verbindet Variablen nach Position und Typ.
3. `execute()` führt die Abfrage mit den aktuellen Variablenwerten aus.
4. Nur bei Ergebnisabfragen folgt beispielsweise `get_result()`.

Bei mehreren Ausführungen können gebundene Variablen neue Werte erhalten,
bevor `execute()` erneut aufgerufen wird.

## Beispiel

```php
$stmt = $connection->prepare(
    "UPDATE artikel SET bestand = ? WHERE artikelnummer = ?"
);
$stmt->bind_param("ii", $stock, $articleNumber);
$stmt->execute();

if ($stmt->affected_rows > 1) {
    throw new RuntimeException("Mehr als ein Datensatz verändert.");
}
```

## Typische Fehler

- `execute()` wird vor `bind_param()` aufgerufen, obwohl Platzhalter existieren.
- Typstring und Variablenanzahl stimmen nicht.
- SQL-Fehler werden nicht behandelt.
- Bei `UPDATE` wird `get_result()` erwartet.
- Sicherheit wird angenommen, obwohl dynamische Spaltennamen ungeprüft eingebaut werden.

## Merksatz

**prepare = Struktur, bind = Werte, execute = ausführen.**

## Verwandte Themen

- [Prepared-Statement-Reihenfolge](13_Prepared_Statement_Reihenfolge.md)
- [Bind Param](14_Bind_Param.md)
- [SELECT mit Prepared Statements](21_SELECT_mit_Prepared_Statements.md)

## Prüfungswissen

Den Ablauf und die Sicherheitswirkung solltest du als Code, Text und
Ablaufdiagramm erklären können.
