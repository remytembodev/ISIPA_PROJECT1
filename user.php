<?php
session_start();
include('bdd.php');
    $user = $_GET['user'];
    $check = $bdd->prepare("SELECT Num_Form, EMAIL FROM inscription WHERE iduser= ?");
    $check->execute(array($user));
    $data = $check->fetch();
    $row = $check->rowCount();
    if($row){
      $num = $data['Num_Form'];
      $email = $data['EMAIL'];
      $username = $user.$num;
      $_SESSION['user'] = $username;
      $pass =  mt_rand(100000,999999);
      $hashed_pass = password_hash($pass,PASSWORD_BCRYPT, ['cost' => 12]);
      $level = "user";
       $req1 = $bdd->query("INSERT INTO connexion (user,pass,no_hash, niveau) VALUES ('$username', '$hashed_pass','$pass', '$level')");
       if ($req1){
        $mail = $email;
        $subject = "Vos identifiant de connexion";
        $message = "votre nom d'utilisateur est : $username et votre mot de passe est : $pass ";
        $header = "content type: text/plain; charset=utf-8\r\n";
        $header .= "From : remytembo4@gmail.com \r\n";
        $envoi = mail($mail,$subject,$message,$header); 
        header("location:student.php?student=$user");
        // if ($envoi){
          
        //   // echo "message envoyé";
        // }
        // else{
        //   echo "une erreur est survenue";
        // }
       }
    }      
?>