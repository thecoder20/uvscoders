<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Connexion.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" 
    integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
     crossorigin="anonymous">
    <link rel="stylesheet" href="../style/Stage&Emploi.css">
    <title>Stage & Emploi</title>
    <script>
        $(document).ready(function()
        {
            $("#button").click(function()
            {
                $(".dropdown").slideToggle();
            });
        });
    </script>
</head>
<body>
    <header>
            <img src="../image/logo.jpg" alt="logo" width="150px" height="50px">
            <div class="dropdown">
                <ul>
                    <li><a href="Accueil_conn.php">Accueil</a></li>
                    <li><a href="Programmes.php">programmes</a></li>
                    <li><a href="Profil.php">profil</a></li>
                </ul>
            </div>
            <button id="button"><i class="fas fa-bars" style="font-size: 28px;"></i></button>
    </header>
    <section>
        <aside class="aside-left">
            <h4>PROGRAMMES</h4>
            <ul>
                <li><a href="Design.php">DESIGN</a></li>
                <li><a href="#">FRONT-END</a></li>
                <li><a href="#">BACK-END</a></li>
                <li><a href="Stage&Emploi.php">Stage-Emploi</a></li>
            </ul>
        </aside>
        <aside class="aside-right">
            <h4>Stage/Emploi</h4>
            <ul>
                <li><a href="#">Développeur Front-End</a></li>
                <li><a href="#">Développeur Back-End</a></li>
                <li><a href="#">Développeur Full  Stack</a></li>
                <li><a href="#">Administrateur de BD</a></li>
                <li><a href="#">Designer </a></li>
            </ul>
        </aside>
    </section>
    <article class="row">
            <div class="title">
                <img src="../image/Background.jpg" alt="banniere" width="98%" height="auto">
                <h1>Emplois et Stages disponibles</h1>
            </div>
            <div class="block">
                <div class="content">
                    <img src="../image/icon.webp" alt="logo1" width="50px" height="50px">
                    <p>Un entreprise de la place recherche un<br> développeur Front-End </p>
                    <button>Postuler</button>
                </div>
                <div class="content">
                    <img src="../image/icon.webp" alt="logo1" width="50px" height="50px">
                    <p>Un entreprise de la place recherche un<br>  développeur Front-End </p>
                    <button>Postuler</button>
                </div>
                <div class="content">
                    <img src="../image/icon.webp" alt="logo1" width="50px" height="50px">
                    <p>Un entreprise de la place recherche un<br>  développeur Front-End </p>
                    <button>Postuler</button>
                </div>
                <div class="content">
                    <img src="../image/icon.webp" alt="logo1" width="50px" height="50px">
                    <p>Un entreprise de la place recherche un<br>  développeur Front-End </p>
                    <button>Postuler</button>
                </div>
                <div class="content">
                    <img src="../image/icon.webp" alt="logo1" width="50px" height="50px">
                    <p>Un entreprise de la place recherche un<br>  développeur Front-End </p>
                    <button>Postuler</button>
                </div>
                <div class="content">
                    <img src="../image/icon.webp" alt="logo1" width="50px" height="50px">
                    <p>Un entreprise de la place recherche un<br>  développeur Front-End </p>
                    <button>Postuler</button>
                </div>
            </div>
    </article>
    <footer>
        <p>Copyright @ <a href="#">UVSCODERS</a>|2021 - Tous droits réservés</p>
        <p>Université virtuelle du sénégal (<a href="#">www.uvs.sn</a>)</p>
        <p style="margin-bottom: 0;">les formations à l'uvs (<a href="#">formation.uvs.sn</a>)</p>
    </footer>
</body>
</html>