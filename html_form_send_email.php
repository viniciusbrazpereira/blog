<?php

require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom('viniciusbrazpereira@gmail.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('viniciusbrazpereira@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('viniciusbrazpereira@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer sendmail test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

$mail->Body    = "Hello";

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?>