# git commit – Befehl

## Was ist das?

`git commit` erstellt aus der aktuellen Staging Area einen neuen lokalen
Commit.

## Warum brauche ich das?

Der Befehl macht eine geprüfte Änderung als benannten Meilenstein
nachvollziehbar.

## Syntax

```bash
git commit -m "Dynamische Lagerbestandstabelle ergänzen"
```
`-m` steht für „message“.

## Erklärung

Ohne `-m` öffnet Git den konfigurierten Editor für eine längere Nachricht.
`git commit -a` nimmt nur Änderungen bereits verfolgter Dateien automatisch
auf und überspringt untracked Dateien; es ersetzt keine bewusste Prüfung.

## Beispiel

```bash
git diff --staged
git commit -m "SELECT-Abfrage mit Prepared Statement absichern"
git show --stat --oneline HEAD
```

## Typische Fehler

- Nachricht beschreibt Tätigkeit statt Wirkung („gearbeitet“).
- Staging Area ist leer.
- Untracked Datei wurde nicht hinzugefügt.
- Falsche Änderungen sind gestagt.
- `--amend` wird auf einen bereits geteilten Commit angewendet.

## Merksatz

**Commit speichert genau den geprüften Inhalt der Staging Area lokal.**

## Verwandte Themen

- [Git-Commit – Konzept](03_Commit.md)
- [Git Add](04_Git_Add.md)
- [Git Log](06_Git_Log.md)

## Prüfungswissen

Wirkung von `-m`, Staging und lokalem Commit erklären können.
