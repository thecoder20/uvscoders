<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Programmes.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" 
    integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
     crossorigin="anonymous">
    <title>Programmes</title>
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
    <div class="banniere">
        <img src="../image/image.jpg" alt="banniere" width="100%" height="450px">
    </div>
    <div class="programmes">
        <div class="titre">
            <h1>programmes uvs-coders</h1>
        </div>
        <div class="cours">
            <div class="design">
                <p>Design</p>
                <a href="Design.php">Rejoindre</a>
            </div>
            <div class="frontEnd">
                <p>Front End</p>
                <a href="frontEnd.php">Rejoindre</a>
            </div>
            <div class="backEnd">
                <p>Back End</p>
                <a href="backEnd.php">Rejoindre</a>
            </div>
            <div class="Tuto">
                <p>Tuto</p>
                <a href="">Rejoindre</a>
            </div>
            <div class="devMobile">
                <p>Dev Mobile</p>
                <a href="">Rejoindre</a>
            </div>
            <div class="stageEmploi">
                <p>Stage/Emploi</p>
                <a href="Stage&Emploi.php">Rejoindre</a>
            </div>
        </div>
    </div>
</section>
    <footer>
        <p>Copyright @ <a href="#">UVSCODERS</a>|2021 - Tous droits réservés</p>
        <p>Université virtuelle du sénégal (<a href="#">www.uvs.sn</a>)</p>
        <p style="margin-bottom: 0;">les formations à l'uvs (<a href="#">formation.uvs.sn</a>)</p>
    </footer>
</body>
</html>