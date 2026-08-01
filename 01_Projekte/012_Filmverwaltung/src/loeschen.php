<?php

require "db.php";

$id = (int) $_GET["id"];



$stmt = $connection->prepare(
    "DELETE FROM filme WHERE id = ?"
);

$stmt->bind_param("i", $id);

$stmt->execute();

header("Location: index.php");
exit();