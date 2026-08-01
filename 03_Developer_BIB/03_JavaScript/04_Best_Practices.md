# JavaScript – Best Practices

## Was ist das?

JavaScript-Best-Practices sind Regeln für klaren, testbaren, sicheren und
wartbaren Code.

## Warum brauche ich das?

Funktionierender Code ist nicht automatisch guter Code. Kleine Funktionen,
klare Namen und kontrollierte Seiteneffekte erleichtern Fehlersuche,
Teamarbeit und spätere Erweiterungen.

## Syntax

```javascript
function isValidStock(stock) {
    return Number.isInteger(stock) && stock >= 0;
}

function createArticle(name, stock) {
    if (name.trim() === "" || !isValidStock(stock)) {
        throw new Error("Ungültige Artikeldaten");
    }

    return { name: name.trim(), stock };
}
```

## Erklärung

- Verwende `const` standardmäßig und `let` nur bei Neuzuweisung.
- Gib Variablen und Funktionen aufgabenbezogene Namen.
- Halte Funktionen klein und auf eine Aufgabe fokussiert.
- Trenne Datenmodell, Darstellung und Ein-/Ausgabe.
- Nutze strikte Vergleiche (`===`).
- Behandle Fehler sichtbar und zielgerichtet.
- Vermeide globale Variablen und duplizierten Code.
- Nutze Module, wenn die Anwendung wächst.
- Schreibe Tests für reine Fachlogik und wichtige Randfälle.

## Beispiel

```javascript
// Fachlogik: leicht testbar
export function calculateInventoryValue(price, stock) {
    if (price < 0 || stock < 0) {
        throw new RangeError("Werte dürfen nicht negativ sein.");
    }
    return price * stock;
}
```

## Typische Fehler

- Eine Funktion liest Eingaben, verändert Daten, baut HTML und speichert alles.
- Magic Numbers stehen ohne Namen im Code.
- `console.log()` bleibt als einzige Fehlerbehandlung bestehen.
- Benutzerdaten werden mit `innerHTML` ausgegeben.
- Fehler werden mit einem leeren `catch` verschluckt.

## Merksatz

**Eine Funktion – eine klare Aufgabe – ein verständlicher Name.**

## Verwandte Themen

- [JavaScript-Workflow](03_Workflow.md)
- [OOP – Grundlagen](../10_OOP/01_Grundlagen.md)
- [Design Patterns – Grundlagen](../14_Design_Patterns/01_Grundlagen.md)
- [Security – Grundlagen](../11_Security/01_Grundlagen.md)

## Prüfungswissen

In der Prüfung zählen Lesbarkeit, Modularisierung, Fehlerbehandlung,
Testbarkeit und Begründung von Lösungsentscheidungen neben dem korrekten
Ergebnis.
