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
      
      <h2>Tipos Ações</h2>
  <p><a href="tipo_acao_cadastrar.php">Adicionar</a></p>


  <table class="table table-striped">
   <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Editar</th>
      <th scope="col">Remover</th>
    </tr>
  </thead>
  <tbody>

<?php

include "banco/conexao.php";
$conn = conectar();

$sql = "SELECT * FROM tipo_acao";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td scope='row'>".$row["nome"]."</td>";
    echo "<td><a href='tipo_acao_editar.php?id=".$row["id"]."'>EDITAR</td>";
    echo "<td><a href='php/tipo_acao_bd_remover.php?id=".$row["id"]."'>REMOVER</td>";
    echo "</tr>";
  }
} else {
  echo "<td>Nenhum tipo ação cadastrada</td><td></td><td></td>";
}

desconectar($conn);

?>
    
  </tbody>

</table>



      </div>
    </div>
</div>


<?php include 'bases/rodape.php' ?>

    </body>
</html>
