# Developer BIB – Übersicht und Lernroute

## Was ist das?

Die Developer BIB ist Cedrics persönliches Nachschlagewerk für Umschulung,
IHK-Prüfung, Projekte und späteren Berufsalltag. Sie baut die vorhandenen
Notizen aus HTML, CSS, JavaScript, PHP, SQL und Git aus und ergänzt die
bereits angelegten Themen GitHub, Linux, APIs, OOP, Security, Docker,
Laravel und Design Patterns.

## Warum brauche ich das?

Eine große Wissenssammlung hilft nur, wenn Inhalte auffindbar sind und in
sinnvoller Reihenfolge gelernt werden. Diese Übersicht dient als
Startpunkt, Lernroute und Prüfungslandkarte.

## Syntax

| Reihenfolge | Kapitel | Schwerpunkt |
| --- | --- | --- |
| 1 | [HTML](01_HTML/01_Grundlagen.md) | Struktur, Semantik, Formulare, Tabellen |
| 2 | [CSS](02_CSS/01_Grundlagen.md) | Darstellung, Layout, Responsive Design |
| 3 | [JavaScript](03_JavaScript/01_Grundlagen.md) | Logik, DOM, Daten, Fehler |
| 4 | [PHP](04_PHP/01_Grundlagen.md) | Server, Requests, Sessions, Datenbankzugriff |
| 5 | [SQL](05_SQL/01_Grundlagen.md) | Datenmodell, CRUD, Abfragen, Beziehungen |
| 6 | [Git](06_Git/01_Grundlagen.md) | Versionen, Branches, Zusammenarbeit |
| 7 | [GitHub](07_GitHub/01_Grundlagen.md) | Reviews, Issues, CI/CD |
| 8 | [Linux](08_Linux/01_Grundlagen.md) | Shell, Rechte, Prozesse, Netzwerk |
| 9 | [APIs](09_APIs/01_Grundlagen.md) | HTTP, JSON, REST, Tests |
| 10 | [OOP](10_OOP/01_Grundlagen.md) | Klassen, Kapselung, Interfaces, SOLID |
| 11 | [Security](11_Security/01_Grundlagen.md) | Risiken, Webschutz, sicherer Betrieb |
| 12 | [Docker](12_Docker/01_Grundlagen.md) | Images, Container, Compose |
| 13 | [Laravel](13_Laravel/01_Grundlagen.md) | Framework, MVC, Eloquent, Tests |
| 14 | [Design Patterns](14_Design_Patterns/01_Grundlagen.md) | Entwurfsprobleme und Trade-offs |

## Erklärung

Die Reihenfolge ist eine Lernroute, kein starres Verbot von Quersprüngen.
Projekte verbinden immer mehrere Kapitel. Deine Lagerverwaltung verbindet
zum Beispiel HTML-Formulare, PHP-Request-Verarbeitung, SQL, Security und
Git.

Empfohlener Lernzyklus:

1. Abschnitt lesen und Syntax selbst abtippen.
2. Beispiel ohne Vorlage nachbauen.
3. Einen typischen Fehler absichtlich erzeugen und diagnostizieren.
4. Merksatz in eigenen Worten erklären.
5. Querverweis öffnen und Zusammenhang beschreiben.
6. Änderung im eigenen Projekt anwenden und mit Git dokumentieren.

Die BIB ersetzt nicht die offizielle Dokumentation. Bei
versionsabhängigen Werkzeugen wie Laravel und Docker ist immer die zum
Projekt passende offizielle Version maßgeblich.

## Beispiel

Lernblock „Artikelsuche“:

```text
HTML: GET-Suchformular
→ PHP: Eingabe lesen und validieren
→ SQL: LIKE + Wildcards + Prepared Statement
→ PHP: Ergebnismenge fetchen
→ HTML: sichere Tabellenausgabe
→ Security: Eingabe, Parameterbindung, Ausgabekodierung
→ Git: kleiner Commit und nachvollziehbare Nachricht
```

Passende Startpunkte:

- [GET und POST](04_PHP/08_GET_und_POST.md)
- [SELECT mit Prepared Statements](04_PHP/21_SELECT_mit_Prepared_Statements.md)
- [LIKE](05_SQL/11_LIKE.md)
- [Git-Workflow](06_Git/03_Workflow.md)

## Typische Fehler

- Nur lesen, ohne Syntax selbst anzuwenden.
- Befehle auswendig lernen, ohne Eingabe, Wirkung und Rückgabewert zu verstehen.
- Fehler sofort mit fremdem Code überdecken, statt Ursache zu erklären.
- Neue Notizen ohne Querverweis oder einheitliche Struktur ablegen.
- Versionsabhängige Beispiele ungeprüft auf ein anderes Projekt übertragen.
- Prüfungsvorbereitung erst kurz vor dem Termin beginnen.

## Merksatz

**Lesen → selbst bauen → Fehler verstehen → erklären → im Projekt anwenden.**

## Verwandte Themen

Offizielle Orientierung:

- [Ausbildungsordnung Fachinformatiker – Gesetze im Internet](https://www.gesetze-im-internet.de/fiausbv/)
- [IHK Nord Westfalen – Fachinformatiker Anwendungsentwicklung](https://www.ihk.de/nordwestfalen/bildung/ausbildung/ausbildungsberufe-a-z/fachinformatiker-anwendungsentwicklung-4767738)
- [PHP-Handbuch](https://www.php.net/manual/de/)
- [Git-Referenz](https://git-scm.com/docs)
- [Docker-Dokumentation](https://docs.docker.com/)
- [Laravel-Dokumentation](https://laravel.com/docs)

## Prüfungswissen

Nach der aktuell geltenden Ausbildungsordnung und der IHK-Übersicht ist die
gestreckte Abschlussprüfung für Anwendungsentwicklung gewichtet mit:

| Prüfungsbereich | Gewicht |
| --- | ---: |
| Teil 1: Einrichten eines IT-gestützten Arbeitsplatzes | 20 % |
| Teil 2: Planen eines Softwareproduktes | 10 % |
| Teil 2: Entwicklung und Umsetzung von Algorithmen | 10 % |
| Teil 2: Wirtschafts- und Sozialkunde | 10 % |
| Teil 2: Planen und Umsetzen eines Softwareprojektes | 50 % |

Die betriebliche Projektarbeit umfasst laut IHK höchstens 80 Stunden
einschließlich Dokumentation. Termine, Einreichungsform und regionale
Vorgaben immer bei der zuständigen IHK und dem Umschulungsträger prüfen.

Für die Vorbereitung bedeutet das: Nicht nur Syntax lernen. Planung,
Wirtschaftlichkeit, Datenschutz, Tests, Dokumentation, Präsentation und
begründete Entscheidungen gehören genauso zum Abschluss.
