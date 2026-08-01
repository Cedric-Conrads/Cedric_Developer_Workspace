# JavaScript – Wichtige Befehle

## Was ist das?

Dieses Kapitel sammelt häufige Methoden für DOM, Eingaben, Arrays, Objekte
und Browser-Speicher. Eine Methode ist eine Funktion, die zu einem Objekt
gehört.

## Warum brauche ich das?

Diese Werkzeuge bilden den Kern deiner To-do-, Tier- und
SkillTrack-Anwendungen. Entscheidend ist, wann Daten gelesen, geprüft,
verändert und wieder angezeigt werden.

## Syntax

```javascript
const input = document.querySelector("#article-name");
const list = document.querySelector("#article-list");

const value = input.value.trim();
const item = document.createElement("li");
item.textContent = value;
list.append(item);
```

| Methode/Eigenschaft | Aufgabe |
| --- | --- |
| `querySelector()` | erstes passendes Element finden |
| `addEventListener()` | auf ein Ereignis reagieren |
| `.value` | Eingabewert lesen |
| `.textContent` | Text sicher setzen |
| `createElement()` | DOM-Element erzeugen |
| `append()` | Inhalt einfügen |
| `remove()` | Element entfernen |
| `push()` | Array-Eintrag anhängen |
| `forEach()` | jeden Eintrag verarbeiten |
| `map()` | neues Array aus allen Einträgen bilden |
| `filter()` | passendes Teilarray erzeugen |

## Erklärung

DOM-Methoden arbeiten mit der aktuellen Dokumentstruktur. Array-Methoden
arbeiten mit Daten im Arbeitsspeicher. Eine robuste Anwendung hält Daten
und Darstellung auseinander: Erst Daten ändern, danach die Oberfläche aus
diesen Daten neu rendern.

`localStorage` speichert nur Strings. Objekte und Arrays werden mit
`JSON.stringify()` serialisiert und mit `JSON.parse()` wiederhergestellt.

## Beispiel

```javascript
const animals = ["Hund", "Katze"];
localStorage.setItem("animals", JSON.stringify(animals));

const storedAnimals = JSON.parse(
    localStorage.getItem("animals") ?? "[]"
);

storedAnimals.forEach((animal) => {
    console.log(animal);
});
```

## Typische Fehler

- `.value` wird auf einem nicht gefundenen Element (`null`) aufgerufen.
- `forEach()` wird verwendet, obwohl ein neues Array benötigt wird (`map`).
- Daten werden mit `innerHTML` eingefügt, obwohl nur Text nötig ist.
- `JSON.parse(null)` oder ungültiges JSON führt zu Fehlern.
- Ein Event Listener wird mehrfach registriert.

## Merksatz

**DOM zeigt Daten – Arrays und Objekte halten Daten.**

## Verwandte Themen

- [JavaScript – Grundlagen](01_Grundlagen.md)
- [JavaScript – Best Practices](04_Best_Practices.md)
- [Security – Grundlagen](../11_Security/01_Grundlagen.md)

## Prüfungswissen

Du solltest Methoden nach Rückgabewert unterscheiden: `forEach()` liefert
kein neues Array, `map()` und `filter()` schon. DOM-Auswahl, Events und
sichere Textausgabe sind ebenfalls häufige Praxisfragen.
