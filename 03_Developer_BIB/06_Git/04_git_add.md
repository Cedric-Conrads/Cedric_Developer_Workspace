# git add und Staging Area

## Was ist das?

`git add` überträgt ausgewählte Änderungen in die Staging Area für den
nächsten Commit.

## Warum brauche ich das?

Die Staging Area erlaubt, aus mehreren lokalen Änderungen einen sauberen,
fachlich zusammenhängenden Commit zusammenzustellen.

## Syntax

```bash
git add datei.php
git add ordner/
git add -p
git add .
```

## Erklärung

`git add` speichert noch keinen Commit und verschiebt keine Datei. Es
aktualisiert den Index mit dem gewählten Inhalt. Nach weiteren Änderungen
kann dieselbe Datei gleichzeitig gestagte und nicht gestagte Teile haben.
`git add -p` erlaubt die Auswahl einzelner Blöcke.

## Beispiel

```bash
git add -p
git diff --staged
git commit -m "Validierung für Artikelnummer ergänzen"
```

## Typische Fehler

- `git add .` nimmt ungewollte Dateien auf.
- Nach weiteren Änderungen wird angenommen, die ganze Datei sei weiterhin gestagt.
- `add` wird mit Commit oder Push verwechselt.
- Staging wird nicht mit `diff --staged` kontrolliert.

## Merksatz

**`git add` legt die Auswahl auf die Palette; `git commit` fährt sie ins Lager.**

## Verwandte Themen

- [Git-Commit – Konzept](03_Commit.md)
- [git commit – Befehl](05_Git_Commit_Befehl.md)
- [Lagerbeispiel](15_Git_Workflow_Lagerbeispiel.md)

## Prüfungswissen

Working Tree und Staging Area sicher unterscheiden.
