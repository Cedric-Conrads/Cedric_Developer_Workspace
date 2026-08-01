# Git – Grundlagen

## Was ist das?

Git ist ein verteiltes Versionsverwaltungssystem. Es speichert
nachvollziehbare Projektstände, Vergleiche und Entwicklungszweige lokal in
einem Repository.

## Warum brauche ich das?

Mit Git kannst du Änderungen kontrolliert sichern, Ursachen finden,
Funktionen getrennt entwickeln und im Team arbeiten. Git ist nicht
dasselbe wie GitHub: Git ist das System, GitHub eine mögliche Plattform.

## Syntax

```text
Working Tree → git add → Staging Area → git commit → lokales Repository
                                               → git push → Remote
```

## Erklärung

- Working Tree: aktuelle Dateien, an denen du arbeitest.
- Staging Area/Index: Auswahl für den nächsten Commit.
- Commit: gespeicherter Projektstand mit Nachricht, Autor und Zeit.
- Branch: beweglicher Zeiger auf eine Entwicklungslinie.
- Remote: benannte Verbindung zu einem anderen Repository.
- `.git`: internes Repository-Verzeichnis; nicht manuell bearbeiten.

Git speichert Commits, nicht „einfach automatisch jede Dateiänderung“.

## Beispiel

```bash
git status
git add 01_Projekte/011_Lagerverwaltung
git commit -m "Artikelbearbeitung ergänzen"
git push
```

## Typische Fehler

- Git und GitHub werden gleichgesetzt.
- `git add` wird als dauerhafte Speicherung verstanden.
- Große Binärdateien und Secrets werden ungeprüft committed.
- `.git` wird kopiert, gelöscht oder manuell verändert.
- Ein Commit enthält mehrere unabhängige Themen.

## Merksatz

**Working Tree arbeitet, Staging wählt aus, Commit speichert lokal,
Push überträgt.**

## Verwandte Themen

- [Wichtige Git-Befehle](02_Wichtige_Befehle.md)
- [Git-Workflow](03_Workflow.md)
- [GitHub – Grundlagen](../07_GitHub/01_Grundlagen.md)

## Prüfungswissen

Versionsverwaltung, Repository, Staging, Commit, Branch, Merge und Remote
sind prüfungs- und berufsrelevante Grundbegriffe.
