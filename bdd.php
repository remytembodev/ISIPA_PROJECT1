<?php
    try{
     $bdd = New PDO ("mysql:host=localhost; dbname=bddremy", "root","");
    }catch(\Exception $e){
     die('erreur '.$e->getMessage());
    }
?>