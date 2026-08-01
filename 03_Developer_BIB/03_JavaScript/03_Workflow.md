# JavaScript – Workflow

## Was ist das?

Der JavaScript-Workflow beschreibt den Weg von einem Ereignis über
Validierung und Datenverarbeitung bis zur aktualisierten Benutzeroberfläche.

## Warum brauche ich das?

Durch feste Schritte lassen sich Eingabefehler, DOM-Probleme und
Datenlogik getrennt testen. Das macht kleine Projekte später leichter
erweiterbar.

## Syntax

```text
Event → Eingaben lesen → validieren → Daten ändern
      → speichern → Oberfläche rendern → Feedback
```

## Erklärung

1. Benötigte DOM-Elemente einmal auswählen.
2. Zustand der Anwendung in Variablen, Arrays oder Objekten abbilden.
3. Event Listener registrieren.
4. Eingaben lesen und normalisieren (`trim`, `Number`).
5. Ungültige Eingaben mit frühem `return` stoppen.
6. Datenmodell verändern.
7. Persistenz aktualisieren, falls nötig.
8. Oberfläche aus dem aktuellen Zustand rendern.
9. Erfolg oder Fehler sichtbar melden.

## Beispiel

```javascript
form.addEventListener("submit", (event) => {
    event.preventDefault();

    const name = input.value.trim();
    if (name === "") {
        showMessage("Bitte einen Tiernamen eingeben.");
        return;
    }

    animals.push(name);
    saveAnimals();
    renderAnimals();
    form.reset();
});
```

## Typische Fehler

- Daten existieren nur im DOM und nicht in einem Datenmodell.
- `preventDefault()` fehlt und das Formular lädt die Seite neu.
- Validierung erfolgt nach der Datenänderung.
- Rendering und Fachlogik sind untrennbar in einer langen Funktion vermischt.
- Fehlermeldungen erscheinen nur in der Konsole.

## Merksatz

**Ereignis rein – geprüfter Zustand raus – Oberfläche neu zeichnen.**

## Verwandte Themen

- [Wichtige Befehle](02_Wichtige_Befehle.md)
- [JavaScript – Fehler und Lösungen](05_Fehler_und_Loesungen.md)
- [APIs – Grundlagen](../09_APIs/01_Grundlagen.md)

## Prüfungswissen

In Algorithmusaufgaben musst du Eingabe, Verarbeitung und Ausgabe klar
trennen. Pseudocode, Kontrollstrukturen, Randfälle und nachvollziehbare
Funktionsgrenzen sind prüfungsrelevant.
