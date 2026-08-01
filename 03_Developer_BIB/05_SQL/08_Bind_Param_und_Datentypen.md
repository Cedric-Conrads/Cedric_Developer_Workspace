# bind_param() – Reihenfolge und Datentypen

## Was ist das?

`bind_param()` ist die MySQLi-Schnittstelle, die PHP-Variablen und Typen
positionsbezogen den SQL-Platzhaltern zuordnet.

## Warum brauche ich das?

Falsche Reihenfolge kann syntaktisch funktionieren und trotzdem falsche
Werte speichern. Die sichtbare Zuordnung ist daher ein wichtiger
Kontrollschritt.

## Syntax

```sql
UPDATE artikel
SET name = ?, bestand = ?, lagerort = ?
WHERE artikelnummer = ?;
```

```php
$stmt->bind_param("sisi", $name, $stock, $location, $articleNumber);
```

## Erklärung

Zuordnung:

| Position | SQL | Typ | PHP |
| --- | --- | --- | --- |
| 1 | `name = ?` | `s` | `$name` |
| 2 | `bestand = ?` | `i` | `$stock` |
| 3 | `lagerort = ?` | `s` | `$location` |
| 4 | `artikelnummer = ?` | `i` | `$articleNumber` |

Eine fachlich numerische Eingabe sollte vor dem Binden validiert werden.

## Beispiel

```php
if (!is_int($stock) || $stock < 0) {
    throw new InvalidArgumentException("Ungültiger Bestand.");
}

$stmt->bind_param("sisi", $name, $stock, $location, $articleNumber);
```

## Typische Fehler

- Typstring lautet `"sisi"`, Variablen stehen aber in anderer Reihenfolge.
- Artikelnummer wird als zufälliger Name identifiziert.
- Eingabestring wird ohne Validierung als Integer gebunden.
- `d` und `i` werden bei Geldbeträgen unüberlegt verwendet; für Geld sind
  feste Dezimalmodelle wichtig.

## Merksatz

**Zähle die Fragezeichen und ordne jedem Position, Typ und Variable zu.**

## Verwandte Themen

- [PHP Bind Param](../04_PHP/14_Bind_Param.md)
- [SQL-Platzhalter](13_Platzhalter.md)
- [Prepared-Statement-Ablauf](07_Prepared_Statements_Ablauf.md)

## Prüfungswissen

Parameterzuordnung und Datentypen sind klassische Codeverständnisaufgaben.
