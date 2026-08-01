# Git – Workflow

## Was ist das?

Der Git-Workflow ist die wiederholbare Abfolge vom Prüfen einer Änderung
bis zur Synchronisierung.

## Warum brauche ich das?

Die Reihenfolge verhindert ungeprüfte Commits und macht den Stand für dich
und andere reproduzierbar.

## Syntax

```text
ändern → status → diff → add → diff --staged
       → commit → pull/fetch nach Teamregel → push → status
```

## Erklärung

Arbeite auf dem richtigen Branch, halte Änderungen klein und prüfe vor
jedem Commit die Staging Area. Bei Teamarbeit wird vor dem Push
synchronisiert; Konflikte werden bewusst gelöst und getestet.

## Beispiel

```bash
git status
git diff
git add 03_Developer_BIB/04_PHP
git diff --staged
git commit -m "PHP-Kapitel zu Prepared Statements erweitern"
git pull --rebase
git push
git status
```

## Typische Fehler

- Direkt `git add . && git commit` ohne Kontrolle.
- Auf `main` wird trotz vereinbarter Feature-Branches gearbeitet.
- Remote-Änderungen werden ignoriert.
- Konfliktmarker bleiben in Dateien.
- Nach Merge oder Pull werden Tests nicht ausgeführt.

## Merksatz

**Erst verstehen, dann auswählen, dann committen, dann synchronisieren.**

## Verwandte Themen

- [Täglicher Git-Workflow](16_Taeglicher_Git_Workflow.md)
- [Best Practices](04_Best_Practices.md)
- [Git Push](13_Git_Push.md)

## Prüfungswissen

Ein Prozessdiagramm mit Working Tree, Staging, lokalem Repository und
Remote sollte sicher erklärt werden können.
