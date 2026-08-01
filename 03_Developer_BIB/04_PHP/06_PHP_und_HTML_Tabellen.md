# PHP und HTML-Tabellen

## Was ist das?

PHP kann Datenbankzeilen in eine HTML-Tabelle übertragen. Der statische
Tabellenrahmen wird einmal geschrieben; die Schleife erzeugt pro Datensatz
eine Tabellenzeile.

## Warum brauche ich das?

Dieser Aufbau ist die Grundlage deiner dynamischen Lagerbestandstabelle und
vieler Listenansichten in Unternehmensanwendungen.

## Syntax

```php
<table>
    <thead>
        <tr>
            <th>Artikelnummer</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars((string) $row["artikelnummer"]) ?></td>
            <td><?= htmlspecialchars($row["name"]) ?></td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
```

## Erklärung

`fetch_assoc()` liefert die aktuelle Zeile als assoziatives Array. Die
Schlüssel entsprechen ausgewählten Spalten beziehungsweise SQL-Aliasnamen.
Der nächste Schleifendurchlauf holt die nächste Ergebniszeile. Wenn keine
Zeile mehr vorhanden ist, endet `while`.

Die Ausgabe wird mit `htmlspecialchars()` kodiert, damit gespeicherter Text
nicht als HTML oder Script interpretiert wird.

## Beispiel

```php
<?php if ($result->num_rows === 0): ?>
    <tr>
        <td colspan="2">Keine Artikel gefunden.</td>
    </tr>
<?php else: ?>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row["artikelnummer"]) ?></td>
            <td><?= htmlspecialchars($row["name"]) ?></td>
        </tr>
    <?php endwhile; ?>
<?php endif; ?>
```

## Typische Fehler

- Die komplette Tabelle wird innerhalb der Schleife wiederholt.
- `$row["Optionen"]` wird erwartet, obwohl „Optionen“ keine DB-Spalte ist.
- Ein leerer Ergebnisfall wird nicht dargestellt.
- Daten werden ohne Ausgabekodierung eingesetzt.
- Spaltennamen im SQL und Schlüssel in `$row` stimmen nicht überein.

## Merksatz

**Eine Tabelle. Viele Zeilen. Genau eine `tr` pro Datensatz.**

## Verwandte Themen

- [HTML-Tabellen](../01_HTML/06_Tabellen.md)
- [Datenbankwerte und Oberflächenelemente](09_Datenbankwerte_und_Oberflaechenelemente.md)
- [Get Result](../05_SQL/06_Get_Result.md)

## Prüfungswissen

Du solltest Datenfluss, Schleifenbedingung, assoziative Arrays,
Leerergebnis und sichere HTML-Ausgabe erläutern können.
