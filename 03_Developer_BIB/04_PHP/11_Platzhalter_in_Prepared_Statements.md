# Platzhalter in Prepared Statements

## Was ist das?

Ein `?` ist in MySQLi ein Positionsplatzhalter für einen einzelnen Wert in
einem vorbereiteten SQL-Statement.

## Warum brauche ich das?

Platzhalter trennen SQL-Struktur von Daten. Dadurch werden Werte korrekt
übertragen und SQL-Injection über diese Werte verhindert.

## Syntax

```sql
INSERT INTO artikel (name, bestand) VALUES (?, ?);
SELECT * FROM artikel WHERE artikelnummer = ?;
UPDATE artikel SET bestand = ? WHERE artikelnummer = ?;
DELETE FROM artikel WHERE artikelnummer = ?;
```

## Erklärung

Jeder Platzhalter entspricht genau einem gebundenen Wert. Reihenfolge und
Datentypen in `bind_param()` müssen passen. Platzhalter ersetzen Werte,
aber normalerweise keine Tabellen-, Spaltennamen oder SQL-Schlüsselwörter.

Für `LIKE` wird die Wildcard Teil des Wertes:

```php
$search = "%" . $search . "%";
$stmt->bind_param("s", $search);
```

## Beispiel

```php
$stmt = $connection->prepare(
    "SELECT * FROM artikel WHERE name LIKE ? AND bestand >= ?"
);
$search = "%hammer%";
$minimumStock = 1;
$stmt->bind_param("si", $search, $minimumStock);
```

## Typische Fehler

- Anzahl der Werte und Platzhalter stimmt nicht.
- Variablen werden in anderer Reihenfolge gebunden.
- Ein Spaltenname soll als `?` gebunden werden.
- Anführungszeichen werden als `'?'` um den Platzhalter gesetzt.
- `%?%` wird statt einer gebundenen Variable mit Wildcards verwendet.

## Merksatz

**Ein Fragezeichen steht für genau einen Wert – nicht für SQL-Struktur.**

## Verwandte Themen

- [Prepare, Bind Param, Execute](12_Prepare_Bind_Param_Execute.md)
- [Bind Param](14_Bind_Param.md)
- [SQL-Platzhalter](../05_SQL/13_Platzhalter.md)

## Prüfungswissen

Prepared Statements, SQL-Injection-Schutz, Typbindung und Grenzen von
Platzhaltern gehören zum Standardwissen.
