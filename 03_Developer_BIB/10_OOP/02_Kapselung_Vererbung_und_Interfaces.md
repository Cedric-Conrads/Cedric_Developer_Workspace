# OOP – Kapselung, Vererbung und Interfaces

## Was ist das?

Kapselung schützt Zustand hinter einer kontrollierten Schnittstelle.
Vererbung spezialisiert eine Basisklasse. Interfaces definieren Verhalten,
ohne eine konkrete Implementierung vorzugeben.

## Warum brauche ich das?

Die Konzepte reduzieren Abhängigkeiten und erlauben austauschbare
Implementierungen, wenn sie gezielt eingesetzt werden.

## Syntax

```php
interface ArticleRepository
{
    public function findByNumber(int $number): ?Article;
    public function save(Article $article): void;
}

final class MySqlArticleRepository implements ArticleRepository
{
    // konkrete Datenbankimplementierung
}
```

## Erklärung

**Kapselung** hält Invarianten innerhalb eines Objekts. **Abstraktion**
zeigt nur die notwendige Schnittstelle. **Polymorphie** erlaubt, mehrere
Implementierungen über denselben Vertrag zu verwenden.

Vererbung beschreibt eine echte „ist-ein“-Beziehung. Für flexible
Zusammenarbeit ist Komposition („hat-ein“) häufig robuster. Interfaces
ermöglichen Dependency Injection und vereinfachen Tests.

## Beispiel

```php
final class ArticleService
{
    public function __construct(
        private ArticleRepository $repository
    ) {
    }
}
```
Der Service kennt den Vertrag, nicht zwingend MySQL.

## Typische Fehler

- Vererbung wird nur zur Codewiederverwendung missbraucht.
- Interface enthält konkrete Zustände statt eines Verhaltensvertrags.
- Getter und Setter machen jede Eigenschaft ungeprüft veränderbar.
- Abhängigkeiten werden innerhalb der Klasse hart mit `new` erzeugt.
- Tiefe Vererbungshierarchien werden schwer nachvollziehbar.

## Merksatz

**Kapselung schützt Regeln; Interfaces trennen Vertrag und Umsetzung.**

## Verwandte Themen

- [OOP-Grundlagen](01_Grundlagen.md)
- [SOLID und Komposition](03_SOLID_Komposition_und_Tests.md)
- [Design Patterns](../14_Design_Patterns/01_Grundlagen.md)

## Prüfungswissen

Kapselung, Vererbung, Polymorphie, Abstraktion und Interfaces sicher
unterscheiden können.
