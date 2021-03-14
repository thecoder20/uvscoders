<?php 
$database_host = 'localhost';
$database_username = 'root';
$database_password = '';
$database_name = 'uvscoders';
//Connexion a la base de donnée

$con = mysqli_connect($database_host,$database_username,$database_password,$database_name);
//Condition au cas ou l'on arrive pas a se connecter
if(mysqli_connect_errno())
{
    exit('Impossible de se connecter au serveur'.mysqli_connect_error());
}
?>