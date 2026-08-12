# Lagerverwaltung

## Beschreibung

Dieses Projekt ist eine Lagerverwaltung, die mit HTML, CSS, PHP und MySQL entwickelt wurde.

Mit der Anwendung können Artikel angelegt, angezeigt, gesucht, bearbeitet und gelöscht werden.

Das Projekt wurde entwickelt, um den grundlegenden Aufbau einer datenbankgestützten Webanwendung sowie die Umsetzung der CRUD-Operationen praktisch zu verstehen.

## Funktionen

- Artikel anlegen
- Alle Artikel anzeigen
- Artikel suchen
- Artikel bearbeiten
- Artikel löschen
- Prüfung auf doppelte Artikelnummern
- Serverseitige Validierung von Eingaben
- Status- und Fehlermeldungen

## Technologien

- HTML
- CSS
- PHP
- MySQL
- SQL

## CRUD

Die Anwendung bildet die vier grundlegenden CRUD-Operationen ab:

- **Create** – neue Artikel anlegen
- **Read** – Artikel anzeigen und suchen
- **Update** – bestehende Artikel bearbeiten
- **Delete** – Artikel löschen

## Datenbankzugriff

Die Verbindung zur MySQL-Datenbank wird zentral über eine `db.php` hergestellt.

Andere PHP-Dateien können diese Verbindung mit `require_once` einbinden. Dadurch muss die Datenbankverbindung nicht in jeder Datei erneut erstellt werden.

## Prepared Statements

Für Datenbankabfragen werden Prepared Statements verwendet.

Dabei werden SQL-Befehl und übergebene Werte voneinander getrennt. Dadurch wird unter anderem das Risiko von SQL-Injection reduziert.

Verwendeter Ablauf:

1. `prepare()`
2. `bind_param()`
3. `execute()`

## Serverseitige Validierung

Eingaben werden auf dem Server geprüft, bevor Daten gespeichert oder verändert werden.

Dabei wird unter anderem geprüft:

- Name darf nicht leer sein
- Lagerort darf nicht leer sein
- Bestand darf nicht kleiner als `0` sein
- Ein Bestand von `0` ist erlaubt
- Ungültige Eingaben werden nicht in der Datenbank gespeichert

## Doppelte Artikelnummern

Artikelnummern sollen eindeutig sein.

Durch eine entsprechende Prüfung bzw. Einschränkung in der Datenbank wird verhindert, dass dieselbe Artikelnummer mehrfach gespeichert wird.

## Sichere HTML-Ausgabe

Bei der Ausgabe von Daten wird `htmlspecialchars()` verwendet.

Dadurch werden bestimmte Sonderzeichen umgewandelt, sodass eingegebener HTML-Code bei der Ausgabe nicht direkt als HTML interpretiert wird.

## Fehlerbehandlung

Für bestimmte Datenbankoperationen wird Fehlerbehandlung mit `try` und `catch` verwendet.

Dadurch können auftretende Fehler kontrolliert behandelt werden, anstatt die Anwendung unkontrolliert abbrechen zu lassen.

## Datenübertragung

Die Anwendung verwendet unter anderem:

- `$_POST` für Daten aus Formularen
- `$_GET` für Informationen aus der URL, beispielsweise Suchanfragen oder Statusmeldungen

## Daten auslesen

Datenbankergebnisse werden unter anderem mit `fetch_assoc()` ausgelesen.

Bei mehreren Datensätzen kann dies innerhalb einer `while`-Schleife erfolgen.

Mit `num_rows` kann geprüft werden, wie viele Datensätze eine Abfrage zurückgegeben hat.

## Projektstruktur

Der eigentliche Anwendungscode befindet sich im Ordner `src`.

Wichtige Dateien sind unter anderem:

- `index.php` – Eingabe neuer Artikel
- `save_article.php` – Verarbeitung und Speicherung neuer Artikel
- `lagerbestand.php` – Anzeige und Suche des Lagerbestands
- `bearbeiten.php` – Bearbeitung vorhandener Artikel
- `delete_article.php` – Löschen von Artikeln
- `db.php` – zentrale Datenbankverbindung
- `style.css` – grundlegende Darstellung der Anwendung

## Was habe ich gelernt?

Durch dieses Projekt habe ich unter anderem gelernt:

- CRUD-Anwendungen grundlegend aufzubauen
- HTML-Formulare mit PHP zu verarbeiten
- PHP mit einer MySQL-Datenbank zu verbinden
- SQL-Abfragen mit `SELECT`, `INSERT`, `UPDATE` und `DELETE` einzusetzen
- Prepared Statements mit `prepare()`, `bind_param()` und `execute()` zu verwenden
- Daten mit `fetch_assoc()` auszulesen
- Datenbankergebnisse mit `num_rows` zu prüfen
- Eingaben serverseitig zu validieren
- Ausgaben mit `htmlspecialchars()` sicherer darzustellen
- Datenbankverbindungen zentral auszulagern
- PHP-Dateien mit `require_once` einzubinden
- Fehler mit `try` und `catch` zu behandeln
- den vollständigen Ablauf zwischen Browser, PHP, SQL und Datenbank besser zu verstehen

## Nächste Schritte

Das Projekt dient weiterhin als Lernprojekt und kann zukünftig erweitert werden.

Mögliche Erweiterungen:

- Benutzeranmeldung und Rechteverwaltung
- Kategorien für Artikel
- Erweiterte Lagerplatzverwaltung
- Verbesserung der Benutzeroberfläche
- Weitere Validierungen
- Ausbau der Fehlerbehandlung
