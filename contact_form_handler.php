<?php

print_r($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$emailTo = "academyistqb@gmail.com";
$subject = "[Formulaire de contact - Nouveau message]";
$mailHeaders = "From: " . $name . "<". $email .">\r\n";

$email_message = "Form details below.\n\n";
$email_message .= "Name: " . $name . "\n";
$email_message .= "Email: " . $email . "\n";
$email_message .= "Message: " . $message . "\n";
if (mail($emailTo, $subject, $email_message, $mailHeaders)){
    print_r("Success");
}
else {
    print_r("error");
}
?>
