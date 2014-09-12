<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PHPMailer - sendmail test</title>
</head>
<body>
<?php
require("PHPMailer/class.phpmailer.php");


//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.dominio.net"; // Endereço do servidor SMTP

$mail->From = "viniciusbrazpereira@gmail.com"; // Seu e-mail

$mail->AddAddress('viniciusbrazpereira@gmail.com', 'Fulano da Silva');

$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

$mail->Subject  = "Mensagem Teste"; // Assunto da mensagem
$mail->Body = "Este é o corpo da mensagem de teste, em <b>HTML</b>! <br /> <img src="http://i2.wp.com/blog.thiagobelem.net/wp-includes/images/smilies/icon_smile.gif?w=625" alt=":)" class="wp-smiley" width="15" height="15"> ";
$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n <img src="http://i2.wp.com/blog.thiagobelem.net/wp-includes/images/smilies/icon_smile.gif?w=625" alt=":)" class="wp-smiley" width="15" height="15"> ";

$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments(); 
// Exibe uma mensagem de resultado
if ($enviado) {
	echo "E-mail enviado com sucesso!";
} else {
	echo "Não foi possível enviar o e-mail.<br /><br />";
	echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
}

?>
</body>
</html>

