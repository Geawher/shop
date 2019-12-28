<?php

include "./config.php";
$base = connect ();

$name = $_POST ['name'];

$requette = "INSERT INTO categories VALUES (null,'$name')";

$lignes = $base->exec($requette);
if  ($lignes == 1)
header ('location:./home.php');
else 
header ('location:./../HTML/addcategory.php?added=false');

?>