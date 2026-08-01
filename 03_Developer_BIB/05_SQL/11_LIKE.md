# LIKE – Textmuster suchen

## Was ist das?

`LIKE` vergleicht Text mit einem Muster. Es wird häufig für einfache
Suchfelder verwendet.

## Warum brauche ich das?

Nutzer kennen oft nur einen Teil des Artikelnamens. Mit LIKE lassen sich
Anfang, Ende oder enthaltene Zeichenfolgen suchen.

## Syntax

```sql
SELECT artikelnummer, name
FROM artikel
WHERE name LIKE ?;
```

## Erklärung

`%` steht für beliebig viele Zeichen, `_` für genau ein Zeichen.

- `Ham%` beginnt mit „Ham“.
- `%hammer` endet mit „hammer“.
- `%ham%` enthält „ham“.
- `H_mmer` besitzt genau ein beliebiges Zeichen an der Unterstrichposition.

Groß-/Kleinschreibung hängt von Spaltentyp und Kollation ab. Eine Suche mit
führendem `%` kann vorhandene Indizes oft schlechter nutzen.

## Beispiel

```php
$search = trim((string) ($_GET["suche"] ?? ""));
$pattern = "%" . $search . "%";

$stmt = $connection->prepare(
    "SELECT * FROM artikel WHERE name LIKE ?"
);
$stmt->bind_param("s", $pattern);
```

## Typische Fehler

- `=` wird für eine Teiltextsuche erwartet.
- Wildcards werden als `%?%` um den Platzhalter geschrieben.
- Benutzer-Wildcards werden ungewollt als Sonderzeichen akzeptiert.
- Leerer Suchbegriff erzeugt `%%` und damit alle Zeilen.
- Große Tabellen werden ohne Index-/Suchkonzept vollständig gescannt.

## Merksatz

**`=` sucht Gleichheit; LIKE sucht ein Muster.**

## Verwandte Themen

- [Wildcards](12_Wildcards.md)
- [SQL-Platzhalter](13_Platzhalter.md)
- [SELECT mit Prepared Statements](../04_PHP/21_SELECT_mit_Prepared_Statements.md)

## Prüfungswissen

Muster, Wildcards, Prepared Statements und Auswirkungen auf Performance
sind prüfungsrelevant.
