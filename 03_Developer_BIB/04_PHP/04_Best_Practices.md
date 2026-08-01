# PHP – Best Practices

## Was ist das?

PHP-Best-Practices sind Regeln für Sicherheit, klare Verantwortlichkeiten,
Fehlerbehandlung, Testbarkeit und konsistente Codegestaltung.

## Warum brauche ich das?

Backendcode verarbeitet vertrauenswürdige und nicht vertrauenswürdige Daten.
Qualitätsregeln schützen Daten und machen die Anwendung langfristig
wartbar.

## Syntax

```php
<?php
declare(strict_types=1);

function normalizeArticleName(string $name): string
{
    return trim($name);
}
```

## Erklärung

- Aktiviere in neuem Code möglichst strikte Typen.
- Prüfe externe Eingaben serverseitig.
- Nutze Prepared Statements für Werte in SQL.
- Kodiere Daten kontextgerecht bei der Ausgabe.
- Speichere Passwörter ausschließlich mit `password_hash()`.
- Lagere Verbindung, Konfiguration und wiederverwendbare Funktionen aus.
- Zeige Nutzern keine internen Datenbankfehler oder Zugangsdaten.
- Protokolliere technische Fehler serverseitig.
- Verwende konsistente Formatierung und sprechende Namen.
- Halte Secrets außerhalb des Repositories.

## Beispiel

```php
try {
    $connection = new mysqli($host, $user, $password, $database);
    $connection->set_charset("utf8mb4");
} catch (mysqli_sql_exception $exception) {
    error_log($exception->getMessage());
    http_response_code(500);
    exit("Die Anfrage konnte nicht verarbeitet werden.");
}
```

## Typische Fehler

- Fehlermeldungen und Passwörter werden im Browser ausgegeben.
- SQL wird durch Stringverkettung mit Benutzerdaten gebaut.
- `@` unterdrückt Fehler statt sie zu behandeln.
- `htmlspecialchars()` wird als Schutz gegen SQL-Injection missverstanden.
- Dieselbe Datenbankverbindung wird in jeder Datei kopiert.

## Merksatz

**Validiere beim Eingang, binde Werte in SQL, kodiere bei der Ausgabe.**

## Verwandte Themen

- [PHP – Fehler und Lösungen](05_Fehler_und_Loesungen.md)
- [Datenbankverbindung](15_Datenbankverbindung.md)
- [Security – Grundlagen](../11_Security/01_Grundlagen.md)
- [Gitignore](../06_Git/09_Gitignore.md)

## Prüfungswissen

Sichere Eingabeverarbeitung, Authentisierung, Fehlerbehandlung,
Geheimnisschutz und Trennung der Schichten sind sowohl prüfungs- als auch
projektentscheidend.
