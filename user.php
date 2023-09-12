<?php
session_start();
include('bdd.php');

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

       

      $user = $_GET['user'];
      $check = $bdd->prepare("SELECT Num_Form, EMAIL FROM inscription WHERE iduser= ?");
      $check->execute(array($user));
      $data = $check->fetch();
      $row = $check->rowCount();
      if($row){
        $num = $data['Num_Form'];
        $email = $data['EMAIL'];
        $nom = $data['NOM'];
        $post = $data['POST_NOM'];
        $username = $user.$num;
        $_SESSION['user'] = $username;
        $pass =  mt_rand(100000,999999);
        $hashed_pass = password_hash($pass,PASSWORD_BCRYPT, ['cost' => 12]);
        $level = "user";
        $req1 = $bdd->query("INSERT INTO connexion (user,pass,no_hash, niveau) VALUES ('$username', '$hashed_pass','$pass', '$level')");
        if ($req1){ 
                 //Enable implicit TLS encryption
            $mail->Port       = 465;   

            //Recipients

            $mail->setFrom('remytembo4@gmail.com', 'ISIPA/MATADI');
            $mail->addAddress($email, 'Etuditry');
            try{
            //Server settings

            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'remytembo4@gmail.com';                 //SMTP username
            $mail->Password   = 'fyiyxgbirtusoltm';                     //SMTP password
            $mail->SMTPSecure = 'ssl';  
            $mail->port       = 465;   
            
            //recipeints

            $mail->setFrom('remytembo4@gmail.com', 'ISIPA/MATADI');
            $mail->addAddress($email, 'Etudiant(e)');   //Optional name  

            //Content

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Les identifiants de connexion de votre compte etudiant de l'ISIPA/MATADI";
            $mail->Body    = "Félicitation $nom $post votre inscription a été éffectué avec succès <br/> Votre nom d'utilsateur est : <b>$username</b> <br/> Votre mot de passe est : <b>$pass</b>";
            $mail->send();
            echo 'Message envoyé avec succès';
            header("location:student.php?student=$user");
          }catch (Exception $e) {
            echo "Le message n'est pas envoyé erreur: {$mail->ErrorInfo}";
        }
       }
    }    
?>