<?php


require_once "db.php";

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