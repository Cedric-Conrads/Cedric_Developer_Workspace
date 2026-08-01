# Pattern-Auswahl, Anti-Patterns und Tests

## Was ist das?

Pattern-Auswahl bewertet Nutzen und Komplexität. Anti-Patterns sind
wiederkehrende scheinbare Lösungen, die langfristig bekannte Probleme
verursachen.

## Warum brauche ich das?

Architektur soll Änderungen erleichtern, nicht möglichst viele Schichten
erzeugen. Tests zeigen, ob Grenzen und Verträge tatsächlich nutzbar sind.

## Syntax

```text
Problem konkret?
→ Änderungsachse bekannt?
→ einfache Lösung ausreichend?
→ Pattern verbessert Verständlichkeit/Testbarkeit?
→ Nachteile akzeptabel?
```

## Erklärung

Häufige Anti-Patterns:

- God Object: eine Klasse weiß und tut alles.
- Spaghetti Code: Kontrollfluss und Abhängigkeiten sind unklar.
- Copy/Paste Programming: gleiche Logik driftet auseinander.
- Golden Hammer: ein bekanntes Werkzeug wird für jedes Problem verwendet.
- Premature Abstraction: Abstraktion vor einem echten zweiten Anwendungsfall.
- Singleton als globaler Zustand: versteckte Kopplung und schwere Tests.

Charakterisierungstests können Verhalten alten Codes sichern, bevor er
refaktoriert wird.

## Beispiel

Wenn nur eine Benachrichtigungsart existiert, genügt zunächst eine kleine
Klasse. Sobald mehrere austauschbare Varianten mit gleicher Aufgabe
entstehen, kann ein Interface plus Strategy sinnvoll werden. Der
Refactoring-Schritt wird durch Tests abgesichert.

## Typische Fehler

- Komplexität wird mit Professionalität verwechselt.
- Pattern wird ohne dokumentierte Entscheidung eingeführt.
- Tests spiegeln Implementierungsdetails und verhindern Refactoring.
- Abstraktion hat nur eine Implementierung und keinen absehbaren
  Änderungsgrund.
- Anti-Pattern wird nur benannt, aber Ursache und Umbauplan fehlen.

## Merksatz

**Die beste Architektur ist so einfach wie möglich und so strukturiert wie nötig.**

## Verwandte Themen

- [Pattern-Grundlagen](01_Grundlagen.md)
- [Wichtige Patterns](02_Wichtige_Patterns.md)
- [OOP – SOLID und Tests](../10_OOP/03_SOLID_Komposition_und_Tests.md)

## Prüfungswissen

Entwurfsentscheidung mit Alternativen, Trade-offs und Teststrategie
begründen können; das stärkt auch die IHK-Projektdokumentation.
