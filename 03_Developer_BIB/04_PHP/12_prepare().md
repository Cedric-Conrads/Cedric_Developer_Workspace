## prepare()

prepare() bereitet die SQL-Anweisung für die Datenbank vor.

Dabei steht bereits fest:

- welche Tabelle verwendet wird
- welche Spalten verwendet werden
- wo sich die Platzhalter (?) befinden

Die eigentlichen Werte werden später ergänzt.

---

## bind_param()

bind bedeutet verbinden.

bind_param() verbindet die PHP-Variablen mit den Platzhaltern (?).

Beispiel:

? → $artikelnummer

? → $name

? → $bestand

? → $lagerort

---

## execute()

execute() führt die vorbereitete SQL-Anweisung aus.