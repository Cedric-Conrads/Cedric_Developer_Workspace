# git remote add origin

## Was ist das?

Der Befehl legt eine benannte Remote-Verbindung mit dem konventionellen
Namen `origin` an.

## Warum brauche ich das?

Git benötigt eine Zieladresse, um Commits zu fetchen oder zu pushen.

## Syntax

```bash
git remote add origin <repository-url>
git remote -v
```

## Erklärung

`remote` verwaltet entfernte Repository-Verbindungen, `add` fügt eine neue
hinzu und `origin` ist nur der übliche Name. Ein Repository kann mehrere
Remotes besitzen, zum Beispiel `origin` und `upstream`.

Das Anlegen des Remotes erzeugt noch keinen Push und keine
Branch-Zuordnung.

## Beispiel

```bash
git remote add origin https://github.com/benutzer/projekt.git
git remote get-url origin
git push -u origin main
```

## Typische Fehler

- Tippfehler `remode` statt `remote`.
- `origin` existiert bereits.
- URL zeigt auf falsches oder nicht berechtigtes Repository.
- Zugangstoken wird direkt in eine geteilte URL geschrieben.
- Remote und Upstream Branch werden gleichgesetzt.

## Merksatz

**Remote ist die Lieferadresse; Push ist die spätere Lieferung.**

## Verwandte Themen

- [Warum Remote vor Push](21_Remote_vor_Push.md)
- [Git Push](13_Git_Push.md)
- [Upstream Branch](18_Upstream_Branch.md)

## Prüfungswissen

Remote-Namen, URL, Push und Tracking-Zuordnung sauber trennen.
