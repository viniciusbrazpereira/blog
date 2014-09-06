
<?php 

$Name = "Da Duder"; //senders name 
$email = "viniciusbrazpereira@gmail.com"; //senders e-mail adress 
$recipient = "viniciusbrazpereira@gmail.com"; //recipient 
$mail_body = "The text for the mail..."; //mail body 
$subject = "Subject for reviever"; //subject 
$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields 

mail($recipient, $subject, $mail_body, $header); //mail command :) 
?>