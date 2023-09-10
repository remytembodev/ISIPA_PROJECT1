<?php
    session_start();
include("bdd_conn.php");
$affichage = $bdd->prepare("SELECT id,nom,prenom,postnom,photo FROM presidentielle");
  $affichage->execute(array());
  if (isset($_SESSION['id']) > 0){
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Vote presidentielle</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style/president.css">
</head>
<style>
    .affichage{
        display:flex;
        justify-content:center;
        flex-wrap:wrap;
    }
</style>
<body>
    <div class="bande">
     <h3>Ceni Online-Vote</h3>
     <center><h1 id="titre">ELECTION LEGISLATIVE</h1></center>
    </div>

            <div class="container">
                <div class="row" >
                    <div class="col-md-12 affichage">
                        <?php while ($resultat=$affichage->fetch()){
                            echo'
                                <div class="photo-pres">
                                <a href="vote1.php?id_pre='.$resultat['id'].'">
                                <img src="'.$resultat["photo"].'" width="200px" height="200px"> <br>
                                
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
</body>
</html>
<?php }

else {
    header("location:deconnexion.php");
}
?>