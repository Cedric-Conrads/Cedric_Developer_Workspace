# SELECT mit Prepared Statements

## Was ist das?

Eine vorbereitete SELECT-Abfrage liest Datensätze anhand sicher gebundener
Suchwerte.

## Warum brauche ich das?

Benutzereingaben wie Suchbegriffe oder Artikelnummern dürfen nicht per
Stringverkettung in SQL gelangen.

## Syntax

```php
$stmt = $connection->prepare(
    "SELECT artikelnummer, name, bestand, lagerort
     FROM artikel
     WHERE name LIKE ?
     ORDER BY name"
);
$searchTerm = "%" . $searchTerm . "%";
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();
```

## Erklärung

Ablauf:

1. Request und Existenz prüfen.
2. Suchwert normalisieren.
3. Wildcards bei Bedarf an den Wert anhängen.
4. SQL mit Platzhalter vorbereiten.
5. Wert typgerecht binden.
6. Statement ausführen.
7. Ergebnismenge holen.
8. Zeilen einzeln fetchen und sicher ausgeben.

Eine leere Ergebnismenge ist ein gültiges Resultat und sollte als
„keine Treffer“ dargestellt werden.

## Beispiel

```php
while ($row = $result->fetch_assoc()) {
    echo "<li>";
    echo htmlspecialchars($row["name"]);
    echo "</li>";
}
```

## Typische Fehler

- Wildcards werden als `%?%` in SQL geschrieben.
- `get_result()` wird vor `execute()` aufgerufen.
- Die Ergebniszeilen werden ohne Schleife oder ohne Leerergebnis behandelt.
- Benutzerwert wird direkt in `ORDER BY` eingesetzt; Spaltennamen sind keine Wertplatzhalter.
- Ausgabe wird nicht HTML-kodiert.

## Merksatz

**Suchen: Wert vorbereiten, SQL vorbereiten, Wert binden, ausführen, Zeilen holen.**

## Verwandte Themen

- [Platzhalter](11_Platzhalter_in_Prepared_Statements.md)
- [SELECT ein oder mehrere Datensätze](17_SELECT_ein_oder_mehrere_Datensaetze.md)
- [LIKE](../05_SQL/11_LIKE.md)
- [Wildcards](../05_SQL/12_Wildcards.md)

## Prüfungswissen

Prepared Statements, Ergebnismengen, Schleifen, LIKE-Suche und sichere
Ausgabe verbinden mehrere typische Prüfungsbereiche.
