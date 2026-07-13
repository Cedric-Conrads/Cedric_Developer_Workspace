# SQL – Wichtige Befehle

## Daten einfügen
```sql
INSERT INTO artikel (artikelnummer, name, bestand, lagerort)
VALUES (?, ?, ?, ?);
```

## Daten lesen
```sql
SELECT * FROM artikel;
```

## Daten filtern
```sql
SELECT * FROM artikel
WHERE lagerort = "A1";
```

## Daten ändern
```sql
UPDATE artikel
SET bestand = 10
WHERE id = 1;
```

## Daten löschen
```sql
DELETE FROM artikel
WHERE id = 1;
```

## Sortieren
```sql
SELECT * FROM artikel
ORDER BY name ASC;
```
