# OOP – SOLID, Komposition und Tests

## Was ist das?

SOLID fasst fünf Entwurfsprinzipien für änderbaren objektorientierten Code
zusammen. Komposition setzt Objekte aus klaren Verantwortlichkeiten
zusammen.

## Warum brauche ich das?

Die Prinzipien helfen, Änderungen lokal zu halten und Fachlogik unabhängig
von Datenbank oder Oberfläche zu testen.

## Syntax

```text
S – Single Responsibility
O – Open/Closed
L – Liskov Substitution
I – Interface Segregation
D – Dependency Inversion
```

## Erklärung

SOLID ist eine Orientierung, kein starres Punktesystem:

- Eine Klasse hat einen klaren Änderungsgrund.
- Erweiterung soll möglichst ohne riskante Änderung stabiler Teile gelingen.
- Untertypen müssen den Vertrag ihres Basistyps einhalten.
- Kleine passende Interfaces sind besser als große Sammelverträge.
- Fachlogik hängt von Abstraktionen, nicht von konkreter Infrastruktur ab.

Komposition und Dependency Injection machen Abhängigkeiten sichtbar.

## Beispiel

```php
final class ReorderService
{
    public function __construct(
        private ArticleRepository $articles,
        private Notifier $notifier
    ) {
    }
}
```
Im Test können Repository und Notifier durch Test-Doubles ersetzt werden.

## Typische Fehler

- Jede kleine Funktion bekommt vorsorglich ein Interface.
- SOLID wird als Ziel maximaler Klassenanzahl verstanden.
- Tests prüfen private Implementierungsdetails statt öffentliches Verhalten.
- Fachlogik hängt direkt an globaler Datenbankverbindung.
- Mocking ersetzt sinnvolle Integrationstests vollständig.

## Merksatz

**Gute Abhängigkeiten sind sichtbar, austauschbar und testbar.**

## Verwandte Themen

- [Kapselung und Interfaces](02_Kapselung_Vererbung_und_Interfaces.md)
- [Design Patterns](../14_Design_Patterns/01_Grundlagen.md)
- [Laravel – Grundlagen](../13_Laravel/01_Grundlagen.md)

## Prüfungswissen

SOLID benennen und anhand eines Beispiels begründen können; nicht nur
Abkürzungen auswendig lernen.
