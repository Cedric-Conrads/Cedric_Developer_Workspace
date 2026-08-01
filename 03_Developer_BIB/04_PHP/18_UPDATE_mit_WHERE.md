# UPDATE mit WHERE

## Was ist das?

`UPDATE` verändert Werte bestehender Datensätze. `WHERE` schränkt ein,
welche Zeilen betroffen sind.

## Warum brauche ich das?

Ohne korrekte Einschränkung kann eine einzige Abfrage den gesamten
Tabelleninhalt verändern.

## Syntax

```sql
UPDATE artikel
SET name = ?, bestand = ?, lagerort = ?
WHERE artikelnummer = ?;
```

## Erklärung

Die `SET`-Werte beschreiben den neuen Zustand; die `WHERE`-Bedingung
identifiziert den bisherigen Datensatz. Der Primärschlüssel sollte
normalerweise nicht unkontrolliert geändert werden.

Vor kritischen Änderungen sind Transaktion, Backup und eine vorgelagerte
`SELECT`-Kontrolle sinnvoll.

## Beispiel

```sql
SELECT * FROM artikel WHERE artikelnummer = 1001;

UPDATE artikel
SET bestand = 25
WHERE artikelnummer = 1001;
```
In PHP werden die Werte als Prepared-Statement-Parameter gebunden.

## Typische Fehler

- `WHERE` fehlt oder ist zu allgemein.
- Ein Textname statt Primärschlüssel wird als Identität verwendet.
- `WHERE` prüft den neuen statt den ursprünglichen Schlüssel.
- Wirkung wird nicht mit `affected_rows` kontrolliert.
- Kritische Massenänderung wird ohne Transaktion ausgeführt.

## Merksatz

**UPDATE sagt „was neu wird“; WHERE sagt „welcher Datensatz gemeint ist“.**

## Verwandte Themen

- [UPDATE und DELETE](07_UPDATE_und_DELETE.md)
- [SQL – wichtige Befehle](../05_SQL/02_Wichtige_Befehle.md)
- [CRUD](../05_SQL/10_CRUD.md)

## Prüfungswissen

Gefahren fehlender WHERE-Bedingungen, Primärschlüssel, Transaktionen und
Wirkungskontrolle sind besonders prüfungsrelevant.
