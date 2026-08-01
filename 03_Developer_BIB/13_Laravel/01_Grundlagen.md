# Laravel – Grundlagen und MVC

## Was ist das?

Laravel ist ein PHP-Webframework. Es stellt Struktur und Werkzeuge für
Routing, Controller, Views, Validierung, Datenbanken, Authentisierung,
Tests, Jobs und weitere Anwendungsbereiche bereit.

## Warum brauche ich das?

Ein Framework reduziert wiederkehrenden Infrastrukturcode und gibt Teams
gemeinsame Konventionen. Die PHP-, HTTP-, SQL- und Sicherheitsgrundlagen
bleiben trotzdem erforderlich.

## Syntax

```bash
composer create-project laravel/laravel lagerverwaltung
cd lagerverwaltung
php artisan serve
```

```text
Request → Route → Middleware → Controller
        → Service/Model → View oder JSON Response
```

## Erklärung

MVC trennt vereinfacht:

- Model: Daten und fachnahe Datenzugriffe.
- View: Darstellung, in Laravel meist Blade.
- Controller: verarbeitet Request und koordiniert Antwort.

Wichtige Ordner sind unter anderem `app/`, `routes/`, `resources/views/`,
`database/migrations/`, `tests/` und `config/`. `artisan` ist die
Kommandozeile des Frameworks, Composer verwaltet PHP-Abhängigkeiten.

Laravel entwickelt sich weiter. Vor versionsspezifischen Befehlen immer die
Dokumentation der tatsächlich installierten Hauptversion prüfen.

## Beispiel

```php
// routes/web.php
use App\Http\Controllers\ArticleController;

Route::get("/articles", [ArticleController::class, "index"])
    ->name("articles.index");
```

## Typische Fehler

- Framework wird genutzt, ohne PHP/HTTP-Grundlagen zu verstehen.
- Geschäftslogik sammelt sich vollständig im Controller.
- `.env` wird committed.
- Version der Dokumentation passt nicht zum Projekt.
- Cache-Probleme werden durch beliebige Befehle statt Zustandsprüfung behandelt.

## Merksatz

**Laravel gibt Struktur und Werkzeuge; die fachlichen Entscheidungen bleiben bei dir.**

## Verwandte Themen

- [Routing, Controller und Validierung](02_Routing_Controller_und_Validierung.md)
- [Eloquent, Migrationen und Tests](03_Eloquent_Migrationen_und_Tests.md)
- [OOP – Grundlagen](../10_OOP/01_Grundlagen.md)

## Prüfungswissen

MVC, Frameworkvorteile, Abhängigkeiten, Routing und Schichtentrennung sind
prüfungs- und projektbezogen relevant.
