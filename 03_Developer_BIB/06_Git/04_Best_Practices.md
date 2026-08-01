# Git – Best Practices

## Was ist das?

Git-Best-Practices sind Teamregeln für kleine Commits, verständliche
Historien, sichere Inhalte und kontrollierte Branches.

## Warum brauche ich das?

Ein Repository ist gemeinsame Arbeits- und Kommunikationsgrundlage. Gute
Historie reduziert Konflikte und beschleunigt Reviews.

## Syntax

```bash
git status
git diff
git add <gezielte-dateien>
git diff --staged
git commit -m "Negative Bestände serverseitig verhindern"
```

## Erklärung

- Committe kleine, fachlich zusammenhängende Änderungen.
- Prüfe `diff --staged`.
- Nutze sprechende Branch- und Commitnamen.
- Committe keine Secrets, Build-Ausgaben oder lokalen Konfigurationen.
- Synchronisiere regelmäßig nach Teamregel.
- Führe Tests vor Push und Merge aus.
- Verändere veröffentlichte Historie nur nach klarer Absprache.
- Nutze Pull Requests für Reviews.

## Beispiel

```text
feature/artikelsuche
fix/negative-bestaende
docs/php-prepared-statements
```
Branch-Namen zeigen Art und Ziel der Arbeit.

## Typische Fehler

- `main` wird als persönlicher Experimentierbranch genutzt.
- Secrets werden erst nach dem Commit in `.gitignore` eingetragen.
- Große generierte Ordner blähen die Historie auf.
- Force Push überschreibt fremde Arbeit.
- Ungetestete Konfliktlösung wird gemergt.

## Merksatz

**Kleine Commits, klare Namen, keine Geheimnisse, Tests vor Integration.**

## Verwandte Themen

- [Fortgeschrittene Best Practices](11_Fortgeschrittene_Best_Practices.md)
- [Gitignore](09_Gitignore.md)
- [GitHub – Grundlagen](../07_GitHub/01_Grundlagen.md)

## Prüfungswissen

Nachvollziehbarkeit, Teamprozesse, Informationssicherheit und
Qualitätssicherung lassen sich direkt mit Git-Praktiken begründen.
