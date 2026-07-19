# Platzhalter (?)

Die Platzhalter `?` gehören nicht nur zu INSERT.

Sie gehören zu Prepared Statements.

Sie können in allen SQL-Befehlen verwendet werden.

Beispiele:

INSERT

VALUES (?, ?, ?, ?)

---

SELECT

WHERE artikelnummer = ?

---

UPDATE

SET name = ?
WHERE artikelnummer = ?

---

DELETE

WHERE artikelnummer = ?

Die Platzhalter werden später mit `bind_param()` durch echte Werte ersetzt.