<?php
require 'PHPMailer-6.2.0/src/Exception.php';
require 'PHPMailer-6.2.0/src/PHPMailer.php';
require 'PHPMailer-6.2.0/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer();

//remove this line before pushing to prod
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'academyistqb@gmail.com'; 
$mail->Password = 'cabinet123456789@';
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
    echo "Message sent";
    /*header("Location: /");
    exit;*/
}else{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>