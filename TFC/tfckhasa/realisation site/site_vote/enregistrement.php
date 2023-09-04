<?php
$bdd = new PDO ("mysql:host=localhost;dbname=ceni","root","");
    if (isset($_POST['enregistrer']))
    {
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $sexe = ($_POST['sexe']);
        $username = htmlspecialchars($_POST['username']);
        $passwo = sha1($_POST['passwo']);
        $passwo2 = sha1($_POST['passwo2']);
        if (!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['sexe']) AND !empty($_POST['username']) AND !empty($_POST['passwo']) AND!empty($_POST['passwo2']))
        {
            if ($passwo == $passwo2)
            {
                $ajout = $bdd->prepare("INSERT INTO identite_admin (prenom, nom, sexe, username, passwo) VALUES (?,?,?,?,?)");
                $ajout->execute(array($prenom, $nom, $sexe, $username, $passwo));
                $message ="enregistrement reussie";
            }
        }
        else
        {
           $erreur = "Tous les champs doivent être complétés";
        }
    }

?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css.css">()
    <title>Enregistrement</title>
</head>
<body>
        
        <div class="enregistrement">
        <?php 
               if(isset($erreur))
               {
                echo  '<font color="red">' .$erreur .'</font>';
               }
               if(isset($message))
               {
                 echo '<font color="blue">' .$message  .'</font>';;
               }
                 ?>
        <h2>Enregistrement Administrateur</h2>
            <form method="POST">
                <label for="prenom">Prenom</label><br>
                <input type="text" placeholder="Prenom admin" name="prenom" id="prenom"><br>
                <label for="nom">Nom</label><br>
                <input type="text" placeholder="Nom admin" name="nom" id="nom"><br><br>
                <label for="sexe">Sexe</label><br>
                <select name="sexe" id="sexe">
                    <option value="Masculin" name="sexe">Masculin</option>
                    <option value="Feminin" name="sexe">Feminin</option>
                </select><br><br>
                <label for="username">Nom utilisateur</label><br>
                <input type="text" placeholder="nom d'utilisateur" name="username" id="username"><br>
                <label for="passwo">Mot de passe</label><br>
                <input type="password" placeholder="Mot de passe admin" name="passwo" id="passwo"><br>
                <label for="passwo2">Confirmer le mot de passe</label><br>
                <input type="password" placeholder="Confirmer mot de passe admin" name="passwo2" id="passwo2"><br><br>
                <input type="submit" value="Enregistrer" name="enregistrer">
            </form>
        </div>
</body>
