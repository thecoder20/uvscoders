<?php
 session_start();
 session_destroy();
 header("location: Connexion.php "); 
 mysqli_close($con);
 ?>