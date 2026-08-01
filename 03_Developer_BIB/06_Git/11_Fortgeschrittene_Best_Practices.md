# Git – Fortgeschrittene Best Practices

## Was ist das?

Fortgeschrittene Git-Praxis verbindet saubere Historie, sichere
Zusammenarbeit, Reviews, Automatisierung und eine vereinbarte
Branch-Strategie.

## Warum brauche ich das?

Sobald mehrere Personen oder Releases beteiligt sind, reichen einzelne
Commits ohne gemeinsamen Prozess nicht mehr aus.

## Syntax

```text
Issue → Branch → kleine Commits → Push → Pull Request
      → automatisierte Tests → Review → Merge → Branch löschen
```

## Erklärung

Vereinbart Branch-Namen, Review-Regeln, Merge-Strategie und
Commitkonventionen. Schützt `main`, verlangt erfolgreiche Tests und nutzt
Tags für Releases. Verändert geteilte Historie nur bewusst; ein neuer
Korrektur-Commit ist oft sicherer als ein Force Push.

## Beispiel

```bash
git switch -c fix/negative-bestaende
git commit -m "Negative Bestände serverseitig ablehnen"
git push -u origin fix/negative-bestaende
```
Danach folgt der Pull Request mit Test- und Review-Nachweis.

## Typische Fehler

- Teammitglieder nutzen unterschiedliche Merge-Strategien ohne Absprache.
- Pull Requests sind so groß, dass sie kaum prüfbar sind.
- Tests laufen erst nach dem Merge.
- Versions-Tags werden nachträglich verschoben.
- Force Push auf gemeinsam genutzte Branches überschreibt Arbeit.

## Merksatz

**Der Git-Prozess ist eine Teamvereinbarung, kein einzelner Befehl.**

## Verwandte Themen

- [Git – Best Practices](04_Best_Practices.md)
- [GitHub – Grundlagen](../07_GitHub/01_Grundlagen.md)
- [Design Patterns – Grundlagen](../14_Design_Patterns/01_Grundlagen.md)

## Prüfungswissen

Qualitätssicherung, Review, CI/CD und Konfigurationsmanagement sind
relevante Projekt- und Prüfungsbegriffe.
