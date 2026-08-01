# Docker – Workflow, Sicherheit und Fehleranalyse

## Was ist das?

Der Docker-Workflow baut Images reproduzierbar, startet Services,
kontrolliert Status und Logs und trennt Konfiguration von Secrets.

## Warum brauche ich das?

Containerfehler können aus Build, Startprozess, Netzwerk, Berechtigung,
Konfiguration oder Anwendung stammen. Jede Schicht wird getrennt geprüft.

## Syntax

```text
docker compose config
→ build
→ up
→ ps
→ logs
→ health/ports
→ exec nur zur Diagnose
```

## Erklärung

Sicherheitsgrundlagen:

- kleine, vertrauenswürdige Basisimages,
- feste Versionen und regelmäßige Updates,
- nicht als Root laufen, wenn möglich,
- nur nötige Ports und Dateirechte,
- Secrets nicht in Image oder Repository,
- Read-only-Dateisysteme und Ressourcenlimits bei Bedarf,
- Images auf bekannte Schwachstellen prüfen.

Ein Container, der sofort stoppt, hat häufig seinen Hauptprozess beendet.
Logs und Exitcode erklären meist mehr als ein interaktiver Neuaufbau.

## Beispiel

```bash
docker compose config
docker compose build --pull
docker compose up -d
docker compose ps
docker compose logs --tail=100 web
docker inspect web
```

## Typische Fehler

- Container wird ständig neu gestartet, ohne Logs zu lesen.
- Produktionsdaten werden mit `down -v` unbeabsichtigt entfernt.
- Image wird manuell im laufenden Container verändert statt neu gebaut.
- Host- und Containerpfade oder Ports werden vertauscht.
- Privileged-Modus wird als schnelle Standardlösung genutzt.

## Merksatz

**Konfiguration prüfen, reproduzierbar bauen, Logs lesen, Ursache in der richtigen Schicht suchen.**

## Verwandte Themen

- [Docker-Grundlagen](01_Grundlagen.md)
- [Dockerfile und Compose](02_Dockerfile_Compose_und_Daten.md)
- [Security – Grundlagen](../11_Security/01_Grundlagen.md)

## Prüfungswissen

Reproduzierbarkeit, Logging, Least Privilege, Datenpersistenz und
Recovery-Folgen sind wichtige Systemthemen.
