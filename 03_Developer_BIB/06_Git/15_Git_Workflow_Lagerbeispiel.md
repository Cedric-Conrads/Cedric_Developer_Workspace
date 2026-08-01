# Git-Workflow – Lagerbeispiel

## Was ist das?

Das Lagerbeispiel überträgt die Git-Bereiche auf einen bekannten
Warenfluss: Arbeitsplatz, Palette, Lager und Versandziel.

## Warum brauche ich das?

Die Analogie hilft, Staging, Commit und Push auseinanderzuhalten.

## Syntax

```text
Working Tree = Arbeitsfläche
git add      = Ware auf Palette auswählen
Staging Area = gepackte Palette
git commit   = Palette als Lagerstand verbuchen
Repository   = lokales Lager
git push     = verbuchte Lieferung zum Remote senden
```

## Erklärung

Die Palette enthält nur, was ausdrücklich gestagt wurde. Nach dem Commit
ist der Stand lokal verbucht, aber noch nicht automatisch auf GitHub.
Neue Änderungen nach dem Packen können außerhalb der Palette bleiben.

## Beispiel

```bash
git status
git add lagerbestand.php
git diff --staged
git commit -m "Artikelsuche im Lagerbestand ergänzen"
git push
```

## Typische Fehler

- `git add` wird als Transport zu GitHub verstanden.
- Working Tree und lokales Repository werden gleichgesetzt.
- Alles wird auf die Palette gelegt, ohne Inhalt zu prüfen.
- Ein sauberer Lagerstand wird mit synchronisiertem Remote verwechselt.

## Merksatz

**Palette auswählen, lokal verbuchen, danach gezielt versenden.**

## Verwandte Themen

- [Git-Grundlagen](01_Grundlagen.md)
- [Git Add](04_Git_Add.md)
- [Git Push](13_Git_Push.md)

## Prüfungswissen

Die Analogie ist eine Lernhilfe; in der Prüfung müssen die echten Begriffe
Working Tree, Index, Commit und Remote genannt werden.
