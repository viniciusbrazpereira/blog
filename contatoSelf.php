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
  

    <div id="menu-banner"></div>

    <div class="container">

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