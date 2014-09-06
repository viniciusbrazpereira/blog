
<?php 

$Name = "Da Duder"; //senders name 
$email = "viniciusbrazpereira@gmail.com"; //senders e-mail adress 
$recipient = "viniciusbrazpereira@gmail.com"; //recipient 
$mail_body = "The text for the mail..."; //mail body 
$subject = "Subject for reviever"; //subject 
$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields 

mail($recipient, $subject, $mail_body, $header); //mail command :) 
?>

<?php
    include('Mail.php');

    $recipients = 'viniciusbrazpereira@gmail.com';

    $headers['From']    = 'viniciusbrazpereira@gmail.com';
    $headers['To']      = 'viniciusbrazpereira@gmail.com';
    $headers['Subject'] = 'Test message';

    $body = 'Test message';

    $smtpinfo["host"] = "smtp.gmail.com";
    $smtpinfo["port"] = "587";
    $smtpinfo["auth"] = true;
    $smtpinfo["username"] = "viniciusbrazpereira@gmail.com";
    $smtpinfo["password"] = "Antonio@";


    // Create the mail object using the Mail::factory method
    $mail_object =& Mail::factory("smtp", $smtpinfo); 

    $mail_object->send($recipients, $headers, $body);
?> 