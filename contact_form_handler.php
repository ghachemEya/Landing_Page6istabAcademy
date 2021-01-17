<?php
if(!empty($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["Email"];
    $subject = "New contact submission";
    $message = $_POST["message"];

	$toEmail = "academyistqb@gmail.com";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    $email_message = "Form details below.\n\n";

    $email_message .= "Name: " . $name . "\n";
    $email_message .= "Email: " . $email . "\n";
    $email_message .= "Message: " . $message . "\n";

	if(mail($toEmail, $subject, $email_message, $mailHeaders)) {
        // Message if mail has been sent
        header("Location: ./index.html");
    }

    else{
    // Message if mail has been not sent
        header("Location: ./index.html");
    }
}
?>

