# SQL JOINs

## Was ist das?

JOINs verknüpfen Zeilen aus mehreren Tabellen anhand einer Beziehung.

## Warum brauche ich das?

Normalisierte Daten liegen in mehreren Tabellen. Eine Anwendung muss sie
für Berichte oder Ansichten wieder sinnvoll zusammenführen.

## Syntax

```sql
SELECT a.name, l.bezeichnung AS lagerort
FROM artikel AS a
INNER JOIN lagerort AS l
    ON l.id = a.lagerort_id;
```

## Erklärung

- `INNER JOIN` liefert nur passende Zeilen beider Seiten.
- `LEFT JOIN` liefert alle linken Zeilen und passende rechte Werte; fehlende
  rechte Werte werden `NULL`.
- `ON` beschreibt die Verknüpfungsbedingung.
- Aliase verkürzen Namen und lösen Mehrdeutigkeiten.

Ein JOIN kann mehr Zeilen erzeugen als die Ausgangstabelle, wenn die
Beziehung eins-zu-viele ist.

## Beispiel

```sql
SELECT a.name, b.menge
FROM artikel AS a
LEFT JOIN bestandsbewegung AS b
    ON b.artikelnummer = a.artikelnummer
ORDER BY a.name, b.zeitpunkt DESC;
```

## Typische Fehler

- JOIN-Bedingung fehlt und erzeugt ein kartesisches Produkt.
- `WHERE` auf einer rechten LEFT-JOIN-Spalte macht die Wirkung unbeabsichtigt
  ähnlich einem INNER JOIN.
- Gleichnamige Spalten werden nicht qualifiziert.
- Ergebnisduplikate werden ohne Verständnis mit `DISTINCT` verdeckt.

## Merksatz

**JOIN verbindet Tabellen; `ON` erklärt die Beziehung.**

## Verwandte Themen

- [SQL-Grundlagen](01_Grundlagen.md)
- [Aggregatfunktionen](15_Aggregate_und_Gruppierung.md)
- [Normalisierung und Indizes](16_Normalisierung_und_Indizes.md)

## Prüfungswissen

JOIN-Arten, Kardinalitäten und Ergebniszeilenzahl sind häufige
Prüfungsinhalte.
