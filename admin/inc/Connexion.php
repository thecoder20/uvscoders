<?php 
    include("../../config/db.php"); 
    $msg = "identifiants incorrect";

?>
<!DOCTYPE html> 
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Connexion.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" 
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
        crossorigin="anonymous">
        <title>Connexion</title>
        <script>
            $(document).ready(function()
            {
                $("#button").click(function()
                {
                    $(".dropdown").slideToggle();
                });
            });
        </script>
        <style>
        .emailError
        {
            color:red;
            font-weight:bold;
            font-size:18px;
            margin-left:110px;
        }
        .passwordError
        {
            color:red;
            font-weight:bold;
            font-size:18px;
            margin-left:95px;
        }
        </style>
    </head>
    <body>
        <section>
            <h1>Se connecter à la page admin</h1>
            <form action="Connexion.php" method="post">
                <input type="text" name="email" placeholder="Votre email" required>
                <br><br>
                <input type="password" name="password" placeholder="Votre mot de passe" required>
                <br><br>
                <input type="submit" name="login" class="connexion" value="connexion">
                <input type="submit" class="member" value="Mot de passe oublié ?">
                <br><br><br>
                <center><h2 style="color:red; font-size:18px"><?= $msg ?><h2><center>
            </form>
        </section>
        <?php 
              
            if(isset($_POST['login'])){
                $query = "SELECT * FROM administration WHERE  email ='$_POST[email]' AND  password ='$_POST[password]'";
                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result)==1){
                    session_start();
                    $_SESSION['email'] = $_POST['email'];
                    header("Location: ../admin.php");
                }else{
                    echo"<script>alert('$msg');</script>";
                }
            }
        ?>
    </body>
</html>