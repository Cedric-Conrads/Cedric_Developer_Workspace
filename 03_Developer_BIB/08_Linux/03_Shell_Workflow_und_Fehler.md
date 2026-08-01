# Linux – Shell-Workflow und Fehleranalyse

## Was ist das?

Die Shell interpretiert Befehle, Argumente, Variablen, Umleitungen und
Pipelines. Ein sicherer Workflow trennt lesende Diagnose von Änderungen.

## Warum brauche ich das?

Automatisierung und Serverdiagnose werden zuverlässiger, wenn Exitcodes,
Eingaben und Auswirkungen verstanden werden.

## Syntax

```bash
befehl > ausgabe.txt
befehl 2> fehler.txt
erster_befehl | zweiter_befehl
echo $?
```

## Erklärung

Standardausgabe ist Deskriptor `1`, Fehlerausgabe `2`. Eine Pipeline
verbindet die Ausgabe eines Befehls mit der Eingabe des nächsten.
Exitcode `0` bedeutet üblicherweise Erfolg, andere Werte Fehlerzustände.

Shellvariablen sollten gequotet werden:

```bash
printf '%s\n' "$PROJECT_PATH"
```

Vor Änderungen: Ziel mit `pwd`, `ls` oder einem dry-run prüfen, breite
Globs vermeiden und Backups beziehungsweise Versionsverwaltung nutzen.

## Beispiel

```bash
curl --fail --silent --show-error http://localhost/health
status=$?

if [ "$status" -ne 0 ]; then
    printf '%s\n' "Healthcheck fehlgeschlagen" >&2
fi
```

## Typische Fehler

- Variablen werden ungequotet erweitert.
- Fehlerausgabe wird nicht beachtet.
- Mehrere Befehle werden ausgeführt, obwohl ein vorheriger scheiterte.
- Rekursive Löschung zielt auf unklare Variablen oder zu breite Pfade.
- Befehle aus fremden Quellen werden ungeprüft mit Root-Rechten ausgeführt.

## Merksatz

**Erst lesen und eingrenzen; dann mit kleinstmöglicher Wirkung ändern.**

## Verwandte Themen

- [Linux-Grundlagen](01_Grundlagen.md)
- [Rechte, Prozesse und Netzwerk](02_Rechte_Prozesse_und_Netzwerk.md)
- [Git – Fehler und Lösungen](../06_Git/05_Fehler_und_Loesungen.md)

## Prüfungswissen

Exitcodes, Umleitungen, Pipes und sichere Skriptlogik können in
System- und Automatisierungsaufgaben geprüft werden.
