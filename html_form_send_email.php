<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PHPMailer - SMTP test</title>
</head>
<body>
<?php

require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Set the hostname of the mail server
$mail->Host = "ssl://smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
// SMTPSecure
$mail->SMTPSecure = "ssl";
// CharSet
$mail->CharSet = 'UTF-8';
//Username to use for SMTP authentication
$mail->Username = "viniciusbrazpereira@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "Antonio@";
//Set who the message is to be sent from
$mail->setFrom('viniciusbrazpereira@gmail.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('viniciusbrazpereira@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('viniciusbrazpereira@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
// body
$mail->Body    = "Hello";

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>
</body>
</html>