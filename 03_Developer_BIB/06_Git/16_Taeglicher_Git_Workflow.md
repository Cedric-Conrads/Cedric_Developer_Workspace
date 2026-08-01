# Täglicher Git-Workflow

## Was ist das?

Der tägliche Workflow ist eine kurze Checkliste für Beginn, Arbeit,
Commit und Abschluss einer Entwicklungsaufgabe.

## Warum brauche ich das?

Routinen verhindern Arbeit auf falschen Branches, große ungeprüfte Commits
und vergessene Remote-Änderungen.

## Syntax

```text
Start: status → branch → fetch/pull
Arbeit: kleine Änderung → Test → diff
Commit: add → diff --staged → commit
Ende: pull nach Teamregel → Test → push → status
```

## Erklärung

Beginne mit einem sauberen Stand. Erstelle für eine neue Aufgabe einen
Branch. Committe abgeschlossene Teilziele und pushe sie regelmäßig. Offene
experimentelle Änderungen werden nicht als fertige Arbeit deklariert.

## Beispiel

```bash
git status
git switch -c docs/developer-handbook-v2
# arbeiten und testen
git add 03_Developer_BIB
git diff --staged
git commit -m "Developer-BIB vollständig strukturieren"
git push -u origin docs/developer-handbook-v2
```

## Typische Fehler

- Tag beginnt ohne Prüfung des aktuellen Branches.
- Pull erfolgt mit unklaren offenen Änderungen.
- Zu lange wird ohne Commit gearbeitet.
- Push erfolgt erst nach mehreren Tagen und erschwert Zusammenarbeit.

## Merksatz

**Jeden Tag: Zustand kennen, klein arbeiten, testen, sauber teilen.**

## Verwandte Themen

- [Git-Workflow](03_Workflow.md)
- [Nach einer Änderung](20_Nach_einer_Aenderung.md)
- [Befehle und Häufigkeit](17_Git_Befehle_und_Haeufigkeit.md)

## Prüfungswissen

Ein sicherer Versionsverwaltungsprozess ist Teil professioneller
Softwareentwicklung.
