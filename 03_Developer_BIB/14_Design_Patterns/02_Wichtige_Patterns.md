# Wichtige Design Patterns

## Was ist das?

Häufige Patterns lösen unterschiedliche Probleme bei Varianten,
Objekterzeugung, Datenzugriff, Benachrichtigung und Schichtentrennung.

## Warum brauche ich das?

Die gezielte Auswahl verhindert starre Abhängigkeiten und duplizierte
Entscheidungscodeblöcke.

## Syntax

| Pattern | Zweck |
| --- | --- |
| Strategy | austauschbare Algorithmen/Varianten |
| Factory | Objekterzeugung kapseln |
| Repository | Fachlogik von Datenzugriff trennen |
| Observer | mehrere Empfänger über Ereignisse informieren |
| Adapter | inkompatible Schnittstelle anpassen |
| Decorator | Verhalten dynamisch ergänzen |
| MVC | Model, View und Controller trennen |

## Erklärung

Strategy ist geeignet, wenn mehrere Varianten denselben Vertrag erfüllen.
Factory lohnt sich bei komplexer oder variabler Erzeugung. Repository kann
Datenzugriff abstrahieren, sollte aber nicht bloß das ORM mechanisch
verdoppeln. Observer/Event-Systeme entkoppeln Sender und Empfänger, machen
Abläufe aber indirekter.

MVC ist ein Architekturmuster für die Aufteilung von Darstellung, Daten und
Steuerung; Frameworks interpretieren Details unterschiedlich.

## Beispiel

```php
interface ReorderPolicy
{
    public function shouldReorder(Article $article): bool;
}

final class MinimumStockPolicy implements ReorderPolicy
{
    public function __construct(private int $minimum) {}

    public function shouldReorder(Article $article): bool
    {
        return $article->stock() < $this->minimum;
    }
}
```

## Typische Fehler

- Strategy besteht nur aus einem langen `switch` in jeder Implementierung.
- Factory wird zum Service Locator mit versteckten Abhängigkeiten.
- Repository gibt Datenbankdetails unkontrolliert nach außen.
- Observer-Reihenfolge wird stillschweigend vorausgesetzt.
- MVC-Controller übernimmt sämtliche Fachlogik.

## Merksatz

**Pattern nach Problem wählen: Variante, Erzeugung, Zugriff, Ereignis oder Schicht.**

## Verwandte Themen

- [Pattern-Grundlagen](01_Grundlagen.md)
- [Auswahl und Anti-Patterns](03_Auswahl_Anti_Patterns_und_Tests.md)
- [Laravel – Grundlagen](../13_Laravel/01_Grundlagen.md)

## Prüfungswissen

Für ein Pattern Problem, Struktur, Einsatz, Vorteil, Nachteil und
Alternative erklären können.
