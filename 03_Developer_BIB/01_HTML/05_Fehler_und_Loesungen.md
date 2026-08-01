# HTML – Fehler und Lösungen

## Was ist das?

HTML-Fehler sind ungültige Strukturen, falsche Attribute oder fehlerhafte
Verknüpfungen, durch die Inhalte, Formulare, CSS oder JavaScript nicht wie
geplant funktionieren.

## Warum brauche ich das?

Der Browser korrigiert viele HTML-Fehler stillschweigend. Dadurch wirkt ein
Problem manchmal wie ein CSS-, JavaScript- oder PHP-Fehler. Eine feste
Diagnose spart Zeit.

## Syntax

```text
1. Browser-Konsole und Netzwerk prüfen
2. Pfad und Dateiname exakt vergleichen
3. HTML-Struktur/Attribute prüfen
4. kleinstes fehlerhaftes Beispiel isolieren
5. nur eine Ursache gleichzeitig ändern
```

## Erklärung

Häufige Fälle:

- CSS fehlt: `href`, Dateipfad und Netzwerkstatus prüfen.
- JavaScript fehlt: `src` statt `scr`, `defer` und Konsole prüfen.
- Element ist `null`: `id` stimmt nicht oder Script läuft zu früh.
- PHP erhält keinen Wert: dem Eingabefeld fehlt `name`.
- Formular nutzt falsche Methode: `method` und PHP-Superglobal vergleichen.
- Bild fehlt: `src`, Dateiendung und Groß-/Kleinschreibung prüfen.

## Beispiel

```html
<!-- Falsch: PHP erhält keinen Schlüssel "name" -->
<input id="name" type="text">

<!-- Richtig -->
<label for="name">Name</label>
<input id="name" name="name" type="text">
```

## Typische Fehler

- Nur auf die sichtbare Seite schauen und Konsole/Netzwerk ignorieren.
- Mehrere IDs und Pfade gleichzeitig umbenennen.
- Cache als erste Erklärung vermuten, obwohl der Pfad falsch ist.
- Fehlermeldungen nicht vollständig lesen.
- HTML-Ausgabe korrigieren, obwohl der Backendwert bereits falsch ist.

## Merksatz

**Erst Verbindung und Struktur prüfen, dann die Programmlogik.**

## Verwandte Themen

- [JavaScript – Fehler und Lösungen](../03_JavaScript/05_Fehler_und_Loesungen.md)
- [PHP – Fehler und Lösungen](../04_PHP/05_Fehler_und_Loesungen.md)
- [CSS – Fehler und Lösungen](../02_CSS/05_Fehler_und_Loesungen.md)

## Prüfungswissen

Bei Fehlersuche-Aufgaben sind systematisches Eingrenzen, genaue
Fehlermeldungen und die Zuordnung zur richtigen Schicht wichtiger als
blindes Ausprobieren.
