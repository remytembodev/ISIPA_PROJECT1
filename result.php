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
    <title>Profil Etudiant</title>
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
          <li><a href="resulttm1.php">BIBLIOTHEQUE</a></li>
          <li><a href="#">PAIEMENT</a></li>
        </ul>
        <a href="logout.php">DECONNEXION</a>
      </nav>
    </div>
    <!-- / HEADER -->
  <!-- page content -->
    <main>
      <div class="container">
        <div class="center">
            <img src="Home_PAGE/img/avatar.jpg" alt="">
              <div class="name">
                <p>Nom : <?php echo $nom;  ?></p>
                <p>Post-Nom : <?php echo $post;  ?></p>
                <p>Prenom : <?php echo $prenom;  ?></p>
              </div>
        </div> 
      </div> 
          <div class="containere">
        <div class="noteblock">
            <label for="info">INFO FOND</label>
            <input type="text" name="info" id="" value="<?php echo $info;?>" readonly>
            <label for="info">PHYSIQUE</label>
            <input type="text" name="physique" id="" value="<?php echo $physique;?>">
            <label for="info"> ELECTRO GEN</label>
            <input type="text" name="electro_gen" id="" value="<?php echo $electro_gen;?>">
            <label for="info">ANALYSE VECTORIELLE</label>
            <input type="text" name="analyse" id="" value="<?php echo $analyse;?>">
            <label for="info">SANTE PUBLIQUE</label>
            <input type="text" name="sante" id="" value=" <?php echo $sante;?>">
            <label for="info"> POURCENTAGE</label>
            <input type="text" name="percent" id="">
        </div>
        <div class="noteblock">
            <label for="info">SYSTEME D'EXPLOITATION</label>
            <input type="text" name="se" id="" value="<?php echo $se;?>">
            <label for="info">SCHEMAS ELECTRIQUE</label>
            <input type="text" name="schemas" id="" value="<?php echo $schemas;?>">
            <label for="info">EDUCATION A LA CITOYENNETE</label>
            <input type="text" name="educit" id="" value="<?php echo $algo;?>">
            <label for="info">ALGORITHME ET LANGAGE DE PROGRAMMATION</label>
            <input type="text" name="algo" id="" value="<?php echo $algo;?>">
            <label for="info">MATHEMATIQUE</label>
            <input type="text" name="math" id="" value="<?php echo $math;?>">
            <label for="info">ANGLAIS TECHNIQUE</label>
            <input type="text" name="anglais" id="" value="<?php echo $anglais;?>">
            
        </div>
        <div class="noteblock">
        <label for="info">ELECTRONIQUE DIGITALE</label>
            <input type="text" name="electro_digi" id="" value="<?php echo $electro_digi;?>">
            <label for="info">LEEO</label>
            <input type="text" name="leeo" id="" value="<?php echo $leeo;?>">
            <label for="info">MESURE ELECTRIQUE</label>
            <input type="text" name="mesure" id="" value="<?php echo $mesure;?>">
            <label for="info">FRANCAIS</label>
            <input type="text" name="francais" id="" value="<?php echo $francais;?>">
            <label for="info">PROJET</label>
            <input type="text" name="projet" id="" value="<?php echo $projet;?>">
            <label for="info">TECHNOLOGIE DES COMPOSANTS</label>
            <input type="text" name="techno" id="" value="<?php echo $techno;?>">
            <LAbel>MENTION</LAbel><select name="mention" id="">
                <option value="Satisfaction">Satisfaction</option>
                <option value="Distinction">Distinction</option>
                <option value="Grande Distinction">Grande Distinction</option>
                <option value="Très Grande Distinction">Très Grande Distinction</option>
                <option value="Elite">Elite</option>
            </select>
        </div>
    </div>
    </main>
  <!-- page content -->
</body>
</html>