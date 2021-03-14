<?php include "../config/db.php"?>
<?php include "ajoutUser.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=maximum">
    <title>Page-admin</title>
    <!--Fontowesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--custom CSS file-->
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <input type="checkbox" id="sidebar-toggle">
 <div class="sidebar">
     <!--L'entete-->
     <div class="logo">
         <img src="./logo/logouvscoder.png" alt="logo"></>
     </div>
     <div class="sidebar-header">
        <label for="sidebar-toggle">
          <i id="bars" class="icon1 fas fa-bars"></i>
        </label>
     </div>
     <!--!L'entete-->
     <!--Menu de coté-->
      <div class="sidebar-menu">
          <div class="traie">
              <span class="line"></span>
          </div>
          <div class="side-title">
              <h5>MENU</h5>
          </div>
          <ul>
              <li><a href="#"><span class="add"></span><i class="icon fas fa-user"></i><span>&nbsp; Admin</span></a></li>
              <li><a href="user.php"><span class="user"></span><i class="icon fas fa-user"></i><span>&nbsp; Utilisateurs</span></a></li>
              <li><a href="#"><span class="es"></span><i class="icon fas fa-briefcase"></i><span>&nbsp; Emploi|Stages</span></a></li>
              <li><a href="#"><span class="com"></span><i class="icon fas fa-comments-alt"></i><span>&nbsp; Commentaires</span></a></li>
              <li><a href="design.php"><span class="vid"><i class="icon fas fa-video"></i></span><span>&nbsp; Design</span></a></li>
          </ul>
      </div>
     <!--!Menu de coté-->
 </div>
 <!--Contenu principal-->
 <div class="main-content">
   <header>
       <h4>Tableau de Bord</h4>
       <div>
           <input id="input-id" type="search" placeholder="search" >
           <span><i class="icon2 fas fa-search"></i></span>
       </div>
       <div class="profil">
           <span></span>
       </div>
       <div id="admin">
           <a href="#">Admin</a>
       </div>
       <div id="decon">
        <a href="inc/Deconn.php">Se déconnecter</a>
    </div>
   </header>
   <!--midle-->
    <main>
        <div class="main-dashbrd">
           <!--Users-->
            <div class="users-e">
                <i class="fas fa-users"></i><br>
                <span>
                <?php 
                    $membres = "SELECT count(id) as Total FROM inscription";
                    $result  = mysqli_query($con, $membres);
                    $values = mysqli_fetch_assoc($result);
                    $num_rows=$values['Total'];
                    echo $num_rows;
                    
                ?>
                </span>
                <h4>Utilisateurs</h4>
            </div>
           <!--!Users-->
           <!--Admin-->
            <div class="users-e">
                <i class="fas fa-users-cog"></i><br>
                <span>

                  <?php 
                    $membres = "SELECT count(id) as Total FROM administration";
                    $result  = mysqli_query($con, $membres);
                    $values = mysqli_fetch_assoc($result);
                    $num_rows=$values['Total'];
                    echo $num_rows;
                    
                ?>
                </span>
                <h4>Admin</h4>
            </div>
           <!--!Admin-->
            <!--Admin-->
            <div class="users-e">
                <i class="fas fa-laptop-code"></i><br>
                <span>80</span>
                <h4>Stages</h4>
            </div>
           <!--!Admin-->
        </div>
        <div id="data-id">
            <div class="db-data">
                <!--col1-->
                <!---AJOUTER UN UTILISATEURS--->
                <center>
                <div class="Iadmin">
                 <br><br><br>
                  <form action="ajoutUser.php" method="POST">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <input id="btn" type="submit" name="addA" value="Ajouter un Admin">
                  </form>
                </div>
                </center>
                 <table>
                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Mot de passe</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php 
                       
                            $membres = "SELECT * FROM administration";
                            $result = mysqli_query($con,$membres);
                            if(mysqli_num_rows($result) > 0 )  { 
                            //affichages des données de chaque ligne
                            while($row = mysqli_fetch_assoc($result)){ 
                                            
                             echo"
                            <tr>
                            <td>",$row['id'],"</td>
                            <td>",$row['email'],"</td>
                            <td>",$row['password'],"</td>
                            <td><button id='btns'><a style='color:#fff' href=suppAdmin.php?id=".$row['id'].">Supprimer</a></button></td>
                            </tr>
                              
                            
                            ";

                            } 
                            }else{
                            echo "0 Résultats";
                            }
                            ?>
               </tbody>
                 </table>
            </div>
        </div>
    </main>
   <!--!midle-->
</div>
 <!--!Contenu principal-->

<!--js CDN-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<!--!Fin de js CDN-->
<!--Lien avec js-->
<script src="./index.js"></script>
<!--FIn de lien avec js-->
</body>
</html> 
