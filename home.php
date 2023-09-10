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
     
    </main>
  <!-- page content -->
</body>
</html>

