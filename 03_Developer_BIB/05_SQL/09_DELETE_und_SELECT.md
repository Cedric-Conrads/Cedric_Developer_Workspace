# DELETE und SELECT

## Was ist das?

`SELECT` wählt Spalten zur Anzeige aus; `DELETE` entfernt vollständige
Zeilen. Deshalb gibt es bei korrektem SQL kein `DELETE *`.

## Warum brauche ich das?

Das Verständnis verhindert Syntaxfehler und gefährliche Löschabfragen.

## Syntax

```sql
SELECT *
FROM artikel
WHERE artikelnummer = ?;

DELETE FROM artikel
WHERE artikelnummer = ?;
```

## Erklärung

Bei `SELECT *` bedeutet `*`: alle Spalten der passenden Zeilen auswählen.
`DELETE` muss keine Spalten auswählen, weil immer die komplette Zeile
entfernt wird. Die `WHERE`-Bedingung bestimmt in beiden Fällen die
betroffenen Zeilen.

Ohne `WHERE` liefert SELECT alle Zeilen – DELETE entfernt alle Zeilen.

## Beispiel

```sql
-- Erst prüfen:
SELECT artikelnummer, name
FROM artikel
WHERE artikelnummer = 1001;

-- Danach gezielt löschen:
DELETE FROM artikel
WHERE artikelnummer = 1001;
```

## Typische Fehler

- `DELETE * FROM artikel` wird geschrieben.
- `WHERE` fehlt.
- Löschung wird ohne Transaktion, Backup oder Bestätigung durchgeführt.
- Fremdschlüsselabhängigkeiten werden ignoriert.
- Anwendung meldet Erfolg, ohne betroffene Zeilen zu prüfen.

## Merksatz

**SELECT braucht eine Spaltenauswahl; DELETE löscht immer ganze Zeilen.**

## Verwandte Themen

- [Wichtige SQL-Befehle](02_Wichtige_Befehle.md)
- [UPDATE und DELETE in PHP](../04_PHP/07_UPDATE_und_DELETE.md)
- [CRUD](10_CRUD.md)

## Prüfungswissen

Löschwirkung, `WHERE`, referenzielle Integrität und sichere
Änderungsprozesse sind prüfungsrelevant.
