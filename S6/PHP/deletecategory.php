<?php

include "./config.php";
$base = connect ();

$id = $_GET ['id'];

$requette = "DELETE FROM categories WHERE id=$id";

$lignes = $base->exec($requette);

header ('location:./home.php');

?>