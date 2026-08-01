# Linux – Grundlagen und Dateisystem

## Was ist das?

Linux ist ein Betriebssystemkern; Distributionen kombinieren ihn mit
Werkzeugen, Paketverwaltung und Benutzeroberfläche. Server und
Containerumgebungen basieren häufig auf Linux.

## Warum brauche ich das?

Entwickler arbeiten mit Dateisystem, Shell, Rechten, Prozessen und
Netzwerkwerkzeugen. Linux-Kenntnisse erleichtern Deployment, Docker und
Fehlersuche.

## Syntax

```bash
pwd
ls -la
cd /var/www
mkdir projekt
cp quelle ziel
mv alt neu
less datei.log
```

## Erklärung

Das Dateisystem beginnt bei `/`. Wichtige Bereiche sind `/home` für
Benutzerdateien, `/etc` für Konfiguration, `/var` für veränderliche Daten
und Logs, `/tmp` für temporäre Daten. `.` ist der aktuelle, `..` der
übergeordnete Ordner. Absolute Pfade beginnen mit `/`, relative vom
aktuellen Verzeichnis.

Viele Befehle folgen `befehl optionen argumente`. Handbuchseiten lassen sich
mit `man <befehl>` oder oft `--help` öffnen.

## Beispiel

```bash
cd /var/www/lagerverwaltung
find . -maxdepth 2 -type f
grep -R "prepare(" src
tail -f /var/log/apache2/error.log
```
In modernen Projekten ist `rg` eine schnelle Alternative für Textsuche,
wenn es installiert ist.

## Typische Fehler

- Leerzeichen und Sonderzeichen in Pfaden werden nicht korrekt gequotet.
- Relative Befehle laufen im falschen Verzeichnis.
- Groß-/Kleinschreibung wird wie unter Windows ignoriert.
- Destruktive Befehle werden mit breiten Pfaden oder `*` ausgeführt.
- Logs werden verändert statt zunächst nur gelesen.

## Merksatz

**Erst `pwd` und Ziel prüfen, dann den Befehl ausführen.**

## Verwandte Themen

- [Rechte, Prozesse und Netzwerk](02_Rechte_Prozesse_und_Netzwerk.md)
- [Shell-Workflow und Fehler](03_Shell_Workflow_und_Fehler.md)
- [Docker – Grundlagen](../12_Docker/01_Grundlagen.md)

## Prüfungswissen

Dateisystem, Benutzer, Rechte, Prozesse, Netzwerk und sichere
Administration gehören zur AP1 und zu Systemgrundlagen.
