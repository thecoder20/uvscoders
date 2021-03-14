<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Accueil_conn.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <title>Accueil</title>
    <script>
        $(document).ready(function()
        {   
            $("#button").click(function()
            {
                $(".cache").slideToggle();
            });
        });
    </script>
</head>
<body>
    
    <header>
        <img src="../image/logo.jpg" alt="photo" style="width: 150px;height: 50px;" >
        <div class="cache">
        <ul>
            <li><a href="Accueil_conn.php">Accueil</a></li>
            <li><a href="Programmes.php">programmes</a></li>
            <li><a href="Profil.php">profil</a></li>
        </ul>
    </div>
    <button id="button"><i class="fas fa-bars" style="font-size: 28px;"></i></button>
    </header>

    <div class="banniere">
    <h1>UVS CODERS,L'UNIVERS DES CODERS</h1> 
    <p>
        échange,partages,créativité.avec uvs 
        coders,donnez vous une chance de devenir<br> meilleur</p>
    <div class="bouton">
    <a class="btn1" href=""> Rejoignez-nous</a>
    <a class="btn2" href="#"> A propos de nous </a>
</div>
</div>
</body>
</html>