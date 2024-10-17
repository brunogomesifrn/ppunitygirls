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
  </head>
  <body>
    <?php include 'bases/menu.php' ?>


  <div class="container marketing">
    <div class="row mt-5">
      <div class="col-12">
     
      <form action="php/usuario_bd_cadastrar.php" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome"/>
        </p>

        <p>
            <label for="apelido">Apelido:</label>
            <input type="text" name="apelido" id="apelido"/>
        </p>


        <p>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email"/>
        </p>

       
        <p>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha"/>
        </p>
      
      


        <p><input type="submit" value="Adicionar" />


    </form>




      </div>
    </div>
</div>




<?php include 'bases/rodape.php' ?>


    </body>
</html>
