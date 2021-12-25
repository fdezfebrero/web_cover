<!doctype html>
<html lang="gl" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Fdez Febrero</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column color">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0"><img  class="logo" src="/img/logo_febrero.png" />  Fdez Febrero</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link" aria-current="page" href="fdezfebrero.es">Inicio</a>
        <a class="nav-link" href="https://javier.fdezfebrero.es">Javier</a>
        <a class="nav-link active" href="/pages/contact.php">Contacto</a>
      </nav>
    </div>
  </header>

  <form action="contact.php" method="POST">
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" name="email" id="" placeholder="name@example.com">
  </div>


  <div class="form-group">
    <label for="">Nome</label>
    <input type="text" class="form-control" name="nome" id="" placeholder="Nome">
  </div>

  <div class="form-group">
    <label for="">Asunto</label>
    <input type="text" class="form-control" name="asunto" id="" placeholder="Asunto">
  </div>
  
  <div class="form-group">
    <label for="">Mensaxe</label>
    <textarea class="form-control" id="" name="mensaxe" rows="3"></textarea>
  </div>
  <br>

  <button type="submit" class="btn btn-primary mb-2" name="enviarMensaxe">Enviar</button>
</form>

<?php
    if($_POST['enviarMensaxe']) {
        $nome = "";
        $mail = "";
        $asunto = "";
        $mensaxe = "";
         
        if(isset($_POST['nome'])) {
          $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
        }
         
        if(isset($_POST['email'])) {
            $mail = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
            $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
        }
         
        if(isset($_POST['asunto'])) {
            $asunto = filter_var($_POST['asunto'], FILTER_SANITIZE_STRING);
        }
         
        if(isset($_POST['mansaxe'])) {
            $mensaxe = htmlspecialchars($_POST['mensaxe']);
        }
       
        $mailContacto="javier@fdezfebrero.es";
         
        $headers  = 'MIME-Version: 1.0' . "\r\n"
        .'Content-type: text/html; charset=utf-8' . "\r\n"
        .'From: ' . $mail . "\r\n";
         
        if(mail($mailContacto, $asunto, $mensaxe, $headers)) {
            echo "<p>Grazas por poñerte en contacto con nós, $nome. Responderemosche pronto.</p>";
        } else {
            echo '<p>Algo saíu mal o enviar a mensaxe, por favor intentao de novo.</p>';
        }
         
    }

?>
  

  <footer class="mt-auto">
    <p>© 2021 Copyright: Creada por <a href="https://javier.fdezfebrero.es"> Javier Fernández Febrero</a></p>
  </footer>
</div>


    
  </body>
</html>
