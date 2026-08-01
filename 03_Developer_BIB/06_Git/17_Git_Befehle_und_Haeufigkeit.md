# Git-Befehle und Häufigkeit

## Was ist das?

Manche Git-Befehle richten ein Repository einmalig ein, andere gehören zur
täglichen Kontrolle oder werden pro Branch verwendet.

## Warum brauche ich das?

Die Einordnung verhindert wiederholtes `init`/`remote add` und zeigt,
welche Kontrollbefehle jederzeit sicher sind.

## Syntax

| Befehl | Typische Häufigkeit |
| --- | --- |
| `git init` | einmal für ein neues lokales Repository |
| `git remote add origin ...` | einmal je Remote-Name |
| `git status` | beliebig oft |
| `git diff` | vor dem Staging/Commit |
| `git add` | für jede Commit-Auswahl |
| `git commit` | pro abgeschlossenem Teilziel |
| `git push -u ...` | einmal pro neuer Tracking-Zuordnung |
| `git push` | nach neuen lokalen Commits |
| `git fetch` | regelmäßig vor Integration |

## Erklärung

Die Angaben sind Richtlinien, keine harten Limits. Ein Repository kann
mehrere Remotes besitzen und ein Branch kann neu zugeordnet werden.
Kontrollbefehle wie `status`, `diff`, `log` und `remote -v` verändern
normalerweise nichts.

## Beispiel

```bash
git status
git diff
git log --oneline -5
```
Diese drei Befehle dürfen Teil jeder Arbeitsphase sein.

## Typische Fehler

- `git init` wird nach jedem Start wiederholt.
- `remote add origin` wird trotz bestehendem `origin` erneut ausgeführt.
- Commit erfolgt nach jeder einzelnen Tastatureingabe statt nach einem Teilziel.
- Push wird erwartet, obwohl keine neuen Commits existieren.

## Merksatz

**Einrichtung selten, Kontrolle oft, Commits nach sinnvollen Teilzielen.**

## Verwandte Themen

- [Wichtige Git-Befehle](02_Wichtige_Befehle.md)
- [Täglicher Workflow](16_Taeglicher_Git_Workflow.md)
- [Remote Add Origin](19_Git_Remote_Add_Origin.md)

## Prüfungswissen

Wirkung ist wichtiger als auswendig gelernte Häufigkeit.
