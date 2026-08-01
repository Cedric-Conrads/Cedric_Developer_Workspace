# git init

## Was ist das?

`git init` legt in einem bestehenden Ordner ein neues lokales
Git-Repository an.

## Warum brauche ich das?

Der Befehl startet die Versionsverwaltung für ein neues lokales Projekt.
Er verbindet das Projekt noch nicht mit GitHub.

## Syntax

```bash
git init
```

## Erklärung

Git erzeugt das interne Verzeichnis `.git`. Ab dann erkennt Git Änderungen
im Working Tree. Der Befehl ist normalerweise einmal pro Repository nötig.
Für ein bereits vorhandenes Remote-Repository wird stattdessen meist
`git clone` verwendet.

## Beispiel

```bash
cd Cedric_Developer_Workspace
git init
git status
```

## Typische Fehler

- `git init` wird in einem falschen Unterordner ausgeführt und erzeugt ein
  verschachteltes Repository.
- Es wird erwartet, dass Dateien sofort committed sind.
- Nach `clone` wird unnötig erneut `init` ausgeführt.
- `.git` wird versehentlich als normale Projektdatei behandelt.

## Merksatz

**`git init` macht genau den aktuellen Ordner zum Repository.**

## Verwandte Themen

- [Git – Grundlagen](01_Grundlagen.md)
- [Git Clone](14_Git_Clone.md)
- [Remote Add Origin](19_Git_Remote_Add_Origin.md)

## Prüfungswissen

Kenne den Unterschied zwischen `init` für ein neues lokales Projekt und
`clone` für eine vorhandene Historie.
