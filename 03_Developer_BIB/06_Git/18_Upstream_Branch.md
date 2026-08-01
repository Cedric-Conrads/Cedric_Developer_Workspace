# Upstream Branch und git push -u

## Was ist das?

Ein Upstream Branch ist die voreingestellte Remote-Referenz, mit der ein
lokaler Branch verglichen und synchronisiert wird.

## Warum brauche ich das?

Mit der Tracking-Zuordnung reichen später oft `git push` und `git pull`
ohne zusätzliche Remote- und Branchnamen.

## Syntax

```bash
git push -u origin main
git push --set-upstream origin feature/artikelsuche
```

## Erklärung

`-u` ist die Kurzform von `--set-upstream`. Die Zuordnung gilt für den
lokalen Branch und wird normalerweise beim ersten Push eines neuen
Branches gesetzt. Sie ist keine dauerhafte „Verbindung des ganzen
Repositories“, sondern eine Branch-Beziehung.

## Beispiel

```bash
git branch -vv
git status
```
`branch -vv` zeigt Tracking-Ziele und relative Commitstände.

## Typische Fehler

- Upstream wird mit Remote selbst verwechselt.
- Jeder Push verwendet erneut `-u`, obwohl die Zuordnung existiert.
- Lokaler Branch wird versehentlich mit falschem Remote-Branch gekoppelt.
- `origin/main` wird als lokaler Branch behandelt.

## Merksatz

**`-u` bedeutet: Merke dir das Standardziel dieses Branches.**

## Verwandte Themen

- [Git Push](13_Git_Push.md)
- [Remote Add Origin](19_Git_Remote_Add_Origin.md)
- [Remote-Fehler](12_Remote_Fehler_und_Loesungen.md)

## Prüfungswissen

Remote, Remote-Tracking-Branch und Upstream unterscheiden können.
