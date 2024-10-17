<?php 
          // Verificar se sessão já foi iniciada anteriormentre
          if(session_id() == '')
            session_start();
          ?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <title>Unity Girls</title>
    <?php include 'bases/head.php' ?>

    <link rel="stylesheet" type="text/css" href="src/css/estilo.css">
  </head>
  <body>
    <?php include 'bases/menu.php' ?>
<main>
  <div class="container marketing">
    <div class="row mt-5">
    <div class="col-lg-12">

<div class="form">
    <center>
        <h1>Login:</h1>    
    <form action="bd_autenticacao.php" method="post">
        <p>
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario"/>
        </p>
        <p>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha"/>
        </p>
        <p> <input type="submit" value="Entrar"></p>
</form>
</div>
</div>
</div>
</div>
</main>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</center>
<?php include 'bases/rodape.php' ?>
  <script src="src/js/bootstrap.bundle.min.js"></script>
</body>
</html>