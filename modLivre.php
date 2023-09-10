<?php
    require 'bdd.php';
    $getid= $_GET['id'];
    $req = $bdd->query("SELECT * FROM bibliotheque WHERE id = $getid");
    $resultat = $req->fetch();
if (isset($_POST['ajouter'])){
        $titre = $_POST["titre"];
        $auteur = $_POST["auteur"];
        $faculte = $_POST["faculte"];
        $pdf_name = $_FILES['pdf']['name'];
        $pdf_tmp = $_FILES['pdf']['tmp_name'];
        
        if(!empty($titre) && !empty($auteur)){
            move_uploaded_file($pdf_tmp,"../livres/$pdf_name");
            $lien_pdf = ("../livres/$pdf_name");
            $update = $bdd->query("UPDATE bibliotheque SET titre ='$titre', auteur ='$auteur', faculte ='$faculte' WHERE id = $getid");
            header('location:ajoutLivre.php');
        }else{
            echo'Veuillez remplir tous les champs';
        }

    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/header/header.css">
    <link rel="stylesheet" href="../style/ajoutLivre.css">
    <title>Modifier les livres</title>
</head>
<body>


    <!-- NAVBAR--> 
<header>
        <div class="logo"><img src="img/isipa.png" alt=""></div>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul>
                <li><a href="#" >Home</a></li>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Se connecter</a></li>
            </ul>
        </nav>
        <div id="cont">
            <img src="img/Clip path group.png" alt="" style="padding-right: 15px;">
            <img src="img/skill-icons_twitter 1.png" alt=""  style="padding-right: 15px;">
            <img src="img/logos_facebook 1.png" alt=""  style="padding-right: 15px;">
            <img src="img/skill-icons_instagram 1.png" alt=""  style="padding-right: 15px;">
        </div>
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>

    </header>
    <!--FIN NAVBAR--> 

    

    <!-- FORMULAIRE POUR LA MODIFICATION -->
    <div class="container">
        <div class="formulaire">
            <form action="" method="POST"  enctype="multipart/form-data">
            <label for=""> Titre du livre :</label><br> 
            <input type='text'name ='titre' value=<?=$resultat['titre']?>> <br><br>
            <label for="">Auteur du livre :</label><br>
            <input type="text" name="auteur"value=<?=$resultat['auteur']?>><br><br>
            <label for="">Faculté :</label><br>
            <select name="faculte" id="" value=<?=$resultat['faculte']?>>
                    <option value="GestionInfo">Gestion informatique</option>
                    <option value="TechMaint">Technique de Maintenance</option>
                    <option value="Finance&Douane">Finance & Douane</option>
            </select><br><br>
            <input type="file" name="pdf" id="" value=<?=$resultat['lien']?>><br><br>
            <input type="submit" value="Modifier" name="ajouter">
            </form>
        </div>        
        <!-- FIN FORMULAIRE POUR LA MODIFICATION -->
</body>
</html>