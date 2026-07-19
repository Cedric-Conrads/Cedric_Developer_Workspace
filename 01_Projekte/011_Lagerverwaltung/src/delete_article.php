<?php

$connection = new mysqli('localhost', 'root', '', 'lagerverwaltung');

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

$artikelnummer = $_GET["artikelnummer"];

    $stmt = $connection->prepare(
        "DELETE FROM artikel
         WHERE artikelnummer = ?"
    );

    $stmt->bind_param(
        "s",
        $artikelnummer
    );



    $stmt->execute();


    header ("Location: index.php");

exit;

?>