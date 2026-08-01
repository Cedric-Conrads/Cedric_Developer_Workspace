# SQL – Wichtige Befehle

## Was ist das?

Die vier zentralen Datenoperationen sind `INSERT`, `SELECT`, `UPDATE` und
`DELETE`. Ergänzt werden sie durch Filterung, Sortierung, Begrenzung und
Verknüpfung.

## Warum brauche ich das?

Fast jede datenbankgestützte Anwendung bildet ihre Anwendungsfälle auf
diese Befehle ab.

## Syntax

```sql
INSERT INTO artikel (artikelnummer, name, bestand, lagerort)
VALUES (?, ?, ?, ?);

SELECT artikelnummer, name, bestand, lagerort
FROM artikel
WHERE lagerort = ?
ORDER BY name ASC;

UPDATE artikel
SET bestand = ?
WHERE artikelnummer = ?;

DELETE FROM artikel
WHERE artikelnummer = ?;
```

## Erklärung

`WHERE` filtert Zeilen vor der Ausgabe oder Änderung. `ORDER BY` sortiert
das Ergebnis. `LIMIT` beschränkt die Zeilenzahl. Bei produktivem Code
sollten nur benötigte Spalten ausgewählt und externe Werte als Parameter
gebunden werden.

Ausführungsreihenfolge vereinfacht:
`FROM/JOIN → WHERE → GROUP BY → HAVING → SELECT → ORDER BY → LIMIT`.
Die geschriebene Reihenfolge unterscheidet sich davon.

## Beispiel

```sql
SELECT name, bestand
FROM artikel
WHERE bestand BETWEEN 1 AND 20
ORDER BY bestand DESC, name ASC
LIMIT 10;
```

## Typische Fehler

- `UPDATE` oder `DELETE` ohne beabsichtigtes `WHERE`.
- Strings werden in dynamischem SQL falsch oder unsicher verkettet.
- `NULL` wird mit `= NULL` statt `IS NULL` verglichen.
- `SELECT *` wird dauerhaft genutzt, obwohl wenige Spalten genügen.
- Sortierreihenfolge wird ohne `ORDER BY` als garantiert angenommen.

## Merksatz

**INSERT legt an, SELECT liest, UPDATE ändert, DELETE entfernt.**

## Verwandte Themen

- [CRUD](10_CRUD.md)
- [SELECT und DELETE](09_DELETE_und_SELECT.md)
- [Prepared Statements](07_Prepared_Statements_Ablauf.md)

## Prüfungswissen

SQL lesen, vervollständigen und auf Sicherheitsfolgen prüfen ist
Standardbestandteil von Prüfungsaufgaben.
