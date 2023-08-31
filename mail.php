<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'remytembo4@gmail.com';                     //SMTP username
    $mail->Password   = 'fyiyxgbirtusoltm';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('remytembo4@gmail.com', 'ISIPA/MATADI');
    $mail->addAddress($email, 'Etudiant(e)');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Confirmation';
    $mail->Body    = 'C\'est bon ça marche!';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message envoyé avec succès';
    header("location:student.php?student=$user");
} catch (Exception $e) {
    echo "Le message n'est pas envoyé erreur: {$mail->ErrorInfo}";
}



// $mail = $email;
        // $subject = "Vos identifiant de connexion";
        // $message = "votre nom d'utilisateur est : $username et votre mot de passe est : $pass ";
        // $header = "content type: text/plain; charset=utf-8\r\n";
        // $header .= "From : remytembo4@gmail.com \r\n";
        // $envoi = mail($mail,$subject,$message,$header); 
        header("location:mail.php?email=$email");
        // 
        // if ($envoi){
          
        //   // echo "message envoyé";
        // }
        // else{
        //   echo "une erreur est survenue";
        // }
?>