<?php
    require './bdd.php';
    $id = $_GET['id'];
    $supLivre = $bdd->query("DELETE FROM bibliotheque WHERE id = $id");
    header('location:ajoutLivre.php');
?>