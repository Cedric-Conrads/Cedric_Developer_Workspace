# Nach einer Projektänderung

## Was ist das?

Nach einer Codeänderung folgt eine kurze Kontroll- und Sicherungssequenz,
bevor sie als geteilter Projektstand gilt.

## Warum brauche ich das?

Der Ablauf verhindert, dass fehlerhafte, unvollständige oder sensible
Inhalte unbeabsichtigt veröffentlicht werden.

## Syntax

```text
testen → status → diff → add → diff --staged
        → commit → synchronisieren → push → status
```

## Erklärung

Ein Commit soll ein abgeschlossenes Teilziel enthalten. Vor dem Staging
werden Tests ausgeführt; vor dem Commit wird der tatsächliche Diff geprüft.
Nach Push zeigt `status`, ob Working Tree und Tracking-Branch den erwarteten
Zustand besitzen.

## Beispiel

```bash
git status
git diff
git add .
git diff --staged
git commit -m "Artikelbearbeitung vervollständigen"
git push
git status
```

## Typische Fehler

- Tests werden erst nach dem Push ausgeführt.
- `add .` wird ohne Sichtprüfung genutzt.
- Commit-Nachricht beschreibt nicht den Inhalt.
- „clean“ wird mit erfolgreicher Remote-Synchronisierung verwechselt.

## Merksatz

**Änderung prüfen, gezielt committen, kontrolliert teilen.**

## Verwandte Themen

- [Täglicher Workflow](16_Taeglicher_Git_Workflow.md)
- [Git Status](03_Git_Status.md)
- [Git Push](13_Git_Push.md)

## Prüfungswissen

Eine nachvollziehbare Versions- und Teststrategie stärkt jede
Projektdokumentation.
