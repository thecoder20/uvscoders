<?php 
  include '../config/db.php';
  //Selection de la base de donnée 

  mysqli_select_db($con, 'uvscoders');
  // Requette pour la suppréssion 
  $membres = "DELETE FROM administration WHERE id='$_GET[id]'";
  //Execution de la requette
  $result = mysqli_query($con,$membres);
  if(mysqli_query($con,$membres)){
     
     header("refresh:1; url=admin.php");
  }else{
     echo "NOn supprimé";
  }
