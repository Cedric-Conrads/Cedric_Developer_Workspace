# PHP – Wichtige Befehle und Funktionen

## Was ist das?

Diese Übersicht sammelt häufig verwendete PHP-Sprachkonstrukte und
Funktionen für Eingaben, Ausgaben, Datenbanken, Sessions und
Weiterleitungen.

## Warum brauche ich das?

Beim Aufbau von CRUD-Anwendungen wiederholen sich dieselben Arbeitsschritte.
Die Befehle müssen nicht nur auswendig bekannt sein; wichtig sind
Eingabe, Rückgabewert und mögliche Fehler.

## Syntax

```php
$name = trim((string) ($_POST["name"] ?? ""));

if ($name === "") {
    die("Name fehlt.");
}

$stmt = $connection->prepare(
    "SELECT artikelnummer, name FROM artikel WHERE name LIKE ?"
);
$search = "%" . $name . "%";
$stmt->bind_param("s", $search);
$stmt->execute();
$result = $stmt->get_result();
```

## Erklärung

| Werkzeug | Aufgabe |
| --- | --- |
| `echo`, `<?= ... ?>` | Wert ausgeben |
| `isset()` | prüfen, ob Variable/Schlüssel existiert und nicht `null` ist |
| `empty()` | auf „leeren“ Wert prüfen; bei `0` vorsichtig |
| `trim()` | äußere Leerzeichen entfernen |
| `filter_input()` | Eingabe lesen und optional filtern |
| `htmlspecialchars()` | Text sicher in HTML ausgeben |
| `password_hash()` | Passwort-Hash erzeugen |
| `password_verify()` | Passwort gegen Hash prüfen |
| `header()` | HTTP-Header senden, z. B. Weiterleitung |
| `session_start()` | Session laden oder starten |
| `prepare()` | SQL mit Platzhaltern vorbereiten |
| `bind_param()` | PHP-Werte an Platzhalter binden |
| `execute()` | Statement ausführen |

## Beispiel

```php
$articleNumber = filter_input(
    INPUT_GET,
    "artikelnummer",
    FILTER_VALIDATE_INT
);

if ($articleNumber === false || $articleNumber === null) {
    http_response_code(400);
    exit("Ungültige Artikelnummer.");
}
```

## Typische Fehler

- `isset()` wird als vollständige Inhaltsvalidierung verstanden.
- `empty("0")` ist `true` und verwirft einen möglicherweise gültigen Wert.
- `htmlspecialchars()` wird vor der Datenbank statt bei der HTML-Ausgabe genutzt.
- `header()` wird nach einer Ausgabe aufgerufen.
- `get_result()` wird bei `INSERT`, `UPDATE` oder `DELETE` erwartet.

## Merksatz

**Jedes Werkzeug hat eine Schicht: Eingabe prüfen, Daten verarbeiten,
Ausgabe schützen.**

## Verwandte Themen

- [Isset und Validierung](19_Isset_und_Validierung.md)
- [Prepared Statements](12_Prepare_Bind_Param_Execute.md)
- [Header und Exit](22_Header_und_Exit.md)
- [Security – Grundlagen](../11_Security/01_Grundlagen.md)

## Prüfungswissen

Häufig geprüft werden Superglobals, Validierung, Sessions, sichere
Passwortspeicherung, Prepared Statements und die Trennung von
Eingabevalidierung und Ausgabekodierung.
