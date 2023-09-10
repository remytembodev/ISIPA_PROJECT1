<?php
session_start();
    include("bdd_conn.php");
    $_SESSION['id_pre']=$_GET['id_pre'];
    // $ajoutvote= $bdd->prepare("INSERT INTO vote_president (id,voies) VALUES (?,?)");
    // $ajoutvote->execute(array($id_pre,1));
       header("location:national.php");
?>