# REST und API-Design

## Was ist das?

REST ist ein Architekturstil für verteilte Systeme. Ressourcen werden über
einheitliche Schnittstellen adressiert und Repräsentationen zwischen
Client und Server übertragen.

## Warum brauche ich das?

Konsistentes Design macht APIs verständlich, erweiterbar, testbar und für
verschiedene Clients nutzbar.

## Syntax

```text
GET    /api/articles
GET    /api/articles/1001
POST   /api/articles
PATCH  /api/articles/1001
DELETE /api/articles/1001
```

## Erklärung

Gute APIs verwenden Ressourcen-Nomen statt Aktionsverben, validieren
Eingaben, liefern einheitliche Fehlerstrukturen und dokumentieren
Authentisierung, Pagination, Filterung und Versionierung.

Zustandslos bedeutet, dass jede Anfrage die zur Verarbeitung notwendigen
Informationen enthält. Idempotent bedeutet, dass wiederholte gleiche
Anfragen denselben beabsichtigten Zustand bewirken; GET, PUT und DELETE
gelten semantisch als idempotent, POST typischerweise nicht.

## Beispiel

```json
{
  "error": {
    "code": "VALIDATION_FAILED",
    "message": "Die Eingabe ist ungültig.",
    "fields": {
      "stock": "Muss mindestens 0 sein."
    }
  }
}
```

## Typische Fehler

- Verben stehen in Pfaden wie `/getArticles`.
- Breaking Changes werden still in derselben Schnittstelle ausgerollt.
- Pagination fehlt bei großen Listen.
- Interne Datenbankspalten werden ungefiltert als öffentlicher Vertrag genutzt.
- Autorisierung wird nur im Frontend geprüft.

## Merksatz

**Eine API ist ein Vertrag – Konsistenz ist wichtiger als spontane Bequemlichkeit.**

## Verwandte Themen

- [API-Grundlagen](01_Grundlagen.md)
- [APIs verwenden und testen](03_APIs_Verwenden_und_Testen.md)
- [Security – Webanwendungen](../11_Security/02_Webanwendungen_Absichern.md)

## Prüfungswissen

REST-Prinzipien, Idempotenz, Versionierung, Pagination und
Fehlerbehandlung sind typische Prüfungsfragen.
