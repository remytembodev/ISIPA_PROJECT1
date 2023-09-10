<?php
session_start();
    include("bdd_conn.php");
    $_SESSION['id_nat']=$_GET['id_nat'];
    header("location:provincial.php");
?>