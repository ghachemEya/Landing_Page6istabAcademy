<?php

$name = $_POST['name'];
$visitor_mail = $_POST['Email'];
$message = $_POST['message'];

$email_from = "ghachemeya12@gmail.com";

$email_subject = "New form Submission";

$email_body = "User Name: $name.\n". 
"User Email : $visitor_mail.\n". 
"User Message : $message.\n";

$to ="ghachem.eya@ieee.org";

$headers = "Form : $email_from \r\n";

$headers .="Reply-To: $visitor_mail \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location : index.html");


?>