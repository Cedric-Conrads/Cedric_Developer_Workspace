# GitHub – Pull Requests, Issues und Reviews

## Was ist das?

Issues beschreiben Arbeit; Pull Requests schlagen konkrete Codeänderungen
vor; Reviews prüfen diese Änderungen vor der Integration.

## Warum brauche ich das?

Die drei Werkzeuge verbinden Anforderung, Umsetzung, Nachweis und
Qualitätssicherung zu einem nachvollziehbaren Prozess.

## Syntax

```text
Issue #12
→ Branch feature/artikelsuche
→ Commits
→ Pull Request „Closes #12“
→ Review + Tests
→ Merge
```

## Erklärung

Ein gutes Issue enthält Ausgangslage, Ziel, Akzeptanzkriterien und
relevante Randfälle. Ein Pull Request erklärt Was, Warum und Wie getestet
wurde. Ein Review prüft Korrektheit, Sicherheit, Lesbarkeit, Tests und
Auswirkungen – nicht die Person.

Kleine Pull Requests sind schneller und zuverlässiger zu prüfen. Offene
Kommentare werden beantwortet oder nachvollziehbar aufgelöst.

## Beispiel

```markdown
## Ziel
Artikelsuche nach Teilbegriffen.

## Umsetzung
- GET-Suchfeld
- Prepared Statement mit LIKE
- Leerergebnis

## Tests
- exakter Treffer
- Teiltreffer
- leerer Suchbegriff
- Sonderzeichen
```

## Typische Fehler

- Issue beschreibt nur „geht nicht“ ohne Reproduktion.
- PR enthält viele unabhängige Funktionen.
- Review konzentriert sich nur auf Formatierung.
- Kommentare werden ohne Begründung geschlossen.
- Merge erfolgt trotz fehlgeschlagener Tests.

## Merksatz

**Issue beschreibt das Ziel, PR zeigt die Änderung, Review prüft die Qualität.**

## Verwandte Themen

- [GitHub – Grundlagen](01_Grundlagen.md)
- [Actions und Sicherheit](03_Actions_und_Sicherheit.md)
- [Git – fortgeschrittene Best Practices](../06_Git/11_Fortgeschrittene_Best_Practices.md)

## Prüfungswissen

Akzeptanzkriterien, Testnachweise, Vier-Augen-Prinzip und
Änderungsmanagement sind wichtige Projektbegriffe.
