# PHP – Workflow

## Was ist das?

Der PHP-Workflow ist die feste Reihenfolge, in der eine Anfrage
entgegengenommen, geprüft, verarbeitet und beantwortet wird.

## Warum brauche ich das?

Ein definierter Ablauf verhindert Datenbankzugriffe mit ungültigen Werten,
doppelte Formularübermittlung und vermischte Verantwortlichkeiten.

## Syntax

```text
Request → Methode prüfen → Eingaben lesen → validieren
        → Fachlogik → Datenbank → Ergebnis/Fehler
        → Redirect oder Response
```

Für Formulare bewährt sich **Post/Redirect/Get**:

```text
GET Formular → POST Aktion → Redirect → GET Ergebnis-Seite
```

## Erklärung

1. Erlaubte HTTP-Methode prüfen.
2. Externe Werte defensiv lesen.
3. Pflichtfelder, Format, Bereich und Geschäftsregeln validieren.
4. Datenbankverbindung herstellen.
5. Prepared Statement vorbereiten, binden und ausführen.
6. Erfolg oder Fehler kontrollieren.
7. Nach einer Änderung weiterleiten und das Skript beenden.
8. Auf Zielseiten Daten laden und für HTML kodiert ausgeben.

## Beispiel

```php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Methode nicht erlaubt.");
}

$name = trim((string) ($_POST["name"] ?? ""));
if ($name === "") {
    http_response_code(422);
    exit("Name ist erforderlich.");
}

$stmt = $connection->prepare(
    "INSERT INTO artikel (name) VALUES (?)"
);
$stmt->bind_param("s", $name);
$stmt->execute();

header("Location: lagerbestand.php");
exit;
```

## Typische Fehler

- Datenbankcode läuft, bevor die Anfrage validiert wurde.
- Nach POST wird direkt HTML ausgegeben; Neuladen sendet erneut.
- Fehlerantworten besitzen unpassende HTTP-Statuscodes.
- Verbindungs-, SQL- und Darstellungslogik steckt in einer unübersichtlichen Datei.
- Weiterleitung wird ohne `exit` fortgesetzt.

## Merksatz

**Lesen – prüfen – verarbeiten – speichern – weiterleiten – anzeigen.**

## Verwandte Themen

- [PHP-Seiten und Aktionsdateien](20_PHP_Seiten_und_Aktionsdateien.md)
- [GET und POST](08_GET_und_POST.md)
- [SQL-Workflow](../05_SQL/03_Workflow.md)

## Prüfungswissen

Prozessmodelle, Eingabe-Verarbeitung-Ausgabe, HTTP-Methoden,
Fehlerbehandlung und sichere Datenbankzugriffe sind zentrale
Prüfungs- und Projektdokumentationsthemen.
