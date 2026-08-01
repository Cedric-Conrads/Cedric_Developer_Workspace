# Datenbankwerte und Oberflächenelemente

## Was ist das?

Eine dynamische Tabelle enthält sowohl Daten aus der Datenbank als auch
statische Bedienelemente, die die Anwendung selbst erzeugt.

## Warum brauche ich das?

Diese Trennung verhindert Zugriffe auf nicht vorhandene Spalten und macht
klar, welche Inhalte aus dem Datenmodell und welche aus der Oberfläche
stammen.

## Syntax

```php
<td><?= htmlspecialchars($row["name"]) ?></td>
<td>
    <a href="bearbeiten.php?artikelnummer=<?= urlencode($row["artikelnummer"]) ?>">
        Bearbeiten
    </a>
</td>
```

## Erklärung

`$row["name"]` funktioniert nur, wenn das SQL-Ergebnis eine Spalte oder
einen Alias `name` enthält. Die Überschrift „Optionen“ und der
Bearbeiten-Link sind dagegen HTML der Anwendung.

```text
Datenbankspalte → $row["..."] → kodierte Ausgabe
Bedienaktion    → HTML-Element → geprüfte ID als Parameter
```

## Beispiel

```php
<th scope="col">Optionen</th>

<?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= htmlspecialchars($row["name"]) ?></td>
        <td>
            <a href="bearbeiten.php?artikelnummer=<?= urlencode($row["artikelnummer"]) ?>">
                Bearbeiten
            </a>
        </td>
    </tr>
<?php endwhile; ?>
```

## Typische Fehler

- `$row["Optionen"]` wird gelesen, obwohl die Spalte nicht existiert.
- Die sichtbare Tabellenüberschrift wird mit einer Datenbankspalte verwechselt.
- Eine Aktion erhält den Namen statt des eindeutigen Schlüssels.
- Daten werden ohne HTML-Kodierung ausgegeben.
- Eine sichtbare Schaltfläche existiert, aber serverseitige Berechtigung fehlt.

## Merksatz

**Daten kommen aus MySQL; Buttons und Links baust du mit HTML.**

## Verwandte Themen

- [PHP und HTML-Tabellen](06_PHP_und_HTML_Tabellen.md)
- [GET-Daten über die URL](10_GET_Daten_ueber_URL.md)
- [SELECT mit Prepared Statements](21_SELECT_mit_Prepared_Statements.md)

## Prüfungswissen

Die Trennung von Datenmodell, Verarbeitung und Präsentation ist ein
grundlegendes Architektur- und Prüfungsprinzip.
