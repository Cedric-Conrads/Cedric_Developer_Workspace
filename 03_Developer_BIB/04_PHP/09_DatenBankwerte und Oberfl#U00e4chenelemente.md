# Datenbankwerte und Oberflächenelemente

## Grundidee

Nicht alles, was in einer HTML-Tabelle angezeigt wird, kommt automatisch aus der Datenbank.

Es gibt zwei verschiedene Arten von Inhalten:

---

## 1. Werte aus der Datenbank

Diese Werte kommen aus einem Datensatz in `$row`.

Beispiele:

```php
$row["artikelnummer"]
$row["name"]
$row["bestand"]
$row["lagerort"]

Ausgabe im HTML:

<td><?= $row["name"] ?></td>

$row["name"] funktioniert nur, wenn es in der Datenbank wirklich eine Spalte mit dem Namen name gibt.

2. Elemente der Benutzeroberfläche

Diese Inhalte kommen nicht aus der Datenbank.

Beispiele:

Bearbeiten-Link
Löschen-Button
Zurück-Link
Aktionen oder Optionen

Diese Elemente werden direkt mit HTML erstellt.

Beispiel:

<td>
    <a href="#">Bearbeiten</a>
</td>
Typischer Fehler

Falsch:

<td><?= $row["Optionen"] ?></td>

Warum ist das falsch?

Weil es in der Datenbank keine Spalte namens Optionen gibt.

PHP würde versuchen, einen Datenbankwert zu laden, der nicht vorhanden ist.

Richtig

<th>Optionen</th>

Die Überschrift wird mit HTML erstellt.

In jeder Datenzeile:

<td>
    <a href="#">Bearbeiten</a>
</td>
Merksatz
Datenbankspalte
→ $row["..."]

Bedienelement der Oberfläche
→ HTML

Oder noch einfacher:

Daten kommen aus MySQL.

Buttons und Links baue ich selbst mit HTML.

Das passt fachlich perfekt direkt hinter deine bisherigen PHP-Dateien zu `fetch_assoc()`, `$row` und dynamischen Tabellen. Danach setzen wir beim Bearbeiten-Link die Artikelnummer per GET ein. 
