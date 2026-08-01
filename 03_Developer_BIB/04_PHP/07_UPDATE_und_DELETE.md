# UPDATE und DELETE mit eindeutigen Schlüsseln

## Was ist das?

`UPDATE` verändert und `DELETE` entfernt bestehende Datensätze. Die
Zielzeile wird normalerweise über einen eindeutigen Primärschlüssel
ausgewählt.

## Warum brauche ich das?

Namen, Bestände oder Lagerorte können mehrfach vorkommen. Ein eindeutiger
Schlüssel verhindert, dass unbeabsichtigt mehrere Datensätze geändert oder
gelöscht werden.

## Syntax

```php
$stmt = $connection->prepare(
    "UPDATE artikel
     SET name = ?, bestand = ?, lagerort = ?
     WHERE artikelnummer = ?"
);
$stmt->bind_param(
    "sisi",
    $name,
    $stock,
    $location,
    $articleNumber
);
$stmt->execute();
```

## Erklärung

Die Artikelnummer kommt aus dem ausgewählten Datensatz, nicht aus einem
beliebigen Namen. Sie muss validiert und serverseitig in der
`WHERE`-Bedingung verwendet werden.

Nach der Ausführung zeigt `$stmt->affected_rows`, wie viele Zeilen
tatsächlich verändert wurden. Bei `0` kann der Datensatz fehlen oder die
neuen Werte entsprechen bereits den alten.

## Beispiel

```php
$stmt = $connection->prepare(
    "DELETE FROM artikel WHERE artikelnummer = ?"
);
$stmt->bind_param("i", $articleNumber);
$stmt->execute();

if ($stmt->affected_rows !== 1) {
    // Fehler oder bereits fehlender Datensatz behandeln.
}
```

## Typische Fehler

- `WHERE` fehlt.
- Ein nicht eindeutiger Name identifiziert den Datensatz.
- Benutzer dürfen beliebige IDs löschen, ohne Berechtigungskontrolle.
- Der Löschvorgang nutzt GET statt einer verändernden Request-Methode.
- `affected_rows` wird nicht kontrolliert.

## Merksatz

**Ändern und Löschen immer über einen geprüften, eindeutigen Schlüssel.**

## Verwandte Themen

- [UPDATE mit WHERE](18_UPDATE_mit_WHERE.md)
- [GET und POST](08_GET_und_POST.md)
- [SQL – wichtige Befehle](../05_SQL/02_Wichtige_Befehle.md)
- [CRUD](../05_SQL/10_CRUD.md)

## Prüfungswissen

Schutzbedarf, Primärschlüssel, `WHERE`, Transaktionen und
Berechtigungsprüfung sind typische Prüfungsaspekte bei Datenänderungen.
