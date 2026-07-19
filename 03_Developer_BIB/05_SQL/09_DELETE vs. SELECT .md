🔥 DELETE vs. SELECT (*)
SELECT
SELECT *
FROM artikel;
Bedeutung

* bedeutet: Zeige alle Spalten des Datensatzes an.

DELETE
DELETE FROM artikel
WHERE artikelnummer = ?;
Bedeutung

DELETE löscht immer den gesamten Datensatz.

Deshalb braucht DELETE kein *.

🧠 Warum?

Bei SELECT muss SQL wissen:

Welche Daten soll ich anzeigen?

Antwort:

*
= alle Spalten

Bei DELETE weiß SQL bereits:

Ich soll den Datensatz löschen.

Es gibt nichts auszuwählen.

Darum gibt es:

DELETE *

❌ nicht.

💡 Merksatz

SELECT braucht *, um Daten auszuwählen.

DELETE braucht kein *, weil immer der komplette Datensatz gelöscht wird.

⚠️ Wichtig!
DELETE FROM artikel;

💀 Löscht ALLE Datensätze, weil kein WHERE vorhanden ist.

🛡️ Goldene Regel

DELETE ohne WHERE ist so gefährlich wie UPDATE ohne WHERE.