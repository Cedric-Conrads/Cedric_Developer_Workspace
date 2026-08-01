# Datenbankverbindung mit MySQLi

## Was ist das?

Eine MySQLi-Verbindung stellt den Kommunikationskanal zwischen PHP und
einem MySQL- beziehungsweise MariaDB-Server her.

## Warum brauche ich das?

Ohne Verbindung kann PHP keine SQL-Anweisungen vorbereiten oder
Datenbankergebnisse empfangen. Zeichensatz und Fehlerbehandlung müssen
zentral und korrekt konfiguriert sein.

## Syntax

```php
<?php
declare(strict_types=1);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection = new mysqli(
    "localhost",
    "root",
    "",
    "lagerverwaltung"
);
$connection->set_charset("utf8mb4");
```

## Erklärung

Die vier Werte sind Host, Benutzername, Passwort und Datenbankname.
`utf8mb4` unterstützt den vollständigen Unicode-Zeichensatz. In echten
Umgebungen gehören Zugangsdaten in Umgebungsvariablen oder eine nicht
versionierte Konfiguration, nicht in öffentliche Repositories.

Die Verbindung sollte zentral bereitgestellt und nicht in jeder Seite neu
kopiert werden.

## Beispiel

```php
// config/database.php
$connection = new mysqli(
    getenv("DB_HOST") ?: "localhost",
    getenv("DB_USER") ?: "root",
    getenv("DB_PASSWORD") ?: "",
    getenv("DB_NAME") ?: "lagerverwaltung"
);
$connection->set_charset("utf8mb4");
```

## Typische Fehler

- Datenbank- und Tabellenname werden verwechselt.
- Zeichensatz wird nicht gesetzt.
- Zugangsdaten werden committed oder öffentlich ausgegeben.
- Produktionszugang nutzt den MySQL-Root-Benutzer.
- Verbindungsfehler werden Nutzern vollständig angezeigt.

## Merksatz

**Verbinden, Zeichensatz setzen, Fehler sicher behandeln, Zugangsdaten schützen.**

## Verwandte Themen

- [PHP-Datei mit Datenbank](16_PHP_Datei_mit_Datenbank.md)
- [Gitignore](../06_Git/09_Gitignore.md)
- [Docker – Grundlagen](../12_Docker/01_Grundlagen.md)

## Prüfungswissen

Verbindungsparameter, Least Privilege, Zeichensatz, Konfigurationsschutz
und Fehlerbehandlung sind prüfungsrelevant.
