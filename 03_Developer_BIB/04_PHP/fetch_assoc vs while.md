🧠 fetch_assoc() vs. while
fetch_assoc()

Wenn ich genau einen Datensatz erwarte.

Beispiel:

SELECT *
FROM filme
WHERE id = ?

Die ID ist eindeutig.

➡️ Deshalb reicht:

$row = $result->fetch_assoc();
while

Wenn ich mehrere Datensätze erwarten kann.

Beispiel:

SELECT *
FROM filme
WHERE genre LIKE '%Action%'

Das Ergebnis könnte sein:

John Wick
Matrix
Die Hard
Mad Max

➡️ Deshalb brauche ich:

while ($row = $result->fetch_assoc()) {

damit jeder Datensatz einzeln durchlaufen wird.


kurz gesagt: Ein Datensatz = fetch_assoc()
Mehrere Datensätze = while