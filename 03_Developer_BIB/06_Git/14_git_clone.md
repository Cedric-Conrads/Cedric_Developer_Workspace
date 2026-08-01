# git clone

## Was ist das?

`git clone` erstellt eine lokale Arbeitskopie eines vorhandenen
Repositories einschließlich Historie und Remote-Konfiguration.

## Warum brauche ich das?

Damit beginnst du die Arbeit an einem vorhandenen Projekt auf einem neuen
Rechner oder in einem neuen Ordner.

## Syntax

```bash
git clone <repository-url>
git clone <repository-url> zielordner
```

## Erklärung

Clone lädt nicht nur den aktuellen Dateistand, sondern Git-Objekte,
Commit-Historie und bekannte Branch-Informationen. Üblicherweise wird das
Quell-Repository als `origin` eingetragen und ein lokaler Standardbranch
ausgecheckt.

## Beispiel

```bash
git clone https://github.com/beispiel/projekt.git
cd projekt
git remote -v
git status
```

## Typische Fehler

- Nach Clone wird noch `git init` ausgeführt.
- Ein vorhandener Zielordner enthält kollidierende Dateien.
- ZIP-Download wird mit Clone verwechselt; eine ZIP besitzt keine Git-Historie.
- Private URL wird ohne passende Berechtigung verwendet.

## Merksatz

**Clone kopiert Dateien, Historie und Verbindung – ZIP nur Dateien.**

## Verwandte Themen

- [Git Init](02_Git_Init.md)
- [Remote Add Origin](19_Git_Remote_Add_Origin.md)
- [GitHub – Grundlagen](../07_GitHub/01_Grundlagen.md)

## Prüfungswissen

`clone`, `pull`, `fetch` und ZIP-Download unterscheiden können.
