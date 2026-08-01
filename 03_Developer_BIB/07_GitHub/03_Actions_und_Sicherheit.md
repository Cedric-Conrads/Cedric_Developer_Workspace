# GitHub Actions und Repository-Sicherheit

## Was ist das?

GitHub Actions führt definierte Workflows bei Ereignissen wie Push oder Pull
Request aus. Repository-Sicherheit umfasst Rechte, Branchschutz, Secrets
und Abhängigkeitskontrolle.

## Warum brauche ich das?

Automatisierte Tests erkennen Fehler vor dem Merge. Schutzregeln verhindern
direkte oder ungeprüfte Änderungen am Hauptbranch.

## Syntax

```yaml
name: Tests

on:
  pull_request:

jobs:
  test:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4
      - run: php -l 01_Projekte/011_Lagerverwaltung/src/lagerbestand.php
```

## Erklärung

Ein Workflow liegt in `.github/workflows/*.yml`. Jobs laufen auf Runnern,
Steps verwenden Actions oder Shellbefehle. Externe Actions sollten aus
vertrauenswürdiger Quelle stammen und möglichst auf unveränderliche
Versionen festgelegt werden.

Secrets werden in Plattform-Secrets hinterlegt, nicht in YAML oder Code.
Branchschutz kann Reviews und erfolgreiche Checks vor Merge verlangen.

## Beispiel

Bei jedem Pull Request:

1. Repository auschecken.
2. Abhängigkeiten reproduzierbar installieren.
3. Linter und Tests ausführen.
4. Pull Request nur bei Erfolg mergen.

## Typische Fehler

- Secrets werden mit `echo` ausgegeben.
- Workflow besitzt unnötig weitreichende Schreibrechte.
- Fremde Actions werden blind auf beweglichen Tags verwendet.
- Build ist lokal erfolgreich, aber Umgebung nicht reproduzierbar.
- Branchschutz wird für schnelle Änderungen umgangen.

## Merksatz

**Automatisiere Kontrollen – nicht Vertrauen. Vergib nur nötige Rechte.**

## Verwandte Themen

- [Pull Requests und Reviews](02_Pull_Requests_Issues_und_Reviews.md)
- [Security – Grundlagen](../11_Security/01_Grundlagen.md)
- [Docker – Grundlagen](../12_Docker/01_Grundlagen.md)

## Prüfungswissen

CI/CD, Least Privilege, Secrets und automatisierte Qualitätssicherung sind
relevante Prüfungs- und Projektthemen.
