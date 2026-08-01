# Normalisierung und Indizes

## Was ist das?

Normalisierung strukturiert Daten so, dass Redundanzen und
Änderungsanomalien reduziert werden. Indizes sind zusätzliche
Datenstrukturen zur Beschleunigung bestimmter Zugriffe.

## Warum brauche ich das?

Ein gutes Schema schützt Datenqualität; gezielte Indizes sorgen dafür, dass
häufige Abfragen auch bei wachsender Datenmenge praktikabel bleiben.

## Syntax

```sql
CREATE TABLE lagerort (
    id INT PRIMARY KEY AUTO_INCREMENT,
    bezeichnung VARCHAR(20) NOT NULL UNIQUE
);

CREATE INDEX idx_artikel_lagerort_id
ON artikel (lagerort_id);
```

## Erklärung

Vereinfacht:

- 1NF: atomare Werte, keine Wiederholungsgruppen.
- 2NF: Nichtschlüsselattribute hängen vom gesamten Schlüssel ab.
- 3NF: Nichtschlüsselattribute hängen nicht transitiv voneinander ab.

Ein Index ist nützlich für passende `WHERE`, `JOIN` und `ORDER BY`-Zugriffe.
Er kostet Speicher und Schreibzeit. Reihenfolge in zusammengesetzten
Indizes ist relevant.

## Beispiel

Statt den Lagerortnamen in jeder Artikelzeile frei zu tippen, verweist
`artikel.lagerort_id` auf `lagerort.id`. So wird „A1“ zentral gepflegt und
Tippfehler werden reduziert.

## Typische Fehler

- Jede Textwiederholung wird ohne Fachanalyse ausgelagert.
- Zu starke Normalisierung macht einfache Zugriffe unnötig komplex.
- Jeder Spalte wird ein Index gegeben.
- Indexwirkung wird nicht mit realistischen Daten gemessen.
- Fremdschlüssel fehlen trotz fachlicher Beziehung.

## Merksatz

**Normalisierung schützt Konsistenz; Indizes beschleunigen gezielte Wege.**

## Verwandte Themen

- [SQL-Grundlagen](01_Grundlagen.md)
- [JOINs](14_JOINs.md)
- [SQL – Best Practices](04_Best_Practices.md)

## Prüfungswissen

Normalformen, Anomalien, Schlüssel, Kardinalitäten und Index-Trade-offs
gehören zum typischen Prüfungsstoff.
