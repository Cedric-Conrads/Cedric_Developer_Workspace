# SQL-Platzhalter und Suchwerte

## Was ist das?

In MySQLi ersetzt `?` genau einen gebundenen Wert. SQL-Wildcards gehören
dagegen zum Inhalt eines LIKE-Suchwertes.

## Warum brauche ich das?

Die klare Trennung verhindert unsichere Stringverkettung und fehlerhafte
Suchmuster.

## Syntax

```php
$pattern = "%" . $search . "%";
$stmt = $connection->prepare(
    "SELECT * FROM artikel WHERE name LIKE ?"
);
$stmt->bind_param("s", $pattern);
```

## Erklärung

Der Datenbanktreiber erhält SQL und Parameter getrennt. `?` steht deshalb
für den vollständigen Wert `%Hammer%`, nicht nur für den mittleren Text.
Ein Platzhalter darf nicht als Tabellen- oder Spaltenname dienen.

## Beispiel

```php
// Richtig
$location = "A1";
$stmt = $connection->prepare(
    "SELECT * FROM artikel WHERE lagerort = ?"
);
$stmt->bind_param("s", $location);
```

## Typische Fehler

- Platzhalter wird in `'?'` eingeschlossen.
- `%?%` wird direkt in SQL geschrieben.
- Ein dynamischer Spaltenname wird als Wert gebunden.
- Anzahl oder Reihenfolge der Parameter stimmt nicht.
- Parameterbindung ersetzt nicht die fachliche Validierung.

## Merksatz

**`?` ist ein ganzer Wert; `%` ist ein Zeichen innerhalb eines LIKE-Wertes.**

## Verwandte Themen

- [LIKE](11_LIKE.md)
- [Wildcards](12_Wildcards.md)
- [PHP-Platzhalter](../04_PHP/11_Platzhalter_in_Prepared_Statements.md)

## Prüfungswissen

Platzhaltergrenzen und SQL-Injection-Schutz sind Standard-Prüfungswissen.
