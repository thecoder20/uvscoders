<?php
  include "../config/db.php";
   
   $msg="";
  if(isset($_POST['submit'])){

    $pseudo = $_POST['pseudo'];
    $comment = $_POST['comment'];
    $date = date("y-m-d-h");
    
    $sql = "INSERT INTO commentaires(pseudo,comment,act_date) VALUES ('$pseudo','$comment','$date')";
    if($con->query($sql)){
      $msg = "<p style='color:green'>commentaire ajouté</p>";
    }else{
      $msg = "<p style='color:red'>commentaire non ajouté</p>";

    }
  }

?>
