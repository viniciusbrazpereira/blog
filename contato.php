<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="img/blog.ico" sizes="16x16" />
    <link rel="icon" type="image/x-icon" href="img/blog.ico" sizes="16x16" />

    <title>Trilhando o Sucesso no Poker</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- Icon style -->
    <link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/include-html.js"></script>
  </head>

  <body>
  <?php

    if(isset($_POST['email'])) {

        require 'PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer();

        $first_name = $_POST['first_name']; // required
        $email_from = $_POST['email']; // required
        $comments = $_POST['comments']; // required
           
        $error_message = "";

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

        $mail->isSMTP();
        //$mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true;  // authentication enabled
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        //$mail->CharSet = 'UTF-8';
        //Username to use for SMTP authentication
        $mail->Username = "viniciusbrazpereira@gmail.com";
        //Password to use for SMTP authentication
        $mail->Password = "";
        //Set who the message is to be sent from
        $mail->setFrom(''.clean_string($email_from), ''.clean_string($first_name));
        //Set an alternative reply-to address
        $mail->addReplyTo(''.clean_string($email_from), ''.clean_string($first_name));
          //Set who the message is to be sent to
        $mail->addAddress('viniciusbrazpereira@gmail.com', 'Vinicius Braz Pereira');
        //Set the subject line
        $mail->Subject = 'Website www.viniciusbrazpereira.com.br contact you.';
        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';

        // Mensagem a ser enviada.
        $email_message = "Form details below.\n\n";
        $email_message .= "Nome: ".clean_string($first_name)."\n";
        $email_message .= "Email: ".clean_string($email_from)."\n";
        $email_message .= "Comments: ".clean_string($comments)."\n";
        $mail->Body    = nl2br($email_message);
        // Set word wrap to 50 characters
        //$mail->WordWrap = 50;   
      } 
    ?>

    <div id="menu-banner"></div>

    <div class="container">

        <?php

            if(isset($_POST['email'])) {
                //send the message, check for errors
                if ($mail->send()) {
                   echo '<div class="alert alert-success" role="alert">Email enviado.
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">Email não enviado.(erro)
                              <button type="button" class="close" data-dismiss="alert">
                                  <span aria-hidden="true">&times;</span>
                                  <span class="sr-only">Close</span>
                              </button>
                          </div>';
                }
            } 
        ?>
        <div id="contact_form" class="row">
            <div class="col-12 col-sm-12 col-lg-12">
            <div class="well">
                <h2>Entre em contato</h2>

                <form role="form" id="feedbackForm" method="post" action="contatoSelf.php">
                    <div class="form-group">
                      <label class="sr-only" for="first_name">Nome</label>
                      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nome" required="true">
                    </div>

                    <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="true">
                    </div>

                    <div class="form-group">
                      <textarea rows="10" cols="100" class="form-control" id="comments" name="comments" placeholder="Mensagem" required="true"></textarea>
                    </div>
              
                    <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg">Enviar mensagem</button>
                </form>
            </div>        
            </div><!--/span-->
        </div><!--/row-->

      <!-- Site footer -->
      <div id="footer"></div>
    </div> <!-- /container -->
    
  </body>
</html>