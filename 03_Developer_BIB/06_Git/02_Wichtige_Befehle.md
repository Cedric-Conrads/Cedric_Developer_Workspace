# Git – Wichtige Befehle

## Was ist das?

Git-Befehle lesen den Zustand, wählen Änderungen aus, erstellen Commits,
verwalten Branches und synchronisieren Repositories.

## Warum brauche ich das?

Ein kleiner, sicherer Befehlssatz deckt den täglichen Entwicklungsworkflow
ab und verhindert unkontrollierte Änderungen.

## Syntax

```bash
git status
git diff
git add <datei>
git diff --staged
git commit -m "Kurze Nachricht"
git log --oneline --graph --decorate
git switch -c feature/artikelsuche
git merge feature/artikelsuche
git fetch
git pull
git push
```

## Erklärung

- `status` zeigt Kategorien, nicht den vollständigen Inhalt.
- `diff` zeigt nicht gestagte Änderungen.
- `diff --staged` zeigt den geplanten Commit.
- `add` wählt Änderungen für den Commit aus.
- `commit` speichert die gestagte Auswahl lokal.
- `fetch` lädt Remote-Informationen ohne Integration.
- `pull` lädt und integriert.
- `push` überträgt lokale Commits.

Vor mutierenden Befehlen zuerst `status`, `diff` und Branch prüfen.

## Beispiel

```bash
git status
git diff -- 01_Projekte/011_Lagerverwaltung/src/lagerbestand.php
git add 01_Projekte/011_Lagerverwaltung/src/lagerbestand.php
git diff --staged
git commit -m "Lagerbestand nach Artikel filtern"
```

## Typische Fehler

- `git add .` nimmt versehentlich fremde oder sensible Dateien auf.
- `pull`, `fetch` und `clone` werden verwechselt.
- Vor dem Commit wird `diff --staged` nicht geprüft.
- Unklare Nachrichten wie „update“ erklären keine Änderung.
- Befehle werden im falschen Verzeichnis ausgeführt.

## Merksatz

**Status lesen, Diff prüfen, gezielt stagen, verständlich committen.**

## Verwandte Themen

- [Git Status](03_Git_Status.md)
- [Git Add](04_Git_Add.md)
- [Git Commit](05_Git_Commit_Befehl.md)
- [Täglicher Workflow](16_Taeglicher_Git_Workflow.md)

## Prüfungswissen

Erkläre Wirkung und Reichweite eines Befehls, besonders den Unterschied
zwischen lokalem Commit und Remote-Synchronisierung.
