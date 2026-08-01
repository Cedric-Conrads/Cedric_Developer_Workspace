# APIs verwenden, Fehler behandeln und testen

## Was ist das?

Ein API-Client sendet HTTP-Anfragen, prüft Status und Header, verarbeitet
Nutzdaten und behandelt Netzwerk- sowie Fachfehler.

## Warum brauche ich das?

Eine erfolgreiche Netzwerkverbindung bedeutet nicht automatisch eine
erfolgreiche Fachoperation. Beide Ebenen müssen kontrolliert werden.

## Syntax

```javascript
const response = await fetch("/api/articles/1001", {
    headers: { Accept: "application/json" }
});

if (!response.ok) {
    throw new Error(`HTTP ${response.status}`);
}

const article = await response.json();
```

## Erklärung

Zu behandeln sind:

1. Netzwerkfehler oder Timeout,
2. nicht erfolgreicher HTTP-Status,
3. unerwartetes Format,
4. fachlicher Fehlerinhalt,
5. ungültige oder abgelaufene Authentisierung.

Tests prüfen Happy Path, ungültige Eingabe, fehlende Ressource,
fehlende Rechte, Konkurrenz und Grenzwerte. Tools wie `curl` helfen, Client
und Server getrennt zu untersuchen.

## Beispiel

```bash
curl --fail-with-body       -H 'Accept: application/json'       http://localhost/api/articles/1001
```

## Typische Fehler

- `fetch()` wird ohne Prüfung von `response.ok` verwendet.
- JSON wird erwartet, obwohl Fehlerantwort HTML enthält.
- API-Tokens stehen im Frontendcode oder Repository.
- Retry wiederholt nicht idempotente POST-Anfragen unkontrolliert.
- Tests prüfen nur Status `200`, nicht den Antwortinhalt.

## Merksatz

**Netzwerk, HTTP-Status, Format und Fachinhalt getrennt prüfen.**

## Verwandte Themen

- [API-Grundlagen](01_Grundlagen.md)
- [REST und API-Design](02_REST_und_API_Design.md)
- [JavaScript – Fehler und Lösungen](../03_JavaScript/05_Fehler_und_Loesungen.md)

## Prüfungswissen

Testfälle, HTTP-Fehlerklassen, Authentisierung und sichere Wiederholungen
sind prüfungsrelevant.
