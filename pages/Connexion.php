<?php 
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: Accueil_conn.php");
        exit;
    }
    include("../config/db.php");
    $emailError = $passwordError ="";
    $email = $password = '';
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);
        if(empty($passwordError) && empty($emailError))
        {
            if ($stmt = $con->prepare('SELECT id, password FROM inscription WHERE email = ?')) 
            {
                $stmt->bind_param('s', $_POST['email']);
                if($stmt->execute())
                {
                    $stmt->store_result();
        
                    if ($stmt->num_rows > 0) 
                    {
                        $stmt->bind_result($id, $password);
                        if($stmt->fetch())
                        {
                            if (password_verify($_POST['password'], $password))
                            {
                                session_start();
                                $_SESSION['loggedin'] = TRUE;
                                $_SESSION['name'] = $_POST['email'];
                                $_SESSION['id'] = $id;
                                header("location:Accueil_conn.php");
                            } 
                            else 
                            {
                                $passwordError = 'Mot de passe incorrect';
                            }
                        }
                    }
                    else 
                    {
                        $emailError = 'E-mail introuvable';
                    }
                }
                $stmt->close();
            } 
        }
        $con->close();   
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Connexion.css">
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
        <h1>Connectez-vous</h1>
        <form action="Connexion.php" method="post">
            <input type="text" name="email" placeholder="Votre email" required>
            <span class="emailError"><?= $emailError; ?></span>
            <br><br>
            <input type="password" name="password" placeholder="Votre mot de passe" required>
            <span class="passwordError"><?= $passwordError; ?></span>
            <br><br>
            <input type="submit" class="connexion" value="connexion">
            <input type="submit" class="member" value="Mot de passe oublié ?">
            <br><br><br>
        </form>
    </section>
</body>
</html>