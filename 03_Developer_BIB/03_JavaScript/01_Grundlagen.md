# JavaScript – Grundlagen

## Was ist das?

JavaScript ist eine Programmiersprache, die im Browser und auch außerhalb
davon ausgeführt werden kann. Im Frontend verarbeitet sie Daten, reagiert
auf Ereignisse und verändert das DOM.

## Warum brauche ich das?

Mit JavaScript werden statische Webseiten zu Anwendungen: Formulare können
geprüft, Listen dynamisch erstellt, Daten gespeichert und APIs aufgerufen
werden.

## Syntax

```javascript
const articleName = "Hammer";
let stock = 10;

function increaseStock(amount) {
    stock += amount;
    return stock;
}

console.log(increaseStock(5));
```

## Erklärung

- `const` verhindert eine Neuzuweisung der Variablen; Objektinhalte können
  trotzdem verändert werden.
- `let` erlaubt eine spätere Neuzuweisung.
- Primitive Datentypen sind unter anderem String, Number, Boolean,
  `null`, `undefined` und BigInt.
- Arrays speichern geordnete Werte; Objekte speichern benannte Eigenschaften.
- Funktionen kapseln wiederverwendbares Verhalten.
- Vergleiche bevorzugt mit `===` und `!==`, damit kein unerwarteter
  Typumwandlungsvergleich stattfindet.

## Beispiel

```javascript
const article = {
    number: "1001",
    name: "Hammer",
    stock: 20
};

if (article.stock > 0) {
    console.log(`${article.name} ist verfügbar.`);
} else {
    console.log(`${article.name} muss bestellt werden.`);
}
```

## Typische Fehler

- `=` (Zuweisung) wird mit `===` (strikter Vergleich) verwechselt.
- `const` wird fälschlich als vollständig unveränderlich verstanden.
- Zahlen aus Eingabefeldern bleiben Strings.
- Auf eine nicht vorhandene Objekt-Eigenschaft wird zugegriffen.
- Eine Funktion gibt keinen Wert zurück, obwohl der Aufrufer ihn erwartet.

## Merksatz

**Daten speichern, Bedingungen prüfen, Funktionen ausführen, Ergebnis
zurückgeben.**

## Verwandte Themen

- [Wichtige JavaScript-Befehle](02_Wichtige_Befehle.md)
- [JavaScript-Workflow](03_Workflow.md)
- [APIs – Grundlagen](../09_APIs/01_Grundlagen.md)
- [OOP – Grundlagen](../10_OOP/01_Grundlagen.md)

## Prüfungswissen

Variablen, Datentypen, Kontrollstrukturen, Arrays, Objekte, Funktionen und
Algorithmen sind zentral für die schriftliche Prüfung
„Entwicklung und Umsetzung von Algorithmen“.
