# UPDATE

```sql
UPDATE artikel
SET name = ?, bestand = ?, lagerort = ?
WHERE artikelnummer = ?;
```

UPDATE verändert bestehende Daten. Ohne WHERE werden alle Datensätze geändert.
