<?php
session_start();
    include('bdd.php');
    $user = $_SESSION['utilisateur'];
    if ($user){
        $check = $bdd->prepare("SELECT * FROM etudiant WHERE USERNAME=?");
        $check->execute(array($user));
        $data = $check->fetch();
        $recup_user = $data['USERNAME'];
        $nom = $data['NOM'];
        $post = $data['POST_NOM'];
        $prenom = $data['PRENOM'];
        $email = $data['EMAIL'];
        $lieu = $data['LIEU_NAISSANCE'];
        $date = $data['DATE_NAISSANCE'];
        $etat = $data['ETAT_CIVIL'];
        $nationalite = $data['NATIONALITE'];
        $adresse = $data['ADRESSE'];
        $tel = $data['TELEPHONE'];
        $faculte = $data['FACULTE'];
        $promotion = $data['PROMOTION'];
        // header("location:student.php?name=$nom");
    }else{
      header('location:index.php');
}
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Etudiant</title>
    <link rel="stylesheet" href="HOME_PAGE/home.css">
</head>
<body>
     <!-- HEADER -->
     <div class="menubar">
      <nav>
        <div class="logo">
          <img src="INDEX_PAGE/img/logo.jpg" alt="">
          <h2>ISIPA <span> MATADI</span></h2>
        </div>
        <ul>
          <li><a href="result.php">RESULTAT</a></li>
          <li><a href="showbooks.php">BIBLIOTHEQUE</a></li>
          <li><a href="paiement.php" target="_blank">PAIEMENT</a></li>
        </ul>
        <a href="logout.php">DECONNEXION</a>
      </nav>
    </div>
    <!-- / HEADER -->
  <!-- page content -->
    <main>
      <div class="container">
        <aside class="left">
            <ul>
              <li><a href="#">Mon profil</a></li>
              <li><a href="#">Mes resultats</a></li>
              <li><a href="#">Calendrier Academiques</a></li>
              <li><a href="#">Horaire des cours</a></li>
              <li><a href="#">Annonces</a></li>
            </ul>
        </aside>
        <div class="center">
            <img src="Home_PAGE/img/avatar.jpg" alt="">
            <div class="name">
              <p>Nom : <?php echo $nom;  ?></p>
              <p>Post-Nom : <?php echo $post;  ?></p>
              <p>Prenom : <?php echo $prenom;  ?></p>
            </div>
        </div>
        <aside class="right">
            <P>EMAIL : <?php echo $email ?></P>
            <P>Lieu de naissance : <?php echo $lieu ?></P>
            <P>Date de naissance : <?php echo $date ?></P>
            <P>Etat civil : <?php echo $etat ?></P>
            <P>Nationalité : <?php echo $nationalite ?></P>
            <P>Adresse : <?php echo $adresse ?></P>
            <P>Telephone : <?php echo $tel ?></P>
            <P>Faculté : <?php echo $faculte ?></P>
            <P>Promotion : <?php echo $promotion ?></P>
        </aside>
      </div>
    </main>
  <!-- page content -->
</body>
</html>

