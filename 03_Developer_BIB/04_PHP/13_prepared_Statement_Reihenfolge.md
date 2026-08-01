# Prepared Statements – Reihenfolge

## Was ist das?

Ein Prepared Statement folgt einer festen Abfolge. Abhängig vom SQL-Befehl
endet der Ablauf mit Ergebnisverarbeitung oder Auswertung betroffener Zeilen.

## Warum brauche ich das?

Die Reihenfolge hilft beim Schreiben und Debuggen. Sie zeigt außerdem,
welche Schritte nur bei `SELECT` erforderlich sind.

## Syntax

```text
SELECT:
prepare → bind_param → execute → get_result → fetch_assoc

INSERT/UPDATE/DELETE:
prepare → bind_param → execute → affected_rows
```

## Erklärung

`bind_param()` entfällt, wenn das Statement keine Platzhalter besitzt.
`get_result()` ist für Ergebnismengen gedacht. Änderungen liefern keine
Tabelle zurück; ihre Wirkung wird beispielsweise über `affected_rows`
kontrolliert.

## Beispiel

```php
$stmt = $connection->prepare(
    "SELECT * FROM artikel WHERE lagerort = ?"
);
$stmt->bind_param("s", $location);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    // Datensatz verarbeiten
}
```

## Typische Fehler

- `get_result()` wird vor `execute()` aufgerufen.
- `fetch_assoc()` wird direkt am Statement statt am Ergebnis verwendet.
- Das Ergebnis wird nur einmal geholt, obwohl alle Zeilen benötigt werden.
- Bei Schreiboperationen wird die Wirkung nicht kontrolliert.

## Merksatz

**Lesen endet mit Ergebniszeilen; Schreiben endet mit betroffenen Zeilen.**

## Verwandte Themen

- [Prepare, Bind Param, Execute](12_Prepare_Bind_Param_Execute.md)
- [Get Result](../05_SQL/06_Get_Result.md)
- [SELECT ein oder mehrere Datensätze](17_SELECT_ein_oder_mehrere_Datensaetze.md)

## Prüfungswissen

Der Unterschied zwischen Ergebnismenge und Änderungsanzahl ist ein
wichtiger Prüfungs- und Debuggingpunkt.
