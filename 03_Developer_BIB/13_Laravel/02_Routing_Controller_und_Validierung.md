# Laravel – Routing, Controller, Views und Validierung

## Was ist das?

Routen ordnen HTTP-Anfragen Code zu. Controller koordinieren
Anwendungsfälle, Requests liefern Eingaben, Validation schützt Regeln und
Views beziehungsweise Responses stellen Ergebnisse dar.

## Warum brauche ich das?

Diese Bausteine strukturieren den Request-Response-Ablauf und verhindern,
dass alle Aufgaben in einer Datei landen.

## Syntax

```php
Route::get("/articles/create", [ArticleController::class, "create"]);
Route::post("/articles", [ArticleController::class, "store"]);
```

```php
public function store(Request $request): RedirectResponse
{
    $validated = $request->validate([
        "article_number" => ["required", "integer", "unique:articles"],
        "name" => ["required", "string", "max:100"],
        "stock" => ["required", "integer", "min:0"],
    ]);

    Article::create($validated);

    return to_route("articles.index");
}
```

## Erklärung

Route Model Binding kann eine Routen-ID direkt in ein Modell auflösen.
Middleware prüft Querschnittsaufgaben wie Anmeldung oder Rate Limits.
Form Requests kapseln komplexere Validierung und Autorisierung.

Blade escaped `{{ $value }}` standardmäßig. Unescaped Ausgabe mit
`{!! ... !!}` erfordert besondere Vorsicht.

## Beispiel

```php
Route::patch("/articles/{article}", [ArticleController::class, "update"])
    ->middleware("auth")
    ->name("articles.update");
```
Der Controller muss neben Validierung auch prüfen, ob der Benutzer den
konkreten Artikel ändern darf.

## Typische Fehler

- GET-Route verändert Daten.
- Validierung fehlt, weil HTML-Felder `required` sind.
- Controller enthält SQL, HTML und gesamte Fachlogik.
- Mass Assignment wird ohne `$fillable`/Schutzmechanismus verwendet.
- Autorisierung wird mit Authentisierung verwechselt.
- Unescaped Blade-Ausgabe erzeugt XSS-Risiko.

## Merksatz

**Route findet den Anwendungsfall; Controller koordiniert; Validierung und Autorisierung schützen ihn.**

## Verwandte Themen

- [Laravel-Grundlagen](01_Grundlagen.md)
- [Eloquent, Migrationen und Tests](03_Eloquent_Migrationen_und_Tests.md)
- [Security – Webanwendungen](../11_Security/02_Webanwendungen_Absichern.md)

## Prüfungswissen

MVC, HTTP-Methoden, Validierung, Middleware und Autorisierung lassen sich
direkt in Prüfungs- und Projektfragen übertragen.
