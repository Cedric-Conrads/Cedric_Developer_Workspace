# Laravel – Eloquent, Migrationen, Datenbank und Tests

## Was ist das?

Eloquent ist Laravels ORM für Modelle und Beziehungen. Migrationen
versionieren Schemaänderungen. Tests prüfen Anwendungsfälle automatisiert.

## Warum brauche ich das?

Datenbankschema und Code bleiben gemeinsam nachvollziehbar. Tests sichern
Validierung, Berechtigung, Persistenz und Antworten gegen Regressionen ab.

## Syntax

```php
Schema::create("articles", function (Blueprint $table): void {
    $table->id();
    $table->unsignedInteger("article_number")->unique();
    $table->string("name", 100);
    $table->unsignedInteger("stock")->default(0);
    $table->timestamps();
});
```

```php
final class Article extends Model
{
    protected $fillable = ["article_number", "name", "stock"];
}
```

## Erklärung

Migrationen besitzen `up()` für Anwendung und `down()` für Rücknahme.
Eloquent-Beziehungen bilden Kardinalitäten ab. Eager Loading verhindert
häufig N+1-Abfragen. Factories erzeugen Testdaten.

Feature-Tests prüfen den HTTP-Ablauf; Unit-Tests kleine Fachlogik. Tests
sollten Erfolg, Validierungsfehler, fehlende Rechte und Randfälle abdecken.
Produktionsdeployment führt Migrationen kontrolliert, mit Backup und
kompatibler Rollout-Strategie aus.

## Beispiel

```php
public function test_negative_stock_is_rejected(): void
{
    $response = $this->post("/articles", [
        "article_number" => 1001,
        "name" => "Hammer",
        "stock" => -1,
    ]);

    $response->assertSessionHasErrors("stock");
    $this->assertDatabaseMissing("articles", ["article_number" => 1001]);
}
```

## Typische Fehler

- Produktionsschema wird manuell geändert und Migration fehlt.
- `down()` zerstört Daten unüberlegt.
- N+1-Abfragen werden bei Listen nicht erkannt.
- Tests nutzen dieselbe Datenbank wie Entwicklung oder Produktion.
- Mass Assignment und Modellattribute sind unkontrolliert.
- Tests prüfen nur Happy Paths.

## Merksatz

**Migrationen versionieren Struktur; Modelle bilden Daten ab; Tests sichern Verhalten.**

## Verwandte Themen

- [Laravel-Grundlagen](01_Grundlagen.md)
- [SQL – Grundlagen](../05_SQL/01_Grundlagen.md)
- [OOP – SOLID und Tests](../10_OOP/03_SOLID_Komposition_und_Tests.md)

## Prüfungswissen

ORM, Migrationen, Beziehungen, Testarten und sichere Deployments sind
relevante Berufs- und Projektinhalte.
