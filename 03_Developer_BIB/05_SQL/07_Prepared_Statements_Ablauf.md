# Prepared Statements – Ablauf

## Was ist das?

Prepared Statements trennen eine SQL-Vorlage von den später gebundenen
Werten.

## Warum brauche ich das?

Die Trennung schützt vor SQL-Injection über Werte und macht Datentypen sowie
Reihenfolge explizit.

## Syntax

```text
prepare → bind_param → execute
        → get_result/fetch (bei SELECT)
        → affected_rows (bei Änderungen)
```

## Erklärung

Die Datenbank verarbeitet zuerst die SQL-Struktur. Werte werden anschließend
getrennt übertragen. Sie werden deshalb als Daten und nicht als
nachträglich eingeschleuster SQL-Code interpretiert.

Dynamische Tabellen- oder Spaltennamen müssen dagegen über eine feste
Allowlist ausgewählt werden; dafür funktionieren Wertplatzhalter nicht.

## Beispiel

```php
$allowedOrderColumns = ["name", "bestand"];
$orderBy = $_GET["sort"] ?? "name";

if (!in_array($orderBy, $allowedOrderColumns, true)) {
    $orderBy = "name";
}

$sql = "SELECT name, bestand FROM artikel ORDER BY " . $orderBy;
```
Die dynamische Spalte stammt ausschließlich aus der Allowlist.

## Typische Fehler

- Platzhalter werden in Anführungszeichen gesetzt.
- Wertezahl und Platzhalterzahl unterscheiden sich.
- Prepared Statements sollen ungeprüfte SQL-Bezeichner absichern.
- Fehler werden ohne Kontext an Nutzer ausgegeben.
- Es wird angenommen, dass Prepared Statements jede Sicherheitsprüfung ersetzen.

## Merksatz

**SQL-Struktur fest, Werte getrennt, dynamische Bezeichner nur aus Allowlist.**

## Verwandte Themen

- [PHP Prepare, Bind Param, Execute](../04_PHP/12_Prepare_Bind_Param_Execute.md)
- [SQL-Platzhalter](13_Platzhalter.md)
- [Security – Grundlagen](../11_Security/01_Grundlagen.md)

## Prüfungswissen

Sicherheitswirkung und Grenzen parametrisierter Abfragen sind
prüfungsrelevant.
