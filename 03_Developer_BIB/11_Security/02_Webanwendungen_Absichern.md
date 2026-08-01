# Webanwendungen absichern

## Was ist das?

Websicherheit schützt Request-Verarbeitung, Datenbankzugriff, HTML-Ausgabe,
Sessions und fachliche Berechtigungen vor typischen Angriffen.

## Warum brauche ich das?

Webanwendungen verarbeiten vollständig vom Client kontrollierbare Daten.
Jede Vertrauensgrenze muss serverseitig abgesichert werden.

## Syntax

```text
SQL-Injection → Prepared Statements
XSS           → kontextgerechte Ausgabekodierung + CSP
CSRF          → CSRF-Token + sichere Cookies
IDOR/BOLA     → serverseitige Objektberechtigung
Sessiondiebstahl → HTTPS + Secure/HttpOnly/SameSite + Rotation
```

## Erklärung

Validierung prüft, ob Eingaben fachlich erlaubt sind. Parametrisierung
trennt SQL und Werte. Ausgabekodierung verhindert, dass Text im Zielkontext
als Code interpretiert wird. Autorisierung prüft bei jeder Aktion, ob der
aktuelle Nutzer genau dieses Objekt verwenden darf.

Sicherheitsheader, Rate Limits, Logging und sichere Fehlerantworten
ergänzen diese Grundlagen.

## Beispiel

```php
$stmt = $connection->prepare(
    "SELECT name FROM artikel WHERE artikelnummer = ?"
);
$stmt->bind_param("i", $articleNumber);

echo htmlspecialchars($article["name"], ENT_QUOTES, "UTF-8");
```
Parametrisierung und HTML-Kodierung lösen zwei unterschiedliche Probleme.

## Typische Fehler

- Nur Clientvalidierung wird verwendet.
- `htmlspecialchars()` soll SQL-Injection verhindern.
- Prepared Statements sollen XSS verhindern.
- Zugriff wird nur durch versteckte Buttons eingeschränkt.
- GET-Link löscht Daten ohne CSRF-Schutz und Bestätigung.

## Merksatz

**Validieren beim Eingang, parametrisieren in SQL, kodieren bei Ausgabe,
autorisieren bei jeder Aktion.**

## Verwandte Themen

- [Security-Grundlagen](01_Grundlagen.md)
- [Authentisierung und Secrets](03_Authentisierung_Secrets_und_Betrieb.md)
- [Prepared Statements](../04_PHP/12_Prepare_Bind_Param_Execute.md)

## Prüfungswissen

OWASP-Risiken, Eingabevalidierung, SQL-Injection, XSS, CSRF, Sessions und
Autorisierung sind sehr prüfungsrelevant.
