# Warum kommt das Remote vor dem Push?

## Was ist das?

Ein Push benötigt ein bekanntes Zielrepository und einen Zielbranch.
`git remote add` speichert die Repository-Adresse; `git push` überträgt
anschließend Commits dorthin.

## Warum brauche ich das?

Ohne Ziel kann Git nicht entscheiden, wohin lokale Historie veröffentlicht
werden soll.

## Syntax

```bash
git remote add origin <repository-url>
git push -u origin main
```

## Erklärung

Die Reihenfolge betrifft ein neu lokal gestartetes Repository. Bei
`git clone` wird `origin` normalerweise automatisch eingerichtet. Sind
mehrere Remotes vorhanden, muss das gewünschte Ziel eindeutig gewählt
werden.

## Beispiel

```text
1. Lieferadresse speichern: git remote add origin ...
2. Branch-Ziel merken:       git push -u origin main
3. Später übertragen:        git push
```

## Typische Fehler

- Nach Clone wird Remote unnötig erneut angelegt.
- `origin` wird als Pflichtname verstanden.
- Push erfolgt zum falschen Remote.
- Remote-Adresse enthält sensible Zugangsdaten.

## Merksatz

**Erst die Lieferadresse, dann das Paket verschicken.**

## Verwandte Themen

- [Remote Add Origin](19_Git_Remote_Add_Origin.md)
- [Git Push](13_Git_Push.md)
- [Upstream Branch](18_Upstream_Branch.md)

## Prüfungswissen

Verstehe den Unterschied zwischen Repository-Adresse und
Branch-Tracking-Ziel.
