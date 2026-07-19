## get_result()

get_result() holt das Ergebnis der SQL-Abfrage aus der Datenbank.

Es werden nicht alle Daten der Datenbank zurückgegeben.

Sondern nur die Datensätze, die durch die SQL-Abfrage gefunden wurden.

Beispiel:

SELECT * FROM artikel
WHERE artikelnummer = ?

↓

get_result()

↓

Ergebnis:

Artikelnummer: 1001
Name: Hammer
Bestand: 20