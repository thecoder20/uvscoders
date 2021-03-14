<?php 
//inclusion de la base de donnée
  include '../config/db.php';
  //Selection de la base de donnée 

  if(!$con){
      echo"Non connecté à la base de donnée";
  }
  if(!mysqli_select_db($con,'uvscoders')){
    
    echo  "Base de donnée non selectionnée";
  }
  @$email = $_POST['email'];
  @$password = $_POST['password'];
  $membres = "INSERT INTO administration (email, password) VALUES ('$email','$password')";
  $password = password_hash($password, PASSWORD_DEFAULT);
  if(!mysqli_query($con,$membres)){
      echo "Admin non ajouter";
  }else{
      echo "Admin Ajouter";  
  }
