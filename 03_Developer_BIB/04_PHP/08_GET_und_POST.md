# GET und POST

## Was ist das?

GET und POST sind HTTP-Methoden. GET fordert eine Darstellung einer
Ressource an; POST übermittelt Daten zur Verarbeitung und führt häufig zu
einer Zustandsänderung.

## Warum brauche ich das?

Die passende Methode verbessert Verständlichkeit, Browser-Verhalten,
Sicherheit und API-Design. Sie entscheidet außerdem, aus welcher
PHP-Superglobal Werte gelesen werden.

## Syntax

```html
<form action="search.php" method="get">...</form>
<form action="save_article.php" method="post">...</form>
```

```php
$search = $_GET["suche"] ?? "";
$name = $_POST["name"] ?? "";
```

## Erklärung

**GET**

- Parameter stehen typischerweise in der URL.
- Geeignet für Lesen, Suchen, Filtern und auswählbare Seitenzustände.
- URLs können gespeichert und geteilt werden.
- Soll serverseitig keine fachliche Zustandsänderung auslösen.

**POST**

- Daten stehen im Request-Body.
- Geeignet für Erstellen, Login und komplexe Verarbeitung.
- Ist nicht automatisch verschlüsselt; dafür ist HTTPS zuständig.
- Schutzmaßnahmen wie Validierung, Berechtigungs- und CSRF-Prüfung bleiben nötig.

## Beispiel

```text
GET  /bearbeiten.php?artikelnummer=1002
POST /update_article.php
     name=Hammer&bestand=25&artikelnummer=1002
```
GET öffnet die Bearbeitungsansicht. POST übermittelt anschließend die
neuen Werte.

## Typische Fehler

- Löschen wird über einen normalen GET-Link ausgelöst.
- POST wird als „unsichtbar und deshalb sicher“ verstanden.
- `method` und verwendete Superglobal stimmen nicht überein.
- Sensible Daten werden in die URL geschrieben.
- Nach POST fehlt eine Weiterleitung.

## Merksatz

**GET holt eine Darstellung; POST schickt Daten zur Verarbeitung.**

## Verwandte Themen

- [GET-Daten über die URL](10_GET_Daten_ueber_URL.md)
- [PHP-Workflow](03_Workflow.md)
- [APIs – Grundlagen](../09_APIs/01_Grundlagen.md)
- [Security – Grundlagen](../11_Security/01_Grundlagen.md)

## Prüfungswissen

Idempotenz, sichere Methoden, URL-Parameter, Request-Body, Statuscodes und
Post/Redirect/Get sind häufige HTTP- und Prüfungsgrundlagen.
