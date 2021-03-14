<?php 
require_once("../config/db.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Inscription.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" 
    integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
     crossorigin="anonymous">
    <title>Inscription</title>
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
        margin-left:100px;
    }
    .passwordError
    {
        color:red;
        font-weight:bold;
        font-size:18px;
        margin-left:70px;
    }
    .registerSuccess
    {
        color:blue;
        font-weight:bold;
        font-size:18px;
        margin-left:40px;
    }
    </style>
</head>
<body>
    <header>
        <img src="../image/logo.jpg" alt="logo" width="150px" height="50px">
        <div class="dropdown">
            <ul>
                <li><a href="../pages/Connexion.php">connexion</a></li>
                <li><a href="../pages/Inscription.php">inscription</a></li>
            </ul>
        </div>
        <button id="button"><i class="fas fa-bars" style="font-size: 28px;"></i></button>
    </header>
    <section>
        <?php 
            function test_input($data) 
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $passwordErr = "";
            $name = $email = $password = $cpassword = "";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                $name = test_input($_POST["name"]);
                $email = test_input($_POST["email"]);
                $password = test_input($_POST["password"]);
                $cpassword = test_input($_POST["cpassword"]);
                $message = "Vos données ont bien été enregistrés";
                if($password != $cpassword)
                {
                    $passwordErr = "Mots de passe non identiques";
                }
            }
        ?>
        <?php
        $verification = '';
            if($requete = $con->prepare('SELECT id, password FROM inscription WHERE email = ?'))
            {
                $requete->bind_param('s', $_POST['email']);
                $requete->execute();
                $requete->store_result();

                if($requete->num_rows > 0)
                {
                    $verification = "Cet email existe déja";
                }
                else
                {
                    //Dans le cas ou l'email n'existe pas la requete est insérée
                    $message = "";
                    if($requete = $con->prepare('INSERT INTO inscription (pseudo,email,password)
                    VALUES (?, ?, ?)'))
                    {
                        $password = password_hash($password, PASSWORD_DEFAULT);
                        $requete->bind_param("sss", $_POST['name'], $_POST['email'], $password);
                        if($requete->execute())
                        {
                            header("location:Connexion.php");
                        }
                    }
                    else
                    {
                        $message = "Une erreur est survenue";
                    }
                }
                $requete->close();
            }
            else
            {
                $verification = "Un problème au niveau de la préparation est survenu";
            }
            $con->close();
        ?>
        <h1>INSCRIVEZ-VOUS</h1>
        <form action="Inscription.php" method="post">
            <input type="text" name="name" value="<?php $name ?>" placeholder="Votre pseudo" required><br><br>
            <input type="email" name="email" value="<?php $email ?>" placeholder="Votre adresse mail" required>
            <span class="emailError"><?= $verification;?></span><br><br>
            <input type="password" name="password" value="<?php $password ?>" placeholder="Votre mot de passe" required>
            <span class="passwordError"><?= $passwordErr ?></span>
            <br><br>
            <input type="password" name="cpassword" placeholder="Confirmer votre mot de passe" required>
            <span class="passwordError"><?= $passwordErr ?></span><br><br>
            <input type="submit" class="connexion" value="S'inscrire">
            <input type="submit" class="member" value="Déjà membre ?">
            <br><br><br>
        </form>
    </section>
</body>
</html>