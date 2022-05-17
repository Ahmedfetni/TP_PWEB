<?php

session_start();
 
// Supprimer les info de l'utilisateur
$_SESSION = array();
 

session_destroy();
 
// Alleer a la page d'acceuil
header("location: index.php");
exit;
?>