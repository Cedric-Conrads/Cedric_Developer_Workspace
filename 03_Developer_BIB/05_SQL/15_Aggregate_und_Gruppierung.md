# Aggregatfunktionen und Gruppierung

## Was ist das?

Aggregatfunktionen verdichten mehrere Zeilen zu Kennzahlen. `GROUP BY`
bildet dafür Gruppen; `HAVING` filtert Gruppen.

## Warum brauche ich das?

Berichte benötigen Summen, Durchschnittswerte, Minimal-/Maximalwerte und
Anzahlen.

## Syntax

```sql
SELECT lagerort, COUNT(*) AS artikelanzahl, SUM(bestand) AS gesamtbestand
FROM artikel
GROUP BY lagerort
HAVING SUM(bestand) > 0
ORDER BY gesamtbestand DESC;
```

## Erklärung

- `COUNT(*)` zählt Zeilen.
- `COUNT(spalte)` zählt nur nicht-NULL-Werte.
- `SUM`, `AVG`, `MIN` und `MAX` berechnen Kennzahlen.
- `WHERE` filtert Zeilen vor der Gruppierung.
- `HAVING` filtert Gruppen nach der Aggregation.

Nicht aggregierte SELECT-Spalten müssen logisch zur Gruppierung passen.

## Beispiel

```sql
SELECT
    CASE WHEN bestand = 0 THEN 'leer' ELSE 'vorhanden' END AS status,
    COUNT(*) AS anzahl
FROM artikel
GROUP BY status;
```

## Typische Fehler

- Aggregatbedingung steht fälschlich in `WHERE`.
- `COUNT(spalte)` wird trotz `NULL` wie `COUNT(*)` interpretiert.
- Nicht gruppierte Spalten werden beliebig ausgewählt.
- Alias und tatsächliche Bedeutung der Kennzahl passen nicht.

## Merksatz

**WHERE filtert Zeilen, HAVING filtert Gruppen.**

## Verwandte Themen

- [JOINs](14_JOINs.md)
- [Wichtige SQL-Befehle](02_Wichtige_Befehle.md)
- [Normalisierung und Indizes](16_Normalisierung_und_Indizes.md)

## Prüfungswissen

Aggregatfunktionen, Gruppierung und WHERE/HAVING-Unterschied werden häufig
abgefragt.
