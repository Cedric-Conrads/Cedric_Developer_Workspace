# git status

## Was ist das?

`git status` zeigt Branch, Tracking-Beziehung und Zustand der Dateien im
Working Tree und in der Staging Area.

## Warum brauche ich das?

Es ist der wichtigste ungefährliche Kontrollbefehl vor und nach nahezu
jeder Git-Aktion.

## Syntax

```bash
git status
git status --short
```

## Erklärung

Typische Kategorien:

- untracked: noch nicht von Git verfolgt.
- modified, not staged: geändert, aber nicht für Commit ausgewählt.
- changes to be committed: gestagt.
- ahead/behind: lokaler Branch hat mehr/weniger bekannte Commits als Remote.
- working tree clean: keine offenen Änderungen im Working Tree oder Index.

„Clean“ bedeutet nicht automatisch, dass alles gepusht wurde.

## Beispiel

```text
M  datei.php   → im Index geändert
 M datei.css   → nur im Working Tree geändert
?? notiz.txt   → untracked
```
Bei `--short` sind die beiden Spalten für Index und Working Tree relevant.

## Typische Fehler

- „working tree clean“ wird mit „Remote ist synchron“ verwechselt.
- Untracked Dateien werden übersehen.
- Statusausgabe wird nicht vollständig gelesen.
- Im falschen Repository wird kontrolliert.

## Merksatz

**`git status` beantwortet: Wo bin ich und was ist offen?**

## Verwandte Themen

- [Git Add](04_Git_Add.md)
- [Git Log](06_Git_Log.md)
- [Remote-Fehler](12_Remote_Fehler_und_Loesungen.md)

## Prüfungswissen

Statuskategorien und Staging-Unterschied sind grundlegendes Praxiswissen.
