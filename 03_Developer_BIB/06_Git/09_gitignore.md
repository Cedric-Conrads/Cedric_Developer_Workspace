# .gitignore

## Was ist das?

`.gitignore` enthält Muster für untracked Dateien, die Git standardmäßig
nicht zur Versionsverwaltung anbieten soll.

## Warum brauche ich das?

Lokale Konfiguration, Abhängigkeiten, Caches, Logs und Secrets sollen das
Repository nicht unnötig belasten oder gefährden.

## Syntax

```gitignore
.env
vendor/
node_modules/
*.log
.idea/
.vscode/
```

## Erklärung

`.gitignore` wirkt nicht rückwirkend auf bereits verfolgte Dateien. Eine
bereits committed `.env` bleibt in der Historie; ein Geheimnis muss
widerrufen/rotiert werden. Eine Beispielkonfiguration wie `.env.example`
kann ohne echte Secrets committed werden.

## Beispiel

```bash
git check-ignore -v .env
git status --short
```
`check-ignore` zeigt, welche Regel eine Datei ignoriert.

## Typische Fehler

- `.gitignore` wird erst nach dem Secret-Commit ergänzt.
- Benötigte Lockfiles werden pauschal ignoriert.
- Build-Ausgaben oder Abhängigkeiten werden unnötig versioniert.
- Zu breite Muster ignorieren Quellcode.
- Teamrelevante Editor-Einstellungen werden ohne Absprache ausgeschlossen.

## Merksatz

**Ignorieren verhindert neue Aufnahme – es löscht keine Historie.**

## Verwandte Themen

- [Git – Best Practices](04_Best_Practices.md)
- [Security – Grundlagen](../11_Security/01_Grundlagen.md)
- [Docker – Grundlagen](../12_Docker/01_Grundlagen.md)

## Prüfungswissen

Geheimnisschutz, Build-Artefakte und reproduzierbare Konfiguration sind
prüfungsrelevant.
