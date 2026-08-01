# git push

## Was ist das?

`git push` überträgt lokale Commits und aktualisiert eine Referenz im
Remote-Repository.

## Warum brauche ich das?

Erst durch Push werden lokale Commits für das Team oder auf GitHub
verfügbar.

## Syntax

```bash
git push
git push -u origin main
```

## Erklärung

Push überträgt Commits, nicht bloß uncommittete Dateiänderungen. Ohne
Upstream müssen Remote und Branch angegeben werden. Der Server kann Pushes
wegen fehlender Rechte, Branchschutz oder neuer Remote-Commits ablehnen.

## Beispiel

```bash
git status
git log --oneline origin/main..main
git push
```
Die Log-Abfrage zeigt Commits, die lokal vor `origin/main` liegen.

## Typische Fehler

- Nach Dateiänderung wird ohne Commit gepusht.
- Push wird mit Backup aller untracked Dateien verwechselt.
- Ablehnung wird per Force Push übergangen.
- Falscher Branch oder falsches Remote wird aktualisiert.

## Merksatz

**Commit speichert lokal; Push veröffentlicht Commits am Remote.**

## Verwandte Themen

- [Upstream Branch](18_Upstream_Branch.md)
- [Remote Add Origin](19_Git_Remote_Add_Origin.md)
- [GitHub – Grundlagen](../07_GitHub/01_Grundlagen.md)

## Prüfungswissen

Lokale und Remote-Historie sowie Push-Voraussetzungen erklären können.
