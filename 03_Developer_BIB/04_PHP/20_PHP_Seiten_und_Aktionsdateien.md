# PHP-Seiten und Aktionsdateien

## Was ist das?

In kleinen PHP-Projekten lassen sich Dateien gedanklich in Seiten und
Aktionen trennen. Seiten zeigen eine Oberfläche; Aktionen verarbeiten eine
konkrete Anfrage und leiten danach meist weiter.

## Warum brauche ich das?

Die Trennung macht Requestfluss und Verantwortlichkeiten sichtbar und
bereitet auf Controller, Services und Views in Frameworks wie Laravel vor.

## Syntax

```text
Seite:
GET → Daten laden → HTML anzeigen

Aktion:
POST → prüfen → speichern/löschen → Redirect
```

## Erklärung

Beispiele aus der Lagerverwaltung:

| Datei | Typ | Aufgabe |
| --- | --- | --- |
| `index.php` | Seite | Formular anzeigen |
| `lagerbestand.php` | Seite | Artikelliste anzeigen |
| `bearbeiten.php` | Seite | Datensatz laden und Formular anzeigen |
| `save_article.php` | Aktion | neuen Artikel speichern |
| `delete_article.php` | Aktion | geprüften Artikel löschen |

Die Trennung ist noch keine vollständige Architektur, aber ein wichtiger
erster Schritt.

## Beispiel

```php
// update_article.php – Aktion
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit;
}

// validieren, Prepared Statement ausführen

header("Location: lagerbestand.php");
exit;
```

## Typische Fehler

- Eine Aktion zeigt nach POST direkt dieselbe Seite und verursacht Resubmits.
- Seiten verändern beim reinen Öffnen Daten.
- Datenbankverbindung und HTML werden in jeder Datei dupliziert.
- Eine Aktionsdatei akzeptiert jede HTTP-Methode.
- Fehler- und Erfolgsmeldungen gehen beim Redirect verloren.

## Merksatz

**Seiten zeigen – Aktionen verändern und leiten weiter.**

## Verwandte Themen

- [PHP-Workflow](03_Workflow.md)
- [Header und Exit](22_Header_und_Exit.md)
- [Laravel – Grundlagen](../13_Laravel/01_Grundlagen.md)
- [Design Patterns – Grundlagen](../14_Design_Patterns/01_Grundlagen.md)

## Prüfungswissen

Schichten, MVC, Request-Methoden und Post/Redirect/Get sind relevante
Architektur- und Projektdokumentationsthemen.
