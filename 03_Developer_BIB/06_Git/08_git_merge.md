# git merge und Konflikte

## Was ist das?

`git merge` integriert die Historie eines angegebenen Branches in den
aktuell ausgecheckten Branch.

## Warum brauche ich das?

Damit werden geprüfte Feature- oder Bugfix-Änderungen in eine gemeinsame
Entwicklungslinie übernommen.

## Syntax

```bash
git switch main
git merge feature/artikelsuche
```

## Erklärung

Ein Fast-Forward verschiebt nur den Branchzeiger. Bei auseinanderlaufender
Historie entsteht ein Merge-Commit. Ändern beide Seiten denselben Bereich
inkompatibel, markiert Git einen Konflikt:

```text
<<<<<<< HEAD
aktuelle Variante
=======
andere Variante
>>>>>>> feature/artikelsuche
```

Der Entwickler entscheidet fachlich, entfernt Marker, testet, stagiert und
schließt den Merge ab.

## Beispiel

```bash
git status
# Dateien bearbeiten und testen
git add konfliktdatei.php
git commit
```

## Typische Fehler

- Merge wird vom falschen Zielbranch aus gestartet.
- Konfliktmarker werden committed.
- Eine Seite wird blind vollständig übernommen.
- Tests nach Konfliktlösung fehlen.
- Merge und Rebase werden ohne Teamregel vermischt.

## Merksatz

**Wechsle zuerst zum Zielbranch; merge dann den Quellbranch hinein.**

## Verwandte Themen

- [Git Branch](07_Git_Branch.md)
- [Git – Fehler und Lösungen](05_Fehler_und_Loesungen.md)
- [GitHub – Grundlagen](../07_GitHub/01_Grundlagen.md)

## Prüfungswissen

Merge-Richtung, Fast-Forward, Merge-Commit und Konfliktlösung erklären können.
