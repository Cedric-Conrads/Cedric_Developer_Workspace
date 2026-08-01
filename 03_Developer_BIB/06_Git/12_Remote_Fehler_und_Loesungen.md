# Git-Remote – Fehler und Lösungen

## Was ist das?

Remote-Fehler betreffen Verbindung, Authentisierung, Branch-Zuordnung oder
voneinander abweichende Historien.

## Warum brauche ich das?

Lokale Commits können korrekt sein, obwohl Push oder Pull scheitert. Die
Remote-Konfiguration muss getrennt geprüft werden.

## Syntax

```bash
git remote -v
git branch -vv
git fetch --all --prune
git status
```

## Erklärung

- „remote origin already exists“: vorhandenes Remote prüfen, nicht doppelt anlegen.
- „repository not found“: URL, Berechtigung und Anmeldung prüfen.
- „non-fast-forward“: Remote enthält neue Commits; fetchen/pullen und integrieren.
- „no upstream branch“: einmalig `git push -u origin <branch>`.
- falsche Remote-URL: mit `git remote set-url origin <url>` korrigieren.

## Beispiel

```bash
git remote get-url origin
git fetch origin
git log --oneline --graph --decorate --all -15
```
Erst nach Sichtprüfung wird integriert.

## Typische Fehler

- Remote wird gelöscht, obwohl nur die URL falsch ist.
- Push wird mit `--force` erzwungen.
- Authentisierungsdaten werden im Repository gespeichert.
- `origin` wird als zwingender Servername statt als Konvention verstanden.

## Merksatz

**Remote prüfen, Historien vergleichen, dann kontrolliert integrieren.**

## Verwandte Themen

- [Remote Add Origin](19_Git_Remote_Add_Origin.md)
- [Upstream Branch](18_Upstream_Branch.md)
- [Git Push](13_Git_Push.md)

## Prüfungswissen

Lokales/entferntes Repository, Tracking Branch und Konfliktursachen
unterscheiden können.
