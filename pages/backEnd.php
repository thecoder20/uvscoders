<?php 
 include "../config/db.php";
 include "../comment/commentb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/fbEnd.css">
    <link rel="stylesheet" href="../style/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" 
    integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
     crossorigin="anonymous">
     <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--Fontowesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--custom CSS file-->
    <title>Back-End</title>
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
    <header class="d-flex justify-content-between align-items-center">
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
        <aside class="aside-left w-25 text-center mr-100">
            <h4 class="bg-dark text-light">PROGRAMMES</h4>
            <ul>
                <li><a href="Design.php">DESIGN</a></li>
                <li><a href="frontEnd.php">FRONT-END</a></li>
                <li><a href="backEnd.php">BACK-END</a></li>
                <li><a href="Stage&Emploi.php">Stage-Emploi</a></li>
            </ul>
        </aside>
        <aside class="aside-right  mr-4">
            <h4 class="pt-2 pl-2">Back End</h4>
            <hr>

            <ul>
                <li><a href="#"><i class="fab fa-php lg-3"></i>&nbsp; PHP</a></li>
                <li><a href="#"><i class="fab fa-python lg-3"></i>&nbsp; python</a></li>
                <li><a href="#"><i class="fab fa-ruby lg-3"></i>&nbsp; Ruby</a></li>
                <li><a href="#"><i class="fab fa-java  lg-3"></i>&nbsp; Java</a></li>
                <li><a href="#"><i class="fab fa-cuttlefish col-3"></i>&nbsp; c</a></li>
                <li><a href="#"><i class="fab fa-c++ lg-3"></i>&nbsp; c++</a></li>
                <li><a href="#"><i class="fab fa-kotlin lg-3"></i>&nbsp; Kotlin</a></li>

            </ul>
        </aside>
    </section>
    <article class="row">
        <div class="title">
        <iframe width="998" height="481" src="https://www.youtube.com/embed/ysEN5RaKOlA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="content">
            <h1>Créer votre CV professionnel avec Adobe PhotoShop</h1>
            <div class="auteur">
                <div class="auteur_icon">
                    <img src="../image/icon.webp" alt="icon" width="50px" height="50px">
                </div>
                <div class="auteur_nom">
                    <h4>Auteur :</h4>
                    <p>Marie Diop</p>
                </div>
            </div>
            <div class="tutoriel">
                <div class="cv">
                    <img src="../image/cv.jpg" alt="cv-template" width="350px" height="400px">
                </div>
                <div class="description">
                    <p>
                         articles
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="commentaire">
        <div class="input-comment">
           <?php
             
             $sql = "SELECT * FROM commentairesb ORDER BY id DESC";
             $result = $con->query($sql);
             while($row = $result->fetch_assoc()){
             
          ?>
          <div class="comt-area">
            <div class="coder">
             <span class="ps py-2 ">Posté par : <?= $row['pseudo'] ?></span>
             <span class="dt">Le : <?= $row['act_date'] ?></span>
            </div>
            <div class="comment-section">
              <p class="cmt"><?= $row['comment']  ?></p>
            </div>
          </div>
          <?php } ?>
        </div>
        <hr>
            <div class="titre">
                <h1 class="ml-4">Laisser un commentaire</h1><br>
                <h5 text-success p-2><?= $msg; ?></h5>
            </div>
            <div class="form">
                <form action="../pages/backEnd.php" method="POST">
                    <input class="ml-4 form-control" type="text" name="pseudo" placeholder="Pseudo" required><br><br>
                    <textarea class="form-control ml-4" name="comment" id="" cols="40" rows="10">
                    </textarea>
                    <input class="btn btn-dark ml-4 mt-4"type="submit" name="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </article>
    <?php include "../pages/footer.php" ?>
</body>
</html>
