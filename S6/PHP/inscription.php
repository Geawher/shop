<?php

include "./config.php";
$base = connect ();

$name = $_POST ['name'];
$prenom = $_POST ['prenom'];
$email = $_POST ['email'];
$password = $_POST ['mdp'];
$tel =$_POST ['tel']; 
$age=$_POST ['age'];
$birth=$_POST['birth'];
$requette = "INSERT INTO users VALUES (null,'$email','$password','$name','$prenom',$tel,$age,'$birth','user')";

$lignes = $base->exec($requette);
if  ($lignes == 1)
header ('location:./home.php');
else 
header ('location:./../HTML/inscription.html');

?>