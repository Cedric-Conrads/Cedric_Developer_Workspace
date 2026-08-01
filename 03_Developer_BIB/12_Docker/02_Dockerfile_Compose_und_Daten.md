# Dockerfile, Compose, Volumes und Netzwerke

## Was ist das?

Ein Dockerfile beschreibt den Image-Build. Docker Compose beschreibt eine
Anwendung aus mehreren Services, Netzwerken und Volumes.

## Warum brauche ich das?

Eine typische Webanwendung benötigt Webserver/PHP und Datenbank. Compose
hält ihre gemeinsame Konfiguration versionierbar und reproduzierbar.

## Syntax

```dockerfile
FROM php:8-apache

RUN docker-php-ext-install mysqli
COPY . /var/www/html
```

```yaml
services:
  web:
    build: .
    ports:
      - "8080:80"
    depends_on:
      - db
  db:
    image: mariadb
    environment:
      MARIADB_DATABASE: lagerverwaltung
    volumes:
      - db_data:/var/lib/mysql

volumes:
  db_data:
```

## Erklärung

Dockerfile-Anweisungen erzeugen gecachte Schichten. Häufig wechselnde
Dateien sollten spät kopiert werden. `.dockerignore` hält Git-Verzeichnis,
Secrets und unnötige Dateien aus dem Build-Kontext.

Compose-Service-Namen funktionieren im Compose-Netzwerk als Hostnamen.
Die Webanwendung verbindet sich daher beispielsweise mit Host `db`, nicht
`localhost`. Ein Volume persistiert Datenbankdateien.

`depends_on` steuert Startreihenfolge, garantiert aber nicht automatisch
fachliche Dienstbereitschaft; Healthchecks oder Retry-Logik sind sinnvoll.

## Beispiel

```bash
docker compose up --build
docker compose ps
docker compose logs -f web
docker compose down
```

## Typische Fehler

- Secrets stehen im Dockerfile und landen in Image-Schichten.
- `COPY . .` nimmt `.git`, Uploads oder lokale Zugangsdaten auf.
- Datenbank ohne Volume wird als dauerhaft betrachtet.
- Service verbindet sich zu `localhost` statt `db`.
- `latest` wird als reproduzierbare Version angenommen.

## Merksatz

**Dockerfile baut einen Service; Compose verbindet mehrere Services.**

## Verwandte Themen

- [Docker-Grundlagen](01_Grundlagen.md)
- [Docker-Workflow und Fehler](03_Workflow_Sicherheit_und_Fehler.md)
- [PHP-Datenbankverbindung](../04_PHP/15_Datenbankverbindung.md)

## Prüfungswissen

Build, Schichten, Ports, Volumes, Netzwerke, Umgebungsvariablen und
Mehrcontainer-Anwendungen sind prüfungsrelevant.
