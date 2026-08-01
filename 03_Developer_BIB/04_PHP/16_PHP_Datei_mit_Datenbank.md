# Grundaufbau einer PHP-Datei mit Datenbank

## Was ist das?

Eine Datenbankdatei verbindet Request-Verarbeitung, Validierung,
Datenbankzugriff und kontrollierte Antwort in einer nachvollziehbaren
Reihenfolge.

## Warum brauche ich das?

Ein Standardaufbau verhindert fehlende Prüfungen und erleichtert es, jeden
Fehler einer Phase zuzuordnen.

## Syntax

```text
Verbindung laden
→ Request prüfen
→ Eingaben validieren
→ prepare
→ bind_param
→ execute
→ Ergebnis/Wirkung prüfen
→ Response oder Redirect
```

## Erklärung

Lesende Seiten holen eine Ergebnismenge und erzeugen daraus eine Ansicht.
Aktionsdateien ändern Daten und leiten anschließend weiter. In größeren
Anwendungen werden Controller, Service und Repository getrennt; der
Ablauf bleibt gedanklich derselbe.

## Beispiel

```php
require __DIR__ . "/config/database.php";

$articleNumber = filter_input(
    INPUT_GET,
    "artikelnummer",
    FILTER_VALIDATE_INT
);

if (!$articleNumber) {
    http_response_code(400);
    exit("Artikelnummer fehlt.");
}

$stmt = $connection->prepare(
    "SELECT artikelnummer, name, bestand, lagerort
     FROM artikel
     WHERE artikelnummer = ?"
);
$stmt->bind_param("i", $articleNumber);
$stmt->execute();
$article = $stmt->get_result()->fetch_assoc();
```

## Typische Fehler

- Externe Werte werden vor Validierung verwendet.
- Die Verbindung wird dupliziert statt eingebunden.
- Ein fehlender Datensatz wird wie ein leerer gültiger Datensatz behandelt.
- Datenbank- und HTML-Code sind ohne erkennbare Abschnitte vermischt.
- Nach Fehlern läuft der Code weiter.

## Merksatz

**Jede Phase bekommt klare Eingaben, eine Aufgabe und ein geprüftes Ergebnis.**

## Verwandte Themen

- [Datenbankverbindung](15_Datenbankverbindung.md)
- [PHP-Workflow](03_Workflow.md)
- [Seiten und Aktionsdateien](20_PHP_Seiten_und_Aktionsdateien.md)

## Prüfungswissen

Schichten, Kontrollfluss, Validierung und Rückgabewerte sollen in
Prüfung und Projektdokumentation nachvollziehbar dargestellt werden.
