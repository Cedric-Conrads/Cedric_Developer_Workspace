# PHP – Workflow

## Formular speichern
```text
HTML-Formular
↓
POST
↓
$_POST
↓
Daten prüfen
↓
Datenbankverbindung
↓
prepare
↓
bind_param
↓
execute
↓
Weiterleitung
```

## Daten anzeigen
```text
SELECT
↓
execute
↓
get_result
↓
while
↓
fetch_assoc
↓
$row
↓
HTML-Ausgabe
```
