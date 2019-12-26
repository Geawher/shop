<?php

include "./config.php";
$base = connect ();

$id = $_GET ['id'];
$name=$_POST ['name'];

$requette = "UPDATE categories set name='$name' WHERE id=$id";

$lignes = $base->exec($requette);

header ('location:./home.php');

?>