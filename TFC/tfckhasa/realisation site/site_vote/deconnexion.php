<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: authentification.php");
// unset($_SESSION['id']); 
?>