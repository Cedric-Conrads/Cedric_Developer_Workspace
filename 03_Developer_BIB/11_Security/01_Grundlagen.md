# IT-Sicherheit – Grundlagen

## Was ist das?

IT-Sicherheit schützt Informationen und Systeme vor unbefugtem Zugriff,
Veränderung, Ausfall und Missbrauch. Sicherheit ist ein fortlaufender
Risikoprozess.

## Warum brauche ich das?

Anwendungen verarbeiten wertvolle Daten und sind Teil größerer Systeme.
Ein einzelner Fehler kann Vertraulichkeit, Integrität oder Verfügbarkeit
beeinträchtigen.

## Syntax

```text
Asset → Bedrohung → Schwachstelle → Risiko
      → Maßnahme → Restrisiko → regelmäßige Überprüfung
```

Schutzziele:

```text
Confidentiality – Vertraulichkeit
Integrity       – Integrität
Availability    – Verfügbarkeit
```

## Erklärung

Weitere Prinzipien:

- Least Privilege: nur notwendige Rechte.
- Defense in Depth: mehrere unabhängige Schutzschichten.
- Secure by Default: sichere Grundeinstellungen.
- Fail Securely: Fehler öffnen keine ungeschützten Wege.
- Datenschutz: nur notwendige personenbezogene Daten verarbeiten.
- Updates, Backups, Monitoring und Incident Response einplanen.

Risiko ergibt sich vereinfacht aus Eintrittswahrscheinlichkeit und
Schadensausmaß.

## Beispiel

Für die Lagerverwaltung:

- DB-Benutzer erhält nur nötige Rechte.
- Eingaben werden validiert und SQL parametrisiert.
- Ausgaben werden HTML-kodiert.
- Änderungen benötigen Authentisierung, Autorisierung und CSRF-Schutz.
- Backups und Wiederherstellung werden getestet.

## Typische Fehler

- Sicherheit wird erst am Projektende geprüft.
- „Internes System“ wird automatisch als sicher betrachtet.
- Verschlüsselung wird als Ersatz für Rechte und Validierung gesehen.
- Backups sind unverschlüsselt oder nie wiederhergestellt worden.
- Sicherheitsfehler werden geheim gehalten statt verantwortlich behandelt.

## Merksatz

**Sicherheit ist kein einzelnes Feature, sondern eine Eigenschaft des gesamten Prozesses.**

## Verwandte Themen

- [Webanwendungen absichern](02_Webanwendungen_Absichern.md)
- [Authentisierung, Secrets und Betrieb](03_Authentisierung_Secrets_und_Betrieb.md)
- [PHP – Best Practices](../04_PHP/04_Best_Practices.md)

## Prüfungswissen

Schutzziele, Risikoanalyse, Schutzbedarf, technische/organisatorische
Maßnahmen und Datenschutz sind zentrale IHK-Themen.
