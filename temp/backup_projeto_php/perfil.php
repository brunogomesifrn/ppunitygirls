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

  <div class="container marketing altura">
    <div class="row mt-5">
      <div class="col-lg-4">
        
        <img src="src/img/dados.png" class="d-block w-100" alt="..." />
        <h2 class="fw-normal">&raquo;</h2>
       
        <p><a class="btn btn-secondary" href="#">Meus dados</a></p>
      </div>
      <div class="col-lg-4">
        
        <img src="src/img/gerenciar.png" class="d-block w-100" alt="..." />
        <h2 class="fw-normal">&raquo;</h2>
        
        <p><a class="btn btn-secondary" href="acao.php">Gerenciar Ações</a></p>
      </div>
      <div class="col-lg-4">
        
        <img src="src/img/ação.png" class="d-block w-100" alt="..." />
        <h2 class="fw-normal">&raquo;</h2>
        
        <p><a class="btn btn-secondary" href="tipo_acao.php">Gerenciar Tipo Ações</a></p>
</div>

        <div class="col-lg-4">
        
        <img src="src/img/usuario.png" class="d-block w-100" alt="..." />
        <h2 class="fw-normal">&raquo;</h2>
        
        <p><a class="btn btn-secondary" href="usuario.php">Gerenciar Usuários</a></p>
      </div>
      </div>

      </div>
    </div>

<?php include 'bases/rodape.php' ?>

    </body>
</html>
