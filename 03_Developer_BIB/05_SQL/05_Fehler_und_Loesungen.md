# SQL – Fehler und Lösungen

## Was ist das?

SQL-Fehler können Syntax, Schema, Datentypen, Beziehungen, Rechte oder
falsche fachliche Bedingungen betreffen.

## Warum brauche ich das?

Eine erfolgreich ausgeführte Abfrage kann trotzdem fachlich falsch sein.
Technische und logische Kontrolle sind deshalb getrennt nötig.

## Syntax

```text
Meldung lesen → DB/Tabelle/Spalte prüfen → Abfrage isolieren
→ Parameter und Typen prüfen → SELECT-Vorschau → Wirkung kontrollieren
```

## Erklärung

- „Table doesn't exist“: aktive Datenbank und Schreibweise prüfen.
- „Unknown column“: Schema, Alias und Anführungszeichen prüfen.
- Leeres Ergebnis: `WHERE`, Datentyp, Großschreibung und vorhandene Daten prüfen.
- Foreign-Key-Fehler: referenzierte Zeile oder Löschregel prüfen.
- Duplicate Entry: Primär- oder Unique-Schlüssel ist bereits vorhanden.
- Zu viele Änderungen: `WHERE` fehlte oder war zu allgemein.

## Beispiel

```sql
-- Vor UPDATE prüfen:
SELECT artikelnummer, name, bestand
FROM artikel
WHERE lagerort = 'A1';
```
Erst wenn diese Auswahl korrekt ist, wird dieselbe Bedingung für die
beabsichtigte Änderung verwendet.

## Typische Fehler

- Fehlermeldung wird abgeschnitten oder nicht protokolliert.
- Produktivdaten werden als Testdaten verwendet.
- Abfrage wird durch Probieren verändert, ohne Zwischenergebnis zu prüfen.
- `NULL`, leerer String und `0` werden gleichgesetzt.
- Datenintegritätsfehler werden durch Abschalten von Constraints „gelöst“.

## Merksatz

**SQL kann syntaktisch richtig und fachlich trotzdem falsch sein.**

## Verwandte Themen

- [SQL-Workflow](03_Workflow.md)
- [PHP – Fehler und Lösungen](../04_PHP/05_Fehler_und_Loesungen.md)
- [UPDATE mit WHERE](../04_PHP/18_UPDATE_mit_WHERE.md)

## Prüfungswissen

Bei Prüfungsfehlern: Ursache, betroffene Daten, sichere Korrektur und
Kontrollabfrage nennen.
