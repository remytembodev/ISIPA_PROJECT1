<?php
    include("bdd_conn.php");
    $id=$_GET['id'];
    $voies =1;
    $vote= $bdd->query("UPDATE `presidentielle` SET `voies`= `voies`+'$voies' WHERE `id`='$id'");
?>