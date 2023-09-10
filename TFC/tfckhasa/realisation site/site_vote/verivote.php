<?php
session_start();
    include("bdd_conn.php");
        $id=$_SESSION['id'];
        if (isset($_SESSION['id'])){
            $rech = $bdd->query("SELECT * FROM electeurs WHERE id='$id'");
            // $electeur = $rech->rowCount();
            $resultat=$rech->fetch();
            if( ($resultat['voter'] != '1')){
              header("location:president.php");
              
            }
             else{
                $info="L'electeur ".$resultat['nom'].' '.$resultat['postnom'].' '.$resultat['prenom']." vous avez déjà voté(e) <br> vous n'êtes plus eligible de passer au bureau de voter";
            
             } 
            }
            else{
                header("location:deconnexion.php");
            }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    p{
        position:absolute;
        top:10%;
        left:50%;
        text-align:center;
        transform:translate(-50%);
        color:white;
        font-weight:bolder;
        font-size:30px;
        animation-name:p;
        animation-duration:5s;
    }
    @keyframes p{
    from{
        font-size: 10px;
    }
    to{
        font-size: 30px;
    }
}
@media(max-width:720px){
    
    @keyframes p{
    from{
        font-size: 10px;
    }
    to{
        font-size: 18px;
    }

}
p{
    font-size:18px;
    animation-name:p;
    animation-duration:5s;
}

}
</style>
<body>
    <center><img src="img/images.jpeg" alt="" width=100% heigth=100%></center>
    <p><?= $info; ?></p>
</body>
</html>