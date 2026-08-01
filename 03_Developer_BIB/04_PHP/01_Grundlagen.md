# PHP – Grundlagen

## Was ist das?

PHP ist eine serverseitige Programmiersprache. Der Webserver führt
PHP-Code aus und sendet das erzeugte Ergebnis – meist HTML oder JSON – an
den Browser. Der Browser sieht nicht den PHP-Quellcode.

## Warum brauche ich das?

PHP verarbeitet Formulare, Sessions, Fachlogik und Datenbankzugriffe. Damit
bildet es in deinen Projekten die Verbindung zwischen Benutzeroberfläche
und MySQL-Datenbank.

## Syntax

```php
<?php
declare(strict_types=1);

$name = "Cedric";
$projects = 11;

echo "Hallo " . $name;
```

## Erklärung

PHP-Anweisungen enden normalerweise mit `;`. Variablen beginnen mit `$`.
Strings werden mit `.` verbunden. Arrays können nummerierte oder benannte
Schlüssel besitzen. Kontrollstrukturen und Funktionen funktionieren ähnlich
wie in JavaScript, werden aber auf dem Server ausgeführt.

Typischer Ablauf:

```text
Browser → HTTP-Anfrage → Webserver/PHP → Datenbank
        ← HTML oder JSON ← PHP ← Datenbankergebnis
```

`$_GET`, `$_POST`, `$_SESSION` und `$_SERVER` sind Superglobals. Daten daraus
sind grundsätzlich externe Eingaben und müssen geprüft werden.

## Beispiel

```php
<?php
declare(strict_types=1);

$stock = 20;

function hasStock(int $stock): bool
{
    return $stock > 0;
}
?>

<p>
    <?= hasStock($stock) ? "Artikel verfügbar" : "Nicht verfügbar" ?>
</p>
```

## Typische Fehler

- Ein Semikolon oder eine schließende Klammer fehlt.
- PHP-Datei wird direkt geöffnet statt über den Webserver aufgerufen.
- Eine nicht gesetzte Superglobal wird ohne Prüfung gelesen.
- Datentypen werden stillschweigend vermischt.
- Externe Daten werden ungeprüft in SQL oder HTML eingesetzt.

## Merksatz

**Frontend fragt an – PHP verarbeitet und entscheidet – der Server
antwortet.**

## Verwandte Themen

- [Wichtige PHP-Befehle](02_Wichtige_Befehle.md)
- [PHP-Workflow](03_Workflow.md)
- [GET und POST](08_GET_und_POST.md)
- [SQL-Grundlagen](../05_SQL/01_Grundlagen.md)

## Prüfungswissen

Du solltest Client und Server unterscheiden, den Request-Response-Ablauf
erklären und Variablen, Kontrollstrukturen, Arrays, Funktionen,
Superglobals und Datentypen sicher lesen können.
