<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmverwaltung</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <header>
        <h1>Filmverwaltung</h1>
    </header>

    <main>
        <section class="content">
            <h2>Willkommen zur Filmverwaltung</h2>
            <p>Hier können Sie Ihre Filminformationen verwalten und aktualisieren.</p>
        </section>
    </main>

   <form action="save_movie.php" method="post" class="film-form">

    <label>Titel:</label>
    <input type="text" name="titel" placeholder="z. B. Der Herr der Ringe">

    <label>Genre:</label>
    <input type="text" name="genre" placeholder="z. B. Action">

    <label>Erscheinungsjahr:</label>
    <input type="number" name="erscheinungsjahr" placeholder="z. B. 2001">

    <label>Bewertung:</label>
    <input type="number" name="bewertung" step="0.1" min="0" max="10" placeholder="z. B. 8.5">
    <button type="submit">Film speichern</button>

</form>

    


    <footer>
        <p>&copy; 2024 Filmverwaltung. Alle Rechte vorbehalten.</p>
    </footer>

    