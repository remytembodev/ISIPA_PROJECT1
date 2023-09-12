<?php
    session_start();
    include('bdd.php');
    $email = $_GET['mail'];
    $nom = $_SESSION['nom'];
    $post = $_SESSION['post'];
    $photo = $_SESSION['photo'];
        //Import PHPMailer classes into the global namespace
        //These must be at the top of your script, not inside a function
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

       
                    try{

                        //Server settings
              
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'remytembo4@gmail.com';                 //SMTP username
                        $mail->Password   = 'fyiyxgbirtusoltm';                     //SMTP password
                        $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
                        $mail->Port       = 465;   
              
                        //Recipients
              
                        $mail->setFrom('remytembo4@gmail.com', 'ISIPA/MATADI');
                        $mail->addAddress($email, 'Etudiant(e)');   //Optional name
                     
                        //Content
              
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = "Publication des resultats";
                        $mail->Body    = "Salutation cher(e) $nom $post nous vous informons que les resutats sont disponibles à l'ISIPA/MATADI <br> 
                        Veuillez vous connectez à votre compte pour verifier vos resultats <a href="."http://localhost/ISIPA_PROJECT1/login.php".">Connexion</a> ";
                        $mail->send();
                        echo 'Message envoyé avec succès';
                        // if (isset($mail->send)){
                            header("Location:inter.php");
                        
                        
                      }catch (Exception $e) {
                        echo "Le message n'est pas envoyé erreur: {$mail->ErrorInfo}";
                    }
                    

?>