<?php

include "./config.php";
$base = connect ();

$email = $_POST ['mail'];
$password = $_POST ['mdp'];
//row_count
//deplace image vers assests + stocker nom.extention de l'image dans la base de donner
$requette = "SELECT role from users where email='$email' and motpasse='$password'";
$data =$base->query($requette);
$role=$data->fetchObject();
if ($role==null)
header('location:./../HTML/viewlogin.html');
else if ($role->role=="admin")
header ('location:./home.php');
else 
header ('location:./site.php');

?>