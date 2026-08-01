# HTML – Tabellen

## Was ist das?

HTML-Tabellen stellen Daten mit Zeilen und Spalten dar. Sie sind für
tabellarische Informationen gedacht, nicht für das Seitenlayout.

## Warum brauche ich das?

Datenbankergebnisse wie Artikelnummer, Name, Bestand und Lagerort lassen
sich in einer Tabelle übersichtlich darstellen. Eine korrekte Struktur
verbessert Lesbarkeit und Barrierefreiheit.

## Syntax

```html
<table>
    <caption>Aktueller Lagerbestand</caption>
    <thead>
        <tr>
            <th scope="col">Artikelnummer</th>
            <th scope="col">Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1001</td>
            <td>Hammer</td>
        </tr>
    </tbody>
</table>
```

## Erklärung

- `table` umfasst die gesamte Tabelle.
- `caption` beschreibt den Tabelleninhalt.
- `thead`, `tbody` und optional `tfoot` gliedern die Tabelle.
- `tr` ist eine Tabellenzeile.
- `th` ist eine Kopfzelle; `scope` ordnet sie einer Spalte oder Zeile zu.
- `td` ist eine normale Datenzelle.

Alle Zeilen sollten logisch dieselbe Anzahl an Zellen besitzen. Für
zusammengefasste Zellen existieren `colspan` und `rowspan`, die sparsam
eingesetzt werden sollten.

## Beispiel

```php
<tbody>
<?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= htmlspecialchars($row["artikelnummer"]) ?></td>
        <td><?= htmlspecialchars($row["name"]) ?></td>
    </tr>
<?php endwhile; ?>
</tbody>
```
Der Tabellenrahmen wird einmal erzeugt; die Schleife erzeugt pro Datensatz
genau eine neue `tr`-Zeile.

## Typische Fehler

- Tabellen werden für Layout statt für Daten verwendet.
- `th` und `scope` fehlen, sodass Zuordnungen unklar sind.
- `tr` wird außerhalb von `table`, `thead`, `tbody` oder `tfoot` platziert.
- Datenbankwerte werden unescaped in HTML ausgegeben.
- Die Schleife umfasst versehentlich die komplette Tabelle statt nur Zeilen.

## Merksatz

**Eine Tabelle, viele Zeilen, eine Zeile pro Datensatz.**

## Verwandte Themen

- [PHP und HTML-Tabellen](../04_PHP/06_PHP_und_HTML_Tabellen.md)
- [Datenbankwerte und Oberflächenelemente](../04_PHP/09_Datenbankwerte_und_Oberflaechenelemente.md)
- [SQL SELECT](../05_SQL/02_Wichtige_Befehle.md)

## Prüfungswissen

Du solltest Tabellenstruktur, semantische Kopfzellen und die dynamische
Ausgabe mehrerer Datensätze erklären können. Sicherheit: Ausgaben mit
`htmlspecialchars()` behandeln.
