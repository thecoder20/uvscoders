<?php
//Demarrage de la session
session_start();

$_SESSION = array();
 
// Detruis la session ce qui nous permet de nous déconnecter
session_destroy();
 
// Permet de nous rediriger vers la page de connexion
header("location: ../Accueil_nm.php");
    exit;
?>
