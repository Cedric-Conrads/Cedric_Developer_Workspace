# fetch_assoc()

`fetch_assoc()` holt genau eine Zeile aus einem SQL-Ergebnis als assoziatives Array.

```php
$row = $result->fetch_assoc();
echo $row["name"];
```

Mit `while` wird Zeile für Zeile gelesen.

**Merksatz:** fetch_assoc() holt eine Zeile; while wiederholt.
