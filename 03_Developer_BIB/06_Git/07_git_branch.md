# Git-Branches

## Was ist das?

Ein Branch ist ein beweglicher Name für eine Entwicklungslinie. Neue
Commits verschieben den aktuell ausgecheckten Branch weiter.

## Warum brauche ich das?

Branches trennen Features, Fehlerkorrekturen und Experimente vom
Hauptzweig, bis die Arbeit geprüft und integriert ist.

## Syntax

```bash
git branch
git switch -c feature/artikelsuche
git switch main
git branch -d feature/artikelsuche
```

## Erklärung

Ein Branch ist kein vollständiger neuer Projektordner, sondern zunächst
ein leichter Zeiger auf einen Commit. `git switch -c` erstellt und
aktiviert einen Branch. Löschen ist erst nach sicherer Integration sinnvoll.

## Beispiel

```text
main:      A---B-------E
                   /
feature:          C---D
```
Ein Merge verbindet die Entwicklungslinien.

## Typische Fehler

- Änderungen im Working Tree verhindern einen Wechsel.
- Arbeit erfolgt direkt auf einem geschützten `main`.
- Branch wird vor Merge oder Sicherung gelöscht.
- Lokaler und gleichnamiger Remote-Branch werden gleichgesetzt.

## Merksatz

**`main` ist der Stamm; Feature-Branches sind zeitweise Entwicklungsäste.**

## Verwandte Themen

- [Git Merge](08_Git_Merge.md)
- [Git Push](13_Git_Push.md)
- [GitHub – Grundlagen](../07_GitHub/01_Grundlagen.md)

## Prüfungswissen

Branching, parallele Entwicklung und Integrationsstrategie sind wichtige
Teamthemen.
