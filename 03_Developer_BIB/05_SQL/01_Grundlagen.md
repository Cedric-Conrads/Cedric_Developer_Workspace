# SQL – Grundlagen

## Was ist das?

SQL (**Structured Query Language**) ist die Sprache für relationale
Datenbanken. Sie definiert Strukturen und liest, erstellt, ändert oder
löscht Daten.

## Warum brauche ich das?

Unternehmensanwendungen speichern strukturierte Informationen dauerhaft.
SQL verbindet Fachobjekte wie Artikel, Benutzer oder Bestellungen über
Tabellen, Schlüssel und Beziehungen.

## Syntax

```sql
CREATE TABLE artikel (
    artikelnummer INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    bestand INT NOT NULL DEFAULT 0,
    lagerort VARCHAR(20) NOT NULL
);
```

## Erklärung

- Eine Tabelle beschreibt eine Art von Fachobjekt.
- Eine Zeile ist ein Datensatz.
- Eine Spalte ist eine Eigenschaft mit Datentyp und Regeln.
- Ein Primärschlüssel identifiziert jede Zeile eindeutig.
- Ein Fremdschlüssel verweist auf einen Schlüssel einer anderen Tabelle.
- Constraints wie `NOT NULL`, `UNIQUE` und `CHECK` schützen Datenintegrität.

SQL wird grob in DDL (`CREATE`, `ALTER`, `DROP`), DML (`SELECT`, `INSERT`,
`UPDATE`, `DELETE`) und Transaktionssteuerung (`COMMIT`, `ROLLBACK`)
gegliedert.

## Beispiel

```sql
INSERT INTO artikel (artikelnummer, name, bestand, lagerort)
VALUES (1001, 'Hammer', 20, 'A1');

SELECT artikelnummer, name, bestand
FROM artikel
WHERE bestand > 0
ORDER BY name;
```

## Typische Fehler

- Primärschlüssel fehlt oder darf `NULL` sein.
- Unpassender Datentyp wird verwendet, etwa Text für berechenbare Zahlen.
- Redundante Daten werden in mehreren Tabellen unkontrolliert dupliziert.
- Anwendung verlässt sich nur auf Prüfungen im Frontend.
- SQL-Schlüsselwörter und eigene Namen werden uneinheitlich geschrieben.

## Merksatz

**Tabelle = Struktur, Zeile = Datensatz, Spalte = Eigenschaft,
Schlüssel = Identität oder Beziehung.**

## Verwandte Themen

- [Wichtige SQL-Befehle](02_Wichtige_Befehle.md)
- [CRUD](10_CRUD.md)
- [PHP-Datenbankverbindung](../04_PHP/15_Datenbankverbindung.md)

## Prüfungswissen

Relationen, Datentypen, Schlüssel, Constraints, CRUD und
Datenintegrität gehören zum Kern der IHK-Prüfungen.
