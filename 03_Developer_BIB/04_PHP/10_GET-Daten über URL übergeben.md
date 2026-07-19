# GET – Daten über die URL

GET wird verwendet, um Daten über die URL an eine andere PHP-Datei zu senden.

Beispiel:

```html
<a href="bearbeiten.php?artikelnummer=<?= $row["artikelnummer"] ?>">
    Bearbeiten
</a>







Wenn die Artikelnummer 1001 ist, entsteht:

bearbeiten.php?artikelnummer=1001

In bearbeiten.php kann die Artikelnummer so ausgelesen werden:

$artikelnummer = $_GET["artikelnummer"];
Merksatz

GET

↓

Daten werden über die URL übertragen.

Die Daten können mit $_GET["..."] ausgelesen werden.


---

