# Lagerverwaltung




## Beschreibung

Dieses Projekt ist eine webbasierte Lagerverwaltung, die mit HTML, CSS, PHP und MySQL entwickelt wurde.

Mit der Anwendung können Artikel angelegt, angezeigt, bearbeitet und gelöscht werden. Zusätzlich wurde eine Suchfunktion implementiert, mit der Artikel anhand ihrer Artikelnummer oder ihres Namens gefunden werden können.

Die Anwendung enthält serverseitige Validierungen, Fehlerbehandlung und Maßnahmen zur sicheren Verarbeitung und Ausgabe von Daten.



## Validierung und Sicherheit
- Prepared Statements:  Schützen Datenbankabfragen vor SQL-Injection, indem SQL-Befehle und übergebene Werte getrennt verarbeitet werden.

- UNIQUE:  Verhindert, dass dieselbe Artikelnummer mehrfach in der Datenbank gespeichert werden kann.

- Serverseitige Validierung: Prüft Eingaben vor dem Speichern oder Aktualisieren. Pflichtfelder dürfen nicht leer sein und der Lagerbestand darf nicht negativ werden. Ein Bestand von `0` ist erlaubt.Prüft Eingaben vor dem Speichern oder Aktualisieren. Pflichtfelder dürfen nicht leer sein und der Lagerbestand darf nicht negativ werden. Ein Bestand von `0` ist erlaubt.
- htmlspecialchars(): Sorgt dafür, dass eingegebener HTML-Code bei der Ausgabe als Text dargestellt und nicht vom Browser als HTML interpretiert wird.


## Funktionen
- Artikel anlegen
- Alle Artikel anzeigen
- Artikel suchen
- Artikel bearbeiten
- Artikel löschen

## Technologien

- HTML
- PHP
- MySQL
- SQL

## Was habe ich gelernt?

- CRUD-Anwendungen entwickeln (Create, Read, Update, Delete)
- SQL-Abfragen erstellen (`SELECT`, `INSERT`, `UPDATE`, `DELETE`)
- HTML-Formulare mit PHP und MySQL verbinden
- Daten mit `$_POST` und `$_GET` zwischen Seiten übertragen
- Mit Prepared Statements sicher auf Datenbanken zugreifen
- Den Ablauf von `prepare()`, `bind_param()` und `execute()` anwenden
- Daten mit `fetch_assoc()` aus der Datenbank auslesen
- Suchergebnisse mit `while` dynamisch ausgeben
- Eine zentrale Datenbankverbindung mit `db.php` und `require_once` verwenden
- Benutzereingaben serverseitig validieren
- Fachliche Regeln umsetzen, z. B. einen Lagerbestand von `0` erlauben, aber negative Bestände verhindern
- Doppelte Artikelnummern mit einem `UNIQUE`-Constraint verhindern
- Datenbankfehler mit `try`, `catch` und `mysqli_sql_exception` kontrolliert behandeln
- MySQL-Fehlercodes mit `$e->getCode()` unterscheiden
- Statusinformationen über `$_GET` und Redirects an andere Seiten übergeben
- Mit `htmlspecialchars()` Daten sicher in HTML ausgeben
- Den Unterschied zwischen SQL-Injection-Schutz und sicherer HTML-Ausgabe verstehen
- Mit `$result->num_rows` prüfen, ob eine Datenbankabfrage Ergebnisse geliefert hat
- Anwendungen systematisch testen und Fehler entlang des Datenflusses suchen

## Nächste Schritte

- Benutzeroberfläche und Design verbessern
- Erfolg- und Fehlermeldungen benutzerfreundlicher darstellen
- Code weiter strukturieren und wiederkehrende Logik reduzieren
- Bestandsverwaltung um weitere Funktionen erweitern
- Kategorien oder weitere Lagerinformationen ergänzen
- Projektdokumentation weiter ausbauen



## Projektstruktur

```text
011_Lagerverwaltung/
│
├── README.md
│
└── src/
    ├── db.php
    ├── index.php
    ├── save_article.php
    ├── lagerbestand.php
    ├── bearbeiten.php
    └── delete_article.php
```

### Aufgaben der Dateien

- **`db.php`**  
  Enthält zentral die Verbindung zur MySQL-Datenbank und wird über `require_once` in den benötigten PHP-Dateien eingebunden.

- **`index.php`**  
  Enthält das Formular zum Anlegen neuer Artikel und zeigt Statusmeldungen nach dem Speichern an.

- **`save_article.php`**  
  Verarbeitet neue Artikel, validiert die Eingaben und speichert gültige Datensätze über ein Prepared Statement in der Datenbank.

- **`lagerbestand.php`**  
  Liest die gespeicherten Artikel aus der Datenbank aus, stellt sie in einer Tabelle dar und enthält die Suchfunktion.

- **`bearbeiten.php`**  
  Lädt einen vorhandenen Artikel und ermöglicht das Aktualisieren seiner Daten. Die Eingaben werden vor dem Update serverseitig validiert.

- **`delete_article.php`**  
  Löscht den ausgewählten Artikel über seine Artikelnummer aus der Datenbank.
