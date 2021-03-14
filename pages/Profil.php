<?php include "../config/db.php" ?>
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
     <link rel="stylesheet" href="../style/Profil.css">
    <title>Profil</title>
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
    <div class="left">
        <div class="image">
            <img src="<?php echo $row['img_location']; ?>">
            <p>The Coder</p>
        </div>
        <div class="list">
            <ul>
                <li>Ingénierie Logicielle</li>
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">Javascript</a></li>
            </ul>
        </div>
        <div class="text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Suscipit sunt odio, ipsum eum dicta officiis, 
            doloremque cupiditate natus ut quasi error fugiat!
            Est nobis minus, placeat cupiditate aliquam quisquam nesciunt.</p>
        </div>
    </div>
    <div class="right">
        <h4>Configuration de Profil</h4>
        <ul>
            <li>
                <div>
                <form action="avatar.php" method="POST"  enctype="multipart/form-data">
                <input type="file" name="image"><br>
                <button type="submit">Charger une image</button>
                </form>
                </div>
            </li>
            <li><a href="#">Compétences</a></li>
            <li><a href="#">Votre Statut</a></li>
            <li><a href="#">Changer votre mot de passe</a></li>
            <li><a href="#">Formations</a></li>
            <li><a href="Déconnexion.php">Déconnexion</a></li>
        </ul>
    </div>
</section>
</body>
<?php include "../pages/footer.php" ?>
</html>
