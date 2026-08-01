# CRUD

## Was ist das?

CRUD fasst die vier grundlegenden Operationen auf dauerhaft gespeicherten
Daten zusammen: Create, Read, Update und Delete.

## Warum brauche ich das?

CRUD verbindet Anforderungen, Oberflächenaktionen, HTTP-Methoden,
Backendlogik und SQL-Befehle zu einem vollständigen Anwendungsablauf.

## Syntax

| CRUD | Bedeutung | SQL | typische HTTP-Methode |
| --- | --- | --- | --- |
| C | Create | `INSERT` | POST |
| R | Read | `SELECT` | GET |
| U | Update | `UPDATE` | PUT/PATCH oder HTML-Formular per POST |
| D | Delete | `DELETE` | DELETE oder abgesicherter POST |

## Erklärung

Eine Lagerverwaltung ist erst vollständig, wenn Artikel angelegt,
angezeigt, bearbeitet und gelöscht werden können. Jede Änderung braucht
Validierung, Berechtigung und einen eindeutigen Datensatzbezug.

CRUD ist ein Denkmodell, keine vollständige Architektur. Fachregeln wie
Bestandsbuchungen können zusätzliche Prozesse erfordern.

## Beispiel

```text
Formular „Artikel anlegen“ → POST → INSERT
Lagerbestand öffnen       → GET  → SELECT
Bearbeiten speichern      → POST → UPDATE ... WHERE artikelnummer
Löschen bestätigen        → POST → DELETE ... WHERE artikelnummer
```

## Typische Fehler

- Oberfläche zeigt eine Aktion, Backend besitzt keine Berechtigungsprüfung.
- Update/Delete verwenden keinen eindeutigen Schlüssel.
- HTTP-Methode und Wirkung passen nicht zusammen.
- Fehler-, Leer- und Konkurrenzzustände fehlen.
- CRUD wird mit Geschäftslogik gleichgesetzt.

## Merksatz

**C anlegen, R lesen, U ändern, D löschen.**

## Verwandte Themen

- [SQL-Grundlagen](01_Grundlagen.md)
- [GET und POST](../04_PHP/08_GET_und_POST.md)
- [APIs – Grundlagen](../09_APIs/01_Grundlagen.md)

## Prüfungswissen

CRUD-Zuordnung, HTTP-Methoden, SQL und Datensatzidentität sind häufige
Prüfungsfragen.
