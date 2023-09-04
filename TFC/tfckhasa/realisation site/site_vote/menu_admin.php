<?php
include("bdd_conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="style/menu_admin.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
   
<section class="navigation">
   <div class="choix">
   <h3>TABLEAU DE BORD</h3>
                <a href="menu_admin.php"><img src="img/home.png" alt=""> Accueil</a>
                <a href="#"><img src="img/note.png" alt="">information</a>
                <a href="liste_electoral.php" class="line"><img src="img/liste.png" alt="">Liste électorales</a>
                <a href="candidat_president.php"><img src="img/candidat.png" alt="">candidats presidentiels</a>
                <a href="candidat_national.php"><img src="img/candidat.png" alt=""> candidats deputé national</a>
                <a href="candidat_provincial.php" class="line"><img src="img/candidat.png" alt=""> candidats deputé provincial</a>
                <a href="#"><img src="img/urnes.png" alt="">les urnes</a>
                <a href="#"><img src="img/resultat.png" alt="">Résultats</a>
                <a href="#"><img src="img/aide.png" alt="">Aide</a>
                <?php echo'<a href="deconnexion.php"><img src="img/deconnexion.png" alt="">Déconnexion</a>';?>
           </div>
   </section>
        
</body>
</html>