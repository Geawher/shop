<?php

include "./config.php";
$base = connect ();

$id = $_GET ['id'];
$name = $_POST ['name'];
$description = $_POST ['Description'];
$price = $_POST ['price'];
$category =$_POST ['idCat']; 
$requette = "UPDATE products set name='$name',description='$description',price=$price,idCat=$category WHERE id=$id";

$lignes = $base->exec($requette);

header ('location:./home.php');

?>