# Git-Commit – Konzept

## Was ist das?

Ein Commit ist ein unveränderlich identifizierter Projektstand mit
Metadaten und Verweis auf vorherige Commits.

## Warum brauche ich das?

Kleine, fachlich zusammenhängende Commits machen Entwicklung,
Code-Reviews, Fehlersuche und Rücknahmen nachvollziehbar.

## Syntax

```bash
git commit -m "Artikelsuche mit LIKE ergänzen"
```

## Erklärung

Ein Commit enthält den Snapshot der gestagten Inhalte, Autor,
Zeitstempel, Nachricht und Eltern-Commit. Die eindeutige Commit-ID ist ein
Hash. Nicht gestagte Änderungen bleiben im Working Tree und gehören nicht
automatisch zum Commit.

Gute Nachrichten beschreiben in Befehlsform, was der Commit bewirkt:
„Validierung für negative Bestände ergänzen“ statt „Sachen geändert“.

## Beispiel

```text
Schlecht: update
Besser: Artikelsuche ergänzen
Gut: Artikelsuche per Prepared Statement absichern
```

## Typische Fehler

- Ein Commit mischt Bugfix, Formatierung und neue Funktion.
- Nachricht ist leer oder nichtssagend.
- Ungeprüfte gestagte Dateien werden aufgenommen.
- Zugangsdaten werden committed; späteres Löschen reicht nicht aus der Historie.
- Commit wird mit Backup oder Remote-Upload gleichgesetzt.

## Merksatz

**Ein Commit ist ein beschrifteter, lokaler Meilenstein der ausgewählten Änderungen.**

## Verwandte Themen

- [git commit – Befehl](05_Git_Commit_Befehl.md)
- [Git Add](04_Git_Add.md)
- [Git Log](06_Git_Log.md)

## Prüfungswissen

Atomare Commits, aussagekräftige Nachrichten und Nachvollziehbarkeit sind
wichtige Qualitätsmerkmale.
