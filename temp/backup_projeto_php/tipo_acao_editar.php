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
      
      <?php

$id = $_GET["id"];

include "banco/conexao.php";

$conn = conectar();

$sql = "SELECT * FROM tipo_acao where id=$id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $nome_tipo_acao = $row["nome"];
  }
} else {
  echo "<td>Nenhum tipo ação cadastrada</td><td></td><td></td>";
}

desconectar($conn);

?>
<h2>Edição de Tipo Ação</h2>
   <form action="php/tipo_acao_bd_editar.php" method="post">
 <p>
     <label for="nome">Nome:</label>
     <input type="text" name="nome" id="nome" value="<?php echo $nome_tipo_acao; ?>" />
 </p>

<input type="hidden" name="id" value="<?php echo $id; ?>" />

 <p><input type="submit" value="Cadastrar"></p>
</form>


      </div>
    </div>
</div>


<?php include 'bases/rodape.php' ?>

    </body>
</html>