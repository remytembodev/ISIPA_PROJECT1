<?php
include("bdd_conn.php");
$affichage = $bdd->prepare("SELECT id,nom,prenom,postnom,photo FROM presidentielle");
  $affichage->execute(array());
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Vote presidentielle</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<style>
    
</style>
<body>
    <!-- <form action="vote1.php?id=" method="POST"> -->
            <div class="container">
                <div class="row" >
                    <div class="col-md-4" style="display:flex;">
                        <?php while ($resultat=$affichage->fetch()){
                            echo'
                                <div style="border:2px solid black;text-align:center; margin:5%;">
                                <a href="vote1.php?id='.$resultat['id'].'">
                                <img src="'.$resultat["photo"].'" width="300px" height="300px"> <br>
                                
                                <button type:"submit" class="btn btn-primary" style="margin-bottom:1%; margin-top:1%;"> N° '.$resultat["id"].' 
                                '.$resultat["nom"].'
                            '.$resultat["postnom"].'
                                '.$resultat["prenom"].'
                                </button>
                                </a>
                                </div>';
                            }
                            ?>
                    </div>
                </div>
            </div>   
     <!-- </form> -->
</body>
</html>