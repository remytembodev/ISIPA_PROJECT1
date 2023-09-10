<?php
session_start();
    include("bdd_conn.php");
    $id_pre = $_SESSION['id_pre'];
    $id_nat = $_SESSION['id_nat'];
    $id_pro = $_SESSION['id_pro'];
    $id=$_SESSION['id'];
    // vote pour president
     $votepre= $bdd->prepare("INSERT INTO vote_president (id,voies) VALUES (?,?)");
     $votepre->execute(array($id_pre,1));

    // vote pour depute national
     $votenat= $bdd->prepare("INSERT INTO vote_national (id,voies) VALUES (?,?)");
     $votenat->execute(array($id_nat,1));

     // vote pour depute provincial
     $votepro= $bdd->prepare("INSERT INTO vote_provincial (id,voies) VALUES (?,?)");
     $votepro->execute(array($id_pro,1));
    
     $mofielecteur=$bdd->query("UPDATE `electeurs` SET `voter` = '1' WHERE `electeurs`.`id` = $id");

        header("location:deconnexion.php");
    
   
?>
