<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lagerverwaltung</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <header>
        <h1>Lagerverwaltung</h1>
    </header>

    <main>
        <section class="content">
            <h2>Willkommen zur Lagerverwaltung</h2>
            <p>Hier können Sie Ihre Lagerinformationen verwalten und aktualisieren.</p>
        </section>
    </main>

   <form action="save_article.php" method="post" class="article-form">

    <label>Artikelnummer:</label>
    <input type="text" name="artikelnummer" placeholder="z. B. ART-1001">

    <label>Artikelname:</label>
    <input type="text" name="name" placeholder="z. B. Schrauben M8">

    <label>Bestand:</label>
    <input type="number" name="bestand" placeholder="z. B. 150">

    <label>Lagerort:</label>
    <input type="text" name="lagerort" placeholder="z. B. Regal A3">

    <button type="submit">Artikel speichern</button>


    <a href="lagerbestand.php">
    Lagerbestand anzeigen
</a>

</form>

    </div>


    <footer>
        <p>&copy; 2024 Lagerverwaltung. Alle Rechte vorbehalten.</p>
    </footer>

   <?php
if (isset($_GET["status"])) {

    if ($_GET["status"] === "success") {
        echo "<p class=\"message success\">Artikel erfolgreich gespeichert.</p>";
    } elseif ($_GET["status"] === "duplicate") {
        echo "<p class=\"message error\">Artikel bereits vorhanden.</p>";
    }

}
?>