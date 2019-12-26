<?php
 function connect ()
  {
    $server= "localhost";
    $database="shop";
    $username="root";
    $password="";
    /* Execute le code Try si il y a une exception catch  */ 
    try {
        $connexion = new PDO ("mysql:host=$server;dbname=$database",$username,$password);
        return $connexion;
    }catch(PDOException $e){
       die('Erreur :' .$e->getMessage()); /* . pour la concatenation <--> + en JAVA */ 
    }

  }
/* CRUD create read update delete */

?>