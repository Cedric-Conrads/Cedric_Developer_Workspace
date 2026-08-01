# GitHub – Grundlagen

## Was ist das?

GitHub ist eine Plattform zum Hosten von Git-Repositories und für
Zusammenarbeit, Reviews, Issues, Automatisierung und Releases. Git bleibt
das lokale Versionsverwaltungssystem.

## Warum brauche ich das?

GitHub macht Projekte für Teams erreichbar, dokumentiert Entscheidungen
und kann Qualitätsschritte wie Tests automatisieren. Für dein Portfolio
zeigt es nicht nur Code, sondern auch Arbeitsweise und Entwicklung.

## Syntax

```bash
git remote add origin https://github.com/benutzer/projekt.git
git push -u origin main
```

Typische GitHub-Bausteine:

```text
Repository → Issues → Branch → Pull Request → Review/Checks → Merge → Release
```

## Erklärung

- Repository: Projekt mit Git-Historie und Plattformfunktionen.
- README: Einstieg, Zweck, Installation und Nutzung.
- Issue: nachvollziehbare Aufgabe, Fehler oder Diskussion.
- Pull Request: vorgeschlagene Änderung zwischen Branches.
- Review: fachliche und technische Prüfung.
- Actions: automatisierte Workflows wie Tests oder Deployment.
- Release/Tag: benannter veröffentlichter Stand.

Ein öffentliches Repository darf keine Zugangsdaten, personenbezogenen
Daten oder fremde vertrauliche Inhalte enthalten.

## Beispiel

Für die Lagerverwaltung:

```text
Issue: „Artikelsuche ergänzen“
Branch: feature/artikelsuche
Commits: kleine Teilziele
Pull Request: Beschreibung + Testschritte + Screenshot
Merge: erst nach erfolgreichen Checks
```

## Typische Fehler

- GitHub wird als automatisches Backup uncommitteter Dateien verstanden.
- README und Installationsschritte fehlen.
- Alle Arbeiten erfolgen direkt auf `main`.
- Secrets oder `.env` werden veröffentlicht.
- Repository-Lizenz wird mit Besitz fremden Codes verwechselt.

## Merksatz

**Git verwaltet Versionen; GitHub organisiert Zusammenarbeit rund um Git.**

## Verwandte Themen

- [Pull Requests und Issues](02_Pull_Requests_Issues_und_Reviews.md)
- [Actions und Sicherheit](03_Actions_und_Sicherheit.md)
- [Git – Grundlagen](../06_Git/01_Grundlagen.md)

## Prüfungswissen

Versionsverwaltung, Kollaboration, Review, Dokumentation und CI/CD sind
berufs- und projektprüfungsrelevant.
