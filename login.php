<?php
session_start();
if (isset($_POST['envoi'])){
    include('bdd.php');
    $user =htmlspecialchars(strtoupper($_POST['user']));
    $pass =htmlspecialchars($_POST['pass']);
    $rech = $bdd->prepare("SELECT user,no_hash,niveau FROM connexion WHERE user=? AND no_hash=?");
    $rech->execute(array($user,$pass));
    $login = $rech->fetch();
    $connect = $rech->rowCount();
    // if ($connect != 0) {
        if ($connect > 0){
                $conn_user=$login['user'];
                $conn_pass=$login['no_hash'];
                $level =$login['niveau'];
                if(($user == $conn_user) and ($pass == $conn_pass)){

                    if($level === 'user'){
                        $_SESSION['utilisateur'] = $user;
                        header("location:home.php"); 
                    }else
                    if($level == 'admincaisse'){
                        header("location:admincaisse.php");
                    }else
                    if ($level == 'adminstore'){
                        header("location:adminstore.php");
                    }else
                    if($level == 'admindepart'){
                        header("location:inter.php");
                    }else
                    if ($level == 'adminsect'){
                        header("location:adminsection.php");
                    }
                }
    }else{
        $error= "le nom d'utilisateur ou le mot de passe est incorrect!";
        // header("location:login.php");
        echo $error;
    }
   
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNEXION</title>
    <link rel="stylesheet" href="./LOGIN/login.css">
</head>
<body>
    <div class="box">
        <span class="borderline"></span>
        <form method="POST">
            <h2>Se connecter</h2>
            <div class="inputbox">
                <input type="text" name="user" required="required">
                <span>Nom d'utilisateur</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" name="pass">
                <span>Mot de passe</span>
                <i></i>
            </div>
            <div class="links">
                <a href="src/index.php">Mot de passe oublié</a>
                <a href="register.php">Créer un compte</a>
            </div>
            <input type="submit" value="Connexion" name="envoi">
        </form>
    </div>
</body>
</html>


