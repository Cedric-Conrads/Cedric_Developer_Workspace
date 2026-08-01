# Design Patterns – Grundlagen

## Was ist das?

Design Patterns sind benannte, wiederkehrende Lösungsansätze für typische
Entwurfsprobleme. Sie sind Vorlagen für Kommunikation und Struktur, kein
fertiger kopierbarer Code.

## Warum brauche ich das?

Gemeinsame Begriffe wie Strategy, Factory oder Repository erleichtern
Architekturgespräche und können Abhängigkeiten gezielt ordnen.

## Syntax

```text
Erzeugungsmuster   → Wie entstehen Objekte?
Strukturmuster     → Wie werden Objekte zusammengesetzt?
Verhaltensmuster   → Wie arbeiten Objekte zusammen?
```

## Erklärung

Ein Pattern ist sinnvoll, wenn ein tatsächliches wiederkehrendes Problem
besteht und die zusätzlichen Abstraktionen den Code verständlicher machen.
Zuerst werden Anforderungen, Änderungsachsen und Abhängigkeiten analysiert.
Danach wird die einfachste passende Lösung gewählt.

Patterns ersetzen keine Prinzipien wie Kapselung, SOLID, Tests und klare
Verantwortlichkeiten.

## Beispiel

Die Lagerverwaltung könnte verschiedene Benachrichtigungen unterstützen.
Ein `Notifier`-Interface und konkrete E-Mail-/Log-Implementierungen können
das Strategy-Konzept nutzen, wenn diese Varianten wirklich austauschbar
sein müssen.

## Typische Fehler

- Pattern wird wegen seines Namens eingebaut, nicht wegen eines Problems.
- Jede Klasse bekommt Interface, Factory und Repository ohne Nutzen.
- Patterncode wird kopiert, ohne Lebenszyklus und Abhängigkeiten zu verstehen.
- Globale Zustände werden als Singleton versteckt.
- Architektur bleibt abstrakt, Fachlogik wird unverständlich.

## Merksatz

**Erst das Problem und die Änderungsachse – dann das kleinste passende Pattern.**

## Verwandte Themen

- [Wichtige Patterns](02_Wichtige_Patterns.md)
- [Auswahl, Anti-Patterns und Tests](03_Auswahl_Anti_Patterns_und_Tests.md)
- [OOP – SOLID](../10_OOP/03_SOLID_Komposition_und_Tests.md)

## Prüfungswissen

Patternnamen sind weniger wichtig als Problem, Beteiligte, Vorteil und
Nachteil anhand eines Beispiels erklären zu können.
