<?php
require 'PHPMailer-6.2.0/src/Exception.php';
require 'PHPMailer-6.2.0/src/PHPMailer.php';
require 'PHPMailer-6.2.0/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer();

//remove this line before pushing to prod
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->Host = 'mail.istqbacademy.net';
$mail->SMTPAuth = true;
$mail->Username = 'istqbaca'; 
$mail->Password = 'W;R6653sBdTmk)';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail->addReplyTo($email, $name); 
$mail->setFrom('academyistqb@gmail.com', 'ISTQB Academy');
$mail->addAddress('academyistqb@gmail.com', 'ISTQB Academy');



$mail->Subject = '[Formulaire de contact - Landing Page]';
$mail->isHTML(true);

$mailContent = "<h1>Détails du message</h1>";
$mailContent .= "<h2>Nom: " . $name . "</h2>";
$mailContent .= "<h2>Email: " . $email . "</h2>";
$mailContent .= "<h3>Message:" . "</h3>";
$mailContent .= "<p>" . $message . "</p>";
    
$mail->Body = $mailContent;

if($mail->send()){
    header("Location: /");
    exit;
}else{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
