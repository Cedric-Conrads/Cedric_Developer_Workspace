# git log

## Was ist das?

`git log` zeigt die Commit-Historie und ihre Beziehungen.

## Warum brauche ich das?

Damit findest du Änderungen, Autoren, Branch-Verläufe und geeignete
Vergleichspunkte.

## Syntax

```bash
git log
git log --oneline --graph --decorate --all
git log -- path/zur/datei.php
```

## Erklärung

`--oneline` verkürzt die Darstellung, `--graph` zeigt Verzweigungen,
`--decorate` Branch- und Tag-Namen und `--all` bekannte Referenzen. Mit
Pfadfilter lässt sich die Historie einer Datei untersuchen.

## Beispiel

```bash
git log --oneline --graph --decorate -15
git show <commit-id>
```

## Typische Fehler

- Commit-ID wird mit Dateiversion verwechselt.
- Nur der aktuelle Branch wird betrachtet, obwohl `--all` nötig ist.
- Historie wird verändert, obwohl nur eine Anzeige benötigt wird.
- Sehr lange Ausgabe wird ohne Filter durchsucht.

## Merksatz

**`git log` ist die Landkarte der gespeicherten Projektstände.**

## Verwandte Themen

- [Git-Commit – Konzept](03_Commit.md)
- [Git Branch](07_Git_Branch.md)
- [Git Merge](08_Git_Merge.md)

## Prüfungswissen

Commit-Historie und Branch-Graph lesen können.
