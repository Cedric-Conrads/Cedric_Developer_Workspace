# bind_param()

## Was ist das?

`bind_param()` bindet PHP-Variablen positionsbezogen an die `?`-Platzhalter
eines MySQLi-Statements.

## Warum brauche ich das?

Die Bindung sorgt für eine getrennte Übertragung von SQL-Struktur und
Werten sowie für die Typinformation der Parameter.

## Syntax

```php
$stmt->bind_param(
    "sisi",
    $name,
    $stock,
    $location,
    $articleNumber
);
```

| Zeichen | Typ |
| --- | --- |
| `s` | String |
| `i` | Integer |
| `d` | Double/Gleitkommazahl ( Dezimalzahl) |
| `b` | Binärdaten |

## Erklärung

Das erste Zeichen gehört zum ersten Platzhalter, das zweite zum zweiten und
so weiter. Bei
`SET name = ?, bestand = ?, lagerort = ? WHERE artikelnummer = ?`
lautet die passende Reihenfolge also Name, Bestand, Lagerort,
Artikelnummer.

MySQLi bindet Variablen. Werte sollten deshalb vor der Bindung vollständig
validiert und normalisiert sein.

## Beispiel

```php
$articleNumber = 1001;
$name = "Hammer";
$stock = 20;
$location = "A1";

$stmt->bind_param(
    "isis",
    $articleNumber,
    $name,
    $stock,
    $location
);
```

## Typische Fehler

- Typstring hat eine andere Länge als die Variablenliste.
- Reihenfolge passt nicht zu den Platzhaltern.
- Eine Zahl bleibt unvalidierter Eingabestring.
- Ausdruck oder Funktionsaufruf wird statt einer Variable gebunden.
- `bind_param()` wird mit PDO verwechselt; PDO hat eine andere API.

## Merksatz

**Position, Typ und Variable müssen zu jedem Fragezeichen passen.**

## Verwandte Themen

- [Platzhalter](11_Platzhalter_in_Prepared_Statements.md)
- [Prepared-Statement-Reihenfolge](13_Prepared_Statement_Reihenfolge.md)
- [SQL Bind Param und Datentypen](../05_SQL/08_Bind_Param_und_Datentypen.md)

## Prüfungswissen

Ordne bei Prüfungsaufgaben jeden Platzhalter sichtbar seinem Typ und Wert
zu. Das verhindert die häufigsten Bindungsfehler.
