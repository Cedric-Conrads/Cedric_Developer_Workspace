# PHP – Fehler und Lösungen

## Undefined array key
Die Seite wurde ohne passende POST-Daten geöffnet oder der `name`-Schlüssel stimmt nicht.

## Table does not exist
Tabellenname auf Tippfehler prüfen.

## Headers already sent
Vor `header()` wurde bereits etwas ausgegeben.

## Not Found bei XAMPP
- Liegt die Datei wirklich in `htdocs`?
- Stimmt der Ordnername in der URL exakt?
- Stimmt der Dateiname?
- Versteckte `.txt`-Endung prüfen.

## Session funktioniert nicht
`session_start()` muss vor der Ausgabe stehen.
