# Git – Fehler und Lösungen

## Was ist das?

Git-Fehler entstehen meist durch falsches Verzeichnis, unklaren Status,
fehlende Identität, Konflikte oder eine unerwartete Historie.

## Warum brauche ich das?

Git meldet normalerweise genau, welchen Zustand es erkannt hat. Lesen und
Prüfen ist sicherer als vorschnelle Rücksetzbefehle.

## Syntax

```text
1. Fehlermeldung vollständig lesen
2. pwd / aktuelles Verzeichnis prüfen
3. git status
4. git log --oneline --decorate -10
5. Remote/Branch prüfen
6. erst danach gezielt handeln
```

## Erklärung

- `fatal: not a git repository`: in richtigen Ordner wechseln.
- `nothing to commit`: nichts gestagt oder keine Änderung vorhanden.
- `untracked files`: Datei ist noch nicht verfolgt.
- Merge-Konflikt: Marker bearbeiten, testen, `git add`, Commit fortsetzen.
- Push rejected: Remote enthält unbekannte Commits; zuerst synchronisieren.
- Autor unbekannt: `user.name` und `user.email` korrekt konfigurieren.

## Beispiel

```bash
git status
git branch --show-current
git remote -v
git log --oneline --graph --decorate --all -10
```
Diese Befehle verändern nichts und liefern den nötigen Kontext.

## Typische Fehler

- Unbekannte Befehle aus dem Internet blind ausführen.
- Mit `reset --hard` oder Force Push reagieren, ohne Verlustfolgen zu verstehen.
- Konfliktmarker nur löschen statt fachlich zu lösen.
- Fehlermeldung ohne vorherige Befehle und Status dokumentieren.

## Merksatz

**Bei Git-Problemen zuerst Zustand sichtbar machen, nicht Historie zerstören.**

## Verwandte Themen

- [Remote-Fehler und Lösungen](12_Remote_Fehler_und_Loesungen.md)
- [Git Status](03_Git_Status.md)
- [Git Merge](08_Git_Merge.md)

## Prüfungswissen

Fehlerdiagnose, Konfliktlösung und Schutz vor Datenverlust sind
praxisrelevant.
