# Objektorientierte Programmierung – Grundlagen

## Was ist das?

Objektorientierte Programmierung (OOP) modelliert Software mit Objekten,
die Zustand und Verhalten bündeln. Eine Klasse beschreibt den Bauplan,
ein Objekt ist eine konkrete Instanz.

## Warum brauche ich das?

OOP kann Fachbegriffe direkt abbilden, Verantwortlichkeiten kapseln und
größeren Code strukturieren. Sie ist Grundlage vieler PHP-Frameworks.

## Syntax

```php
final class Article
{
    public function __construct(
        private int $articleNumber,
        private string $name,
        private int $stock
    ) {
        if ($stock < 0) {
            throw new InvalidArgumentException("Bestand darf nicht negativ sein.");
        }
    }

    public function increaseStock(int $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException("Menge muss positiv sein.");
        }
        $this->stock += $amount;
    }
}
```

## Erklärung

- Eigenschaft/Attribut: Zustand eines Objekts.
- Methode: Verhalten eines Objekts.
- Konstruktor: stellt einen gültigen Anfangszustand her.
- Sichtbarkeit: `private`, `protected`, `public`.
- `$this`: aktuelle Instanz.
- Instanziierung: `new Article(...)`.

Ein Objekt sollte seine Regeln selbst schützen und nicht bloß eine offene
Datensammlung sein.

## Beispiel

```php
$article = new Article(1001, "Hammer", 20);
$article->increaseStock(5);
```
Der Bestand kann nur über eine Methode verändert werden, die die
Fachregel prüft.

## Typische Fehler

- Klasse und Objekt werden gleichgesetzt.
- Alle Eigenschaften sind `public`.
- Konstruktor erlaubt ungültige Zustände.
- Eine „God Class“ übernimmt Datenbank, HTML, Validierung und Fachlogik.
- OOP wird genutzt, obwohl eine kleine reine Funktion klarer wäre.

## Merksatz

**Klasse ist der Bauplan; Objekt ist die konkrete Instanz mit geschütztem Zustand.**

## Verwandte Themen

- [Kapselung, Vererbung und Interfaces](02_Kapselung_Vererbung_und_Interfaces.md)
- [SOLID, Komposition und Tests](03_SOLID_Komposition_und_Tests.md)
- [Design Patterns](../14_Design_Patterns/01_Grundlagen.md)

## Prüfungswissen

Klasse, Objekt, Instanz, Eigenschaft, Methode, Konstruktor und Sichtbarkeit
sind häufiges Codeverständnis- und Prüfungswissen.
