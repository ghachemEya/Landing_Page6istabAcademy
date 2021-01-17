

<?php
if(!empty($_POST["submit"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = "New contact submission";
	$content = "hello world !!! ";

	$toEmail = "academyistqb@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    // Message if mail has been sent
    echo "<script>
    alert('Mail has been sent Successfully.');
    </script>";
    }

    else{
    // Message if mail has been not sent
    echo "<script>
        alert('EMAIL FAILED');
    </script>";
    }
        }

?>