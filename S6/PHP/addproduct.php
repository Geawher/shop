<?php

include "./config.php";
$base = connect ();

$name = $_POST ['name'];
$description = $_POST ['Description'];
$price = $_POST ['price'];
$category =$_POST ['idCat']; 
$requette = "INSERT INTO products VALUES (null,'$name','$description',$price,'$category')";

$lignes = $base->exec($requette);
if  ($lignes == 1)
header ('location:./home.php');
else 
echo 'lé'

?>