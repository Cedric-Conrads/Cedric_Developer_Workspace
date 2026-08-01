# execute()

`execute()` führt das vorbereitete Statement aus.

```php
$stmt->execute();
```

Bei `SELECT` folgt danach `get_result()`. Bei `INSERT`, `UPDATE` und `DELETE` wurde die Änderung nach erfolgreichem Ausführen durchgeführt.

**Merksatz:** prepare plant, bind_param verbindet, execute führt aus.
