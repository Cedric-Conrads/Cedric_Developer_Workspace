# HTML – Workflow

## Was ist das?

Der HTML-Workflow ist eine feste Reihenfolge zum Planen, Schreiben und
Prüfen einer Webseite: erst Inhalt und Semantik, danach Gestaltung und
Interaktion.

## Warum brauche ich das?

Ein geordneter Ablauf reduziert chaotische Verschachtelungen, vergessene
Formularattribute und spätere Umbauten. Er trennt Strukturprobleme von
CSS-, JavaScript- und Backendfehlern.

## Syntax

```text
Ziel → Inhalte → semantische Struktur → Attribute/Pfade
     → Validierung → Tastaturtest → CSS → JavaScript/PHP
```

## Erklärung

1. Zweck und Nutzer der Seite festlegen.
2. Inhalte und Zustände skizzieren.
3. HTML-Grundgerüst anlegen.
4. Bereiche mit semantischen Elementen strukturieren.
5. Überschriften, Texte, Listen, Formulare und Tabellen ergänzen.
6. Klassen, eindeutige IDs, `name`-Attribute und Dateipfade prüfen.
7. HTML im Browser und möglichst mit einem Validator prüfen.
8. Seite nur mit Tastatur bedienen.
9. Erst danach CSS, JavaScript und Backend anbinden.

## Beispiel

Bei der Lagerverwaltung beginnst du mit `header`, `main`, Formular und
Ergebnisbereich. Danach prüfst du, ob jedes Feld ein Label und ein
`name`-Attribut besitzt. Erst wenn das Formular strukturell funktioniert,
folgen Design und Datenbanklogik.

## Typische Fehler

- Direkt mit Farben und Abständen beginnen, obwohl Inhalte fehlen.
- Alle Bereiche mit beliebigen `div`-Containern bauen.
- Nur die Maus testen und Tastaturnavigation vergessen.
- Pfade erst ganz am Ende prüfen.
- Mehrere Fehler gleichzeitig ändern, sodass die Ursache unklar bleibt.

## Merksatz

**Erst Bedeutung und Struktur, dann Design und Verhalten.**

## Verwandte Themen

- [HTML – Best Practices](04_Best_Practices.md)
- [CSS – Workflow](../02_CSS/03_Workflow.md)
- [JavaScript – Workflow](../03_JavaScript/03_Workflow.md)
- [PHP – Workflow](../04_PHP/03_Workflow.md)

## Prüfungswissen

In Projekt- und Prüfungsaufgaben wird eine nachvollziehbare Vorgehensweise
bewertet. Begründe deine Elementwahl und nenne Validierung,
Barrierefreiheit und Tests als feste Qualitätsschritte.
