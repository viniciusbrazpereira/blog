<?php
$to      = 'viniciusbrazpereira@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: viniciusbrazpereira@gmail.com' . "\r\n" .
    'Reply-To: viniciusbrazpereira@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 