bind_param()


Die Reihenfolge der Variablen muss immer der Reihenfolge der ? in der SQL-Abfrage entsprechen.

Beispiel:

UPDATE artikel
SET
    name = ?,          ← 1
    bestand = ?,       ← 2
    lagerort = ?,      ← 3
WHERE artikelnummer=?  ← 4

↓

$stmt->bind_param(
    "sisi",
    $name,             // 1
    $bestand,          // 2
    $lagerort,         // 3
    $artikelnummer     // 4
);