<?php
session_start();
require("bdd_conn.php");
if ($_GET['id'] > 0){
    $getid=intval($_GET['id']);
  $affichage = $bdd->prepare("SELECT id,nom,prenom,postnom,sexe FROM electeurs WHERE id=?");
  $affichage->execute(array($getid));
  ($resultat=$affichage->fetch());
if(isset($_SESSION['id']) AND $resultat['id'] == $_SESSION['id']){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/menu_principal.css">
    <title>Document</title>
</head>
<body>
    <section class="tete">
                    <nav>
                           <ul>
                                <h3>Ceni Online-Vote</h3>
                                <img src="img/Logo_CENI-scaled.png" width="400px" alt="logo ceni" class="logo_ceni3">
                                <li><img src="img/home.png" alt=""><a href="#">Accueil</a></li>
                                <li><img src="img/aide.png" alt=""><a href="#">Aide</a></li>
                                <li><img src="img/note.png" alt=""><a href="#">Note d'information</a></li>
                                <li><img src="img/liste.png" alt=""><a href="#">Liste électorales</a></li>
                                <li><img src="img/vote.png" alt=""><a href="verivote.php'">Bureau de vote</a></li>
                                <li><img src="img/candidat.png" alt=""><a href="#">Liste de candidats</a></li>
                                <li><img src="img/urnes.png" alt=""><a href="#">Vérifier les urnes</a></li>
                                <li><img src="img/resultat.png" alt=""><a href="#">Résultats</a></li>
                                <li><img src="img/deconnexion.png" alt=""><?php echo'<a href="deconnexion.php">Déconnexion</a>';?></li>
                           </ul>
                    </nav>

            </div>  
    </section>
    <div class="bienvenu">
        <?php if ($resultat['sexe']=='M') { ?>
        <p>Bienvenue monsieur<strong><?= ' '.$resultat['nom'].' '.$resultat['postnom'].' '.$resultat['prenom'].' ';?></strong>au vote</p>
        <?php } ?>

        <?php if ($resultat['sexe']=='F') { ?>
        <p>Bienvenue madame<strong><?= ' '.$resultat['nom'].' '.$resultat['postnom'].' '.$resultat['prenom'].' ';?></strong>au vote</p>
        <?php } ?>
    </div>
    <section class="corps">
        <img src="img/Logo_CENI-scaled.png" width="400px" alt="logo ceni" class="logo_ceni">
        
           <div class="choix">
                <a href="#"><img src="img/home.png" alt="">Accueil</a>
                <a href="#"><img src="img/aide.png" alt="">Aide</a>
                <a href="#"><img src="img/note.png" alt="">information</a>
                <a href="#"><img src="img/liste.png" alt="">Liste électorales</a>
                <a href="verivote.php"><img src="img/vote.png" alt=""> Bureau de vote</a>
                <a href="#"><img src="img/candidat.png" alt=""> candidats</a>
                <a href="#"><img src="img/urnes.png" alt="">les urnes</a>
                <a href="#"><img src="img/resultat.png" alt="">Résultats</a>
                <?php echo'<a href="deconnexion.php"><img src="img/deconnexion.png" alt="">Déconnexion</a>';?>
           </div>
    
    </section>

</body>
</html>
<?php }else{
    header("location:deconnexion.php");
}
}

else {
    header("location:deconnexion.php");
}

?>




