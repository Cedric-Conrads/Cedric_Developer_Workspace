# WHERE

`WHERE` filtert Datensätze.

```sql
SELECT * FROM artikel WHERE lagerort = ?;
```

Bei UPDATE und DELETE ist WHERE die Sicherheitsleine. Ohne WHERE wären alle Zeilen betroffen.
