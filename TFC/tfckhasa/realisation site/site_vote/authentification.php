<?php
 session_start();
    include("bdd_conn.php");
    if(isset($_POST['valider'])){
        $num_identi = $_POST['num_identi'];
        if((!empty($num_identi))){
            $rech = $bdd->query("SELECT * FROM electeurs WHERE nn='$num_identi'");
            $electeur = $rech->rowCount();
            if(($electeur > 0)){
                $resultat=$rech->fetch();
                $_SESSION['id']=$resultat['id'];
                $_SESSION['nn']=$resultat['nn'];
              header("location:menu_principal.php?id=".$_SESSION['id']);
            
        }
             else{
                $erreur = "Le numero national de votre carte n'est pas valide";
             }
        }    
    }
    // 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identification electeur</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style/authentification.css">
</head>
<body>
    <div class="container">
        
    <video playsinline autoplay muted loop poster="cake.jpg">
    <source src="img/video.mp4" type="video/mp4">
  </video>

    <div class="row">
        <div class="col-md-6 col-xs-10 col-md-offset-3 col-xs-offset-1 identi">
            <p id="erreur">
                <?php 
                    if(isset($erreur)){
                        echo'<font color="red">'.$erreur.'</font>';
                    }
                ?>
            </p>
            <form action="#" method="POST" class="forme">
                    <p><label for="num_identi">Votre pièce d'identité</label></p>
                    <p><input type="text" class="form-control num" name="num_identi" placeholder="Le numero de votre carte d'electeur" required></p>
                    <p><input type="submit" value="Acceder aux Votes" class=" btn btn-block btn-primary" name="valider"></p>
                    <div class="row">
                <div class="col-md-6 col-md-offset-3 col-xs-12">
                    <img src="img/ceni.png" alt="" class="photo-ceni">
                </div>
        </div>
            </form>
        </div> 
    </div>

    </div>
    
</body>
</html>