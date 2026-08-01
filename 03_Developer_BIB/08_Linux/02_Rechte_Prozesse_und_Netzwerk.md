# Linux – Rechte, Prozesse und Netzwerk

## Was ist das?

Linux verwaltet Zugriffe über Benutzer, Gruppen und Dateirechte; laufende
Programme über Prozesse; Kommunikation über Netzwerkschnittstellen und
Ports.

## Warum brauche ich das?

Webserver- und Anwendungsfehler entstehen oft durch falsche Rechte,
blockierte Ports oder gestoppte Prozesse.

## Syntax

```bash
id
ls -l
chmod u+x script.sh
chown benutzer:gruppe datei
ps aux
ss -tulpn
systemctl status apache2
```

## Erklärung

Rechte werden für Eigentümer (`u`), Gruppe (`g`) und andere (`o`) als
Lesen (`r`), Schreiben (`w`) und Ausführen (`x`) vergeben. `chmod 755`
bedeutet üblicherweise `rwxr-xr-x`; symbolische Schreibweise ist oft
verständlicher.

Prozesse besitzen IDs und Ressourcen. Dienste werden auf vielen Systemen
mit `systemctl` verwaltet. `ss` zeigt lauschende Ports; `curl` testet
HTTP-Anfragen; `ip addr` zeigt Netzwerkschnittstellen.

## Beispiel

```bash
systemctl status apache2
ss -tulpn | grep ':80'
curl -I http://localhost
journalctl -u apache2 --since today
```
Diese Reihenfolge prüft Dienst, Port, HTTP-Antwort und Logs.

## Typische Fehler

- `chmod 777` wird als Standardlösung verwendet.
- Prozess wird beendet, ohne Abhängigkeiten oder Ursache zu prüfen.
- Port und Prozessname werden verwechselt.
- Root-Rechte werden für jede Aufgabe genutzt.
- Firewall, Dienstbindung und Container-Portmapping werden vermischt.

## Merksatz

**So wenig Rechte wie nötig; Dienst, Port und Antwort getrennt prüfen.**

## Verwandte Themen

- [Linux-Grundlagen](01_Grundlagen.md)
- [Shell-Workflow und Fehler](03_Shell_Workflow_und_Fehler.md)
- [Security – Grundlagen](../11_Security/01_Grundlagen.md)

## Prüfungswissen

Binär-/Oktalrechte, Least Privilege, Prozesse, Dienste, IP und Ports sind
klassische Prüfungsinhalte.
