<?php
session_start();
    include('bdd.php');
    $user = $_SESSION['utilisateur'];
    if ($user){
        // $name = $_GET['name'];
        $check = $bdd->prepare("SELECT * FROM etudiant WHERE USERNAME=?");
        $check->execute(array($user));
        $data = $check->fetch();
        $recup_user = $data['USERNAME'];
        $nom = $data['NOM'];
        $post = $data['POST_NOM'];
        $prenom = $data['PRENOM'];
        $email = $data['EMAIL'];
        $check = $bdd->prepare("SELECT * FROM result_tm1 WHERE USERNAME=?");
        $check->execute(array($user));
        $show = $check->fetch();
        // $nom = $show['NOM'];
        // $post = $show['POST_NOM'];
        // $prenom = $show['PRENOM'];
        $info = $show['INFO'];
        $physique = $show['PHYSIQUE'];
        $electro_gen = $show['ELECTRO_GEN'];
        $analyse = $show['ANALYSE'];
        $sante = $show['SANTE'];
        $se = $show['SE'];
        $schemas = $show['SCHEMAS_ELEC'];
        $educit = $show['EDUCIT'];
        $algo = $show['ALGO'];
        $math = $show['MATH'];
        $anglais = $show['ANGLAIS'];
        $electro_digi = $show['ELECTRO_DIGI'];
        $leeo = $show['LEEO'];
        $mesure = $show['MESURE'];
        $francais = $show['FRANCAIS'];
        $projet = $show['PROJET'];
        $techno = $show['TECHNO'];
        $percent = $show['PERCENT'];
        $mention = $show['MENTION'];
     
    }else{
      header('location:index.php');
}
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTATION DES RESULTATS</title>
    <link rel="stylesheet" href="RESULT/result.css">
    <!-- <link rel="stylesheet" href="RESULT/addnote.css"> -->
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
          <li><a href="home.php">PROFIL</a></li>
          <li><a href="showbooks.php">BIBLIOTHEQUE</a></li>
          <li><a href="paiement.php" target="_blank">PAIEMENT</a></li>
        </ul>
        <a href="logout.php">DECONNEXION</a>
      </nav>
    </div>
    <!-- / HEADER -->
  <!-- page content -->

    <main>
    <center>  
      <div class="container" style="margin-top:4%">
        <div class="center">
            <img src="Home_PAGE/img/avatar.jpg" alt="" style="border-radius:50%">
            <div class="name">
              <p>Nom : <?php echo $nom;  ?></p>
              <p>Post-Nom : <?php echo $post;  ?></p>
              <p>Prenom : <?php echo $prenom;  ?></p>
            </div>
      </div>
      </center>
      <div class="part1">
        <div>
          <label for="">INFORMATIQUE FONDAMENTAL : <?php echo $info;?></label> 
            <label for="">PHYSIQUE : <?php echo $physique;?></label> 
            <label for="">ELECTRONIQUE GENERALE : <?php echo $electro_gen;?></label> 
            <label for="">ANALYSE VECTORIELLE : <?php echo $analyse;?></label> 
            <label for="">SANTE PUBLIQUE : <?php echo $sante;?></label> 
            <label for="">SYSTEME D'EXPLOITATION : <?php echo $se;?></label> 
            <label for="">SCHEMAS ELECTRIQUE : <?php echo $schemas;?></label> 
            <label for="">EDUCATION A LA CITOYENNETE : <?php echo $educit;?></label> 
            <label for="">ALGORITHME ET PROGRAMMATION : <?php echo $algo;?></label> 
        </div>
        <div>
            <label for="">MATHEMATIQUE : <?php echo $math;?></label> 
            <label for="">ANGLAIS TECHNIQUE : <?php echo $anglais;?></label> 
            <label for="">ELECTRIQUE DIGITALE : <?php echo $electro_digi;?></label> 
            <label for="">LEEO : <?php echo $leeo;?></label> 
            <label for="">MESURE ELECTRIQUE : <?php echo $mesure;?></label> 
            <label for="">FRANCAIS : <?php echo $francais;?></label> 
            <label for="">PROJET : <?php echo $projet;?></label> 
            <label for="">TECHNOLOGIE DES COMPOSANTS : <?php echo $techno;?></label> 
        </div>  
       
       </div>
    </main>

  <!-- page content -->
</body>
</html>
