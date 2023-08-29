<?php
   if(isset($_POST['valider'])){
    include('../bdd.php');
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    if((!empty($username)) and (!empty($email))){
        $check = $bdd->prepare('SELECT token, EMAIL, USERNAME FROM etudiant WHERE email = ?');
        $check->execute(array($email, $username));
        $data = $check->fetch();
        $row = $check->rowCount();
        if($row){
            $token = bin2hex(openssl_random_pseudo_bytes(24));
            $token_user = $data['token'];
            $gmail = $data['email'];
            $user = $data['username'];
            // if ($gmail === $email && $user === $username){
                $insert = $bdd->prepare("INSERT INTO password_recover (token_user,token) VALUES (?,?)");
                $insert->execute(array($token_user,$token));
                $link = 'recover.php?u='.base64_encode($token_user).'&token'.base64_encode($token);
                // $link_recup = "<a href="$link"> Cliquer ici pour Reinitialiser votre mot de passe</a>";
                echo $link;
                $mail = $gmail;
                $subject = "Récupération de votre compte";
                $message = "Voici le lien de la récupération de votre mot de passe : $link  une fois cliquer, verifier par la suite vos mails ";
                $header = "content type: text/plain; charset=utf-8\r\n";
                $header .= "From : remytembo4@gmail.com \r\n";
                $envoi = mail($mail,$subject,$message,$header);
                if ($envoi){
                    echo "message envoyé";
                }else{
                    echo "message non envoyé";
                }
            // }else{
            //     echo "nom d'utilsateur ou email incorrect";
            // }
           
        }else{
            echo "compte non valide";
        }
    }
   }
?>