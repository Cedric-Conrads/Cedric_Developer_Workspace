# Wildcards bei LIKE

## Was ist das?

Wildcards sind Sonderzeichen in LIKE-Mustern. `%` steht für null bis
beliebig viele Zeichen, `_` für genau ein Zeichen.

## Warum brauche ich das?

Sie bestimmen präzise, welche Textvarianten eine Suche finden darf.

## Syntax

```sql
WHERE name LIKE 'Ham%'   -- beginnt mit
WHERE name LIKE '%Ham'   -- endet mit
WHERE name LIKE '%Ham%'  -- enthält
WHERE name LIKE 'H_mmer' -- genau ein Zeichen
```

## Erklärung

Die Wildcard ist Teil des Suchwertes, nicht der Prepared-Statement-Syntax.
Wenn `%` oder `_` als normale Zeichen gesucht werden sollen, müssen sie
entsprechend der verwendeten Datenbank und Escape-Regel behandelt werden.

Eine führende Wildcard (`%text`) erschwert indexbasierte Suche häufig, weil
der Anfangswert unbekannt ist.

## Beispiel

```text
Eingabe „Ham“
→ PHP erzeugt „%Ham%“
→ bind_param bindet den vollständigen Wert
→ LIKE findet „Hammer“, „Bohrhammer“, „Vorschlaghammer“
```

## Typische Fehler

- `%` wird mit dem `?`-Parameterplatzhalter verwechselt.
- Alle Sucharten nutzen automatisch `%...%`.
- Benutzer kann Wildcards eingeben, obwohl eine wörtliche Suche erwartet wird.
- Performance großer Tabellen wird nicht gemessen.

## Merksatz

**`%` bedeutet beliebig viel Text; `_` bedeutet genau ein Zeichen.**

## Verwandte Themen

- [LIKE](11_LIKE.md)
- [SQL-Platzhalter](13_Platzhalter.md)
- [SQL – Best Practices](04_Best_Practices.md)

## Prüfungswissen

Erkläre Unterschied und Kombination von `%`, `_` und `?`.
