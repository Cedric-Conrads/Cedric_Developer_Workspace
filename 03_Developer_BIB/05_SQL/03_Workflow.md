# SQL – Workflow

## Was ist das?

Der SQL-Workflow ist die sichere Planung, Ausführung und Kontrolle einer
Datenbankoperation.

## Warum brauche ich das?

Besonders bei Änderungen schützt ein fester Ablauf vor falschen Tabellen,
zu breiten Bedingungen und unbemerkten Datenverlusten.

## Syntax

```text
Anwendungsfall → Tabellen/Spalten → Schlüssel/Beziehungen
→ SELECT-Kontrolle → parametrisierte Abfrage → Transaktion
→ Zeilenanzahl/Ergebnis prüfen → COMMIT oder ROLLBACK
```

## Erklärung

1. Fachliche Frage formulieren.
2. Benötigte Tabellen und Beziehungen bestimmen.
3. Nur notwendige Spalten auswählen.
4. Filter zunächst mit `SELECT` kontrollieren.
5. Externe Werte parametrisieren.
6. Kritische Mehrschrittänderungen in einer Transaktion ausführen.
7. Ergebnis, `affected_rows` und Randfälle prüfen.
8. Abfrage und Entscheidung dokumentieren.

## Beispiel

```sql
START TRANSACTION;

UPDATE artikel
SET bestand = bestand - 1
WHERE artikelnummer = 1001
  AND bestand > 0;

-- Wirkung prüfen
COMMIT;
```

## Typische Fehler

- Eine Änderungsbedingung wird nicht zuerst als SELECT kontrolliert.
- Mehrere abhängige Änderungen laufen ohne Transaktion.
- Erfolg der Abfrage wird mit fachlichem Erfolg verwechselt.
- Testdaten und Produktionsdaten werden nicht getrennt.
- Rücksetzstrategie oder Backup fehlt.

## Merksatz

**Erst auswählen und prüfen, dann gezielt ändern.**

## Verwandte Themen

- [SQL – Best Practices](04_Best_Practices.md)
- [PHP-Workflow](../04_PHP/03_Workflow.md)
- [Git-Workflow](../06_Git/03_Workflow.md)

## Prüfungswissen

Transaktionen, Atomarität, Teststrategie und Wirkungskontrolle sind
wichtige Prüfungs- und Projektthemen.
