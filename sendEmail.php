<?php
$to = 'viniciusbrazpereira@gmail.com';
$subject = 'This is subject';
$message = 'This is body of email';
$from = "From: FirstName LastName <viniciusbrazpereira@gmail.com>";
mail($to,$subject,$message,$from);
?> 