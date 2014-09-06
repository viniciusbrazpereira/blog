<?php
$subject = 'testing';
$email = 'viniciusbrazpereira@gmail.com';
$message = 'test message';          
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: The test site" . "\r\n";

if (mail($email, $subject, $message, $headers)) {
  $data['msg']="Message send successfully";
} 
else {
  $data['msg']="Please try again, Message could not be sent!";
} 
?>