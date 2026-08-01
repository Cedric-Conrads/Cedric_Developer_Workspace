# Docker – Grundlagen

## Was ist das?

Docker verpackt Anwendungen und ihre Laufzeitabhängigkeiten in Images.
Aus Images gestartete, isolierte Prozesse heißen Container.

## Warum brauche ich das?

Container schaffen reproduzierbare Entwicklungs- und Testumgebungen. Ein
Team kann dieselbe PHP-, Webserver- und Datenbankkonfiguration starten,
ohne jeden Rechner manuell gleich einzurichten.

## Syntax

```bash
docker image ls
docker container ls
docker build -t lagerverwaltung .
docker run --rm -p 8080:80 lagerverwaltung
```

## Erklärung

- Image: unveränderliche Vorlage aus Schichten.
- Container: laufende Instanz eines Images mit eigener beschreibbarer Schicht.
- Registry: Speicher und Verteilung für Images.
- Volume: von Containerlebenszeit getrennte persistente Daten.
- Netzwerk: Kommunikation zwischen Containern und nach außen.
- Portmapping `8080:80`: Host-Port 8080 leitet zum Container-Port 80.

Container sind keine vollständigen virtuellen Maschinen; sie teilen sich
den Kernel des Hosts.

## Beispiel

```bash
docker run --name web       --rm       -p 8080:80       lagerverwaltung
```
Danach ist der Webserver über `http://localhost:8080` erreichbar.

## Typische Fehler

- Image und Container werden gleichgesetzt.
- Datenbankdaten liegen nur in der Container-Schicht und verschwinden.
- `localhost` in einem Container wird mit dem Host verwechselt.
- Ports werden freigegeben, ohne Dienstbindung und Firewall zu verstehen.
- Container läuft unnötig als Root.

## Merksatz

**Image ist die Vorlage; Container ist die laufende Instanz.**

## Verwandte Themen

- [Dockerfile und Compose](02_Dockerfile_Compose_und_Daten.md)
- [Docker-Workflow und Fehler](03_Workflow_Sicherheit_und_Fehler.md)
- [Linux – Grundlagen](../08_Linux/01_Grundlagen.md)

## Prüfungswissen

Image, Container, Registry, Port, Volume, Netzwerk und Unterschied zur VM
sind relevante Infrastrukturthemen.
