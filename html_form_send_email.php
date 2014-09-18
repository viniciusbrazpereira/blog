<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PHPMailer - SMTP Send Email</title>
</head>
<body>
<?php

if(isset($_POST['email'])) {
echo "Erro o email";
}

if(isset($_POST['email'])) {

	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465;
	$mail->SMTPSecure = "ssl";
	$mail->CharSet = 'UTF-8';
	//Username to use for SMTP authentication
	$mail->Username = "viniciusbrazpereira@gmail.com";
	//Password to use for SMTP authentication
	$mail->Password = "Antonio@";
	//Set who the message is to be sent from
	$mail->setFrom('viniciusbrazpereira@gmail.com', 'Vinicius Braz Pereira');
	//Set an alternative reply-to address
	$mail->addReplyTo('viniciusbrazpereira@gmail.com', 'Vinicius Braz Pereira');

	function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }

    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	if(!preg_match($email_exp,$email_from)) {
		$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	}
	
	$string_exp = "/^[A-Za-z .'-]+$/";
	if(!preg_match($string_exp,$first_name)) {
		$error_message .= 'The First Name you entered does not appear to be valid.<br />';
	}

	if(strlen($comments) < 2) {
		$error_message .= 'The Comments you entered do not appear to be valid.<br />';
	}

	if(strlen($error_message) > 0) {
		died($error_message);
	}
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    //Set who the message is to be sent to
	$mail->addAddress(''.clean_string($email_from), ''.clean_string($first_name));
	//Set the subject line
	$mail->Subject = 'Website www.viniciusbrazpereira.com.br contact you.';
	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is a plain-text message body';
    // body
	$mail->Body    = "Comments: ".clean_string($comments)."\n";
	// Set word wrap to 50 characters
	//$mail->WordWrap = 50;   

	//send the message, check for errors
	if ($mail->send()) {
	   header("Location: http://viniciusbrazpereira.com.br/contato.html");
	} else {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	}
}	
?>
</body>
</html>
