# SQL – Best Practices

## Was ist das?

SQL-Best-Practices sichern Korrektheit, Datenintegrität, Leistung,
Lesbarkeit und Schutz vor unbefugten Änderungen.

## Warum brauche ich das?

Daten überleben einzelne Programmversionen. Fehlerhafte Strukturen oder
Abfragen wirken deshalb langfristig und oft auf viele Nutzer.

## Syntax

```sql
SELECT artikelnummer, name, bestand
FROM artikel
WHERE lagerort = ?
  AND bestand > 0
ORDER BY name;
```

## Erklärung

- Verwende Primär- und Fremdschlüssel sowie passende Constraints.
- Nutze Prepared Statements für externe Werte.
- Wähle nur benötigte Spalten.
- Nutze verständliche, konsistente Namen.
- Indexiere häufige Filter- und Join-Spalten gezielt.
- Verwende Transaktionen für zusammengehörige Änderungen.
- Prüfe Ausführungspläne bei langsamen Abfragen.
- Vergib dem DB-Benutzer nur benötigte Rechte.
- Sichere und teste Wiederherstellung, nicht nur das Backup.

## Beispiel

```sql
CREATE INDEX idx_artikel_lagerort
ON artikel (lagerort);
```
Ein Index beschleunigt passende Lesezugriffe, benötigt aber Speicher und
erhöht Aufwand bei Schreiboperationen.

## Typische Fehler

- Jeder Spalte wird vorsorglich ein Index gegeben.
- Anwendungscode ersetzt Datenbank-Constraints vollständig.
- Produktionsbenutzer arbeitet mit Root-Rechten.
- Backups existieren, wurden aber nie zurückgespielt.
- Tabellen- und Spaltennamen enthalten inkonsistente Leerzeichen oder Umlaute.

## Merksatz

**Integrität zuerst, dann Lesbarkeit, dann gemessene Optimierung.**

## Verwandte Themen

- [SQL-Grundlagen](01_Grundlagen.md)
- [SQL – Fehler und Lösungen](05_Fehler_und_Loesungen.md)
- [Security – Grundlagen](../11_Security/01_Grundlagen.md)

## Prüfungswissen

Normalisierung, Indizes, Rechte, Transaktionen, Backup und Recovery sind
typische System- und Datenbankfragen.
