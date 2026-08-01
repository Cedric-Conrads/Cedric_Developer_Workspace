# JavaScript – Fehler und Lösungen

## Was ist das?

JavaScript-Fehler können Syntaxfehler, Laufzeitfehler oder logische Fehler
sein. Die Browserkonsole zeigt Datei, Zeile und häufig einen Stacktrace.

## Warum brauche ich das?

Eine feste Debugging-Methode verhindert, dass nur Symptome beseitigt werden.
Gute Fehlersuche ist eine Kernkompetenz im Beruf.

## Syntax

```text
Fehler reproduzieren → Meldung vollständig lesen → erste eigene Stack-Zeile
→ Werte/Typen prüfen → Ursache isolieren → Korrektur → Randfall testen
```

## Erklärung

- `... is null`: Selektor, Ladezeitpunkt oder fehlendes Element prüfen.
- `... is not a function`: Datentyp und Schreibweise der Methode prüfen.
- `undefined`: Eigenschaft, Index oder Rückgabewert kontrollieren.
- `"2" + "3"` ergibt `"23"`: Eingaben mit `Number()` umwandeln.
- Daten verschwinden: Persistenz mit `localStorage` oder Backend fehlt.
- Event löst doppelt aus: Listener wurde mehrfach registriert.

Breakpoints, `console.table()`, Watch-Ausdrücke und der Network-Tab sind
meist aussagekräftiger als viele unstrukturierte `console.log()`-Aufrufe.

## Beispiel

```javascript
const rawStock = stockInput.value;
const stock = Number(rawStock);

if (!Number.isInteger(stock) || stock < 0) {
    showMessage("Bestand muss eine nicht negative ganze Zahl sein.");
    return;
}
```

## Typische Fehler

- Nur die letzte Zeile des Stacktraces lesen.
- Fehler durch große Codeänderungen gleichzeitig „beheben“.
- Typen nicht mit `typeof` oder DevTools kontrollieren.
- Ein Promise-Fehler wird ohne `try/catch` beziehungsweise `.catch()` ignoriert.
- `null`, `undefined`, leerer String und `0` werden gleich behandelt.

## Merksatz

**Fehlermeldung lesen, Zeile finden, Wert und Typ prüfen.**

## Verwandte Themen

- [JavaScript – Workflow](03_Workflow.md)
- [APIs – Grundlagen](../09_APIs/01_Grundlagen.md)
- [HTML – Fehler und Lösungen](../01_HTML/05_Fehler_und_Loesungen.md)

## Prüfungswissen

Fehlerarten, Testfälle, Debugging und Datentypen können in
Algorithmusaufgaben direkt geprüft werden. Dokumentiere Ursache,
Korrektur und Kontrolltest.
