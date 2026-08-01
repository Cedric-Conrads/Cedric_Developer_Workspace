# APIs – HTTP, Ressourcen und JSON

## Was ist das?

Eine API (**Application Programming Interface**) ist eine definierte
Schnittstelle zwischen Softwaresystemen. Web-APIs verwenden häufig HTTP und
JSON.

## Warum brauche ich das?

APIs trennen Frontend, Backend und externe Dienste. Dadurch können mehrere
Clients dieselben fachlichen Funktionen nutzen.

## Syntax

```http
GET /api/articles/1001 HTTP/1.1
Accept: application/json
```

```json
{
  "articleNumber": 1001,
  "name": "Hammer",
  "stock": 20
}
```

## Erklärung

Ein Endpoint kombiniert HTTP-Methode und Pfad. Header übertragen Metadaten,
der Body Nutzdaten. Ressourcenorientierte APIs verwenden meist:

- GET zum Lesen,
- POST zum Erstellen,
- PUT zum vollständigen Ersetzen,
- PATCH zum teilweisen Ändern,
- DELETE zum Entfernen.

Häufige Statuscodes: `200`, `201`, `204`, `400`, `401`, `403`, `404`,
`409`, `422`, `500`.

## Beispiel

```http
POST /api/articles
Content-Type: application/json

{"articleNumber":1002,"name":"Zange","stock":8}
```

Erfolgsantwort:

```http
HTTP/1.1 201 Created
Location: /api/articles/1002
```

## Typische Fehler

- `401 Unauthorized` und `403 Forbidden` werden vertauscht.
- Immer `200` wird zurückgegeben, auch bei Fehlern.
- GET verändert Daten.
- JSON-Feldnamen und Datentypen sind inkonsistent.
- Interna und Stacktraces werden als Fehlerantwort veröffentlicht.

## Merksatz

**Methode beschreibt die Absicht, Pfad die Ressource, Statuscode das Ergebnis.**

## Verwandte Themen

- [REST und API-Design](02_REST_und_API_Design.md)
- [APIs verwenden und testen](03_APIs_Verwenden_und_Testen.md)
- [GET und POST](../04_PHP/08_GET_und_POST.md)

## Prüfungswissen

HTTP-Methoden, Statuscodes, Header, JSON und Client-Server-Modell sind
zentrale Prüfungsinhalte.
