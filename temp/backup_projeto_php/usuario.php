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
     
      <h2>Usuários</h2>
  <p><a href="usuario_cadastrar.php">Adicionar</a></p>




  <table class="table table-striped">
   <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Apelido</th>
      <th scope="col">Email</th>
      <th scope="col">Alterar Senha</th>
      <th scope="col">Editar</th>
      <th scope="col">Remover</th>
    </tr>
  </thead>
  <tbody>


<?php


include "banco/conexao.php";
$conn = conectar();


$sql = "SELECT * FROM usuario";


$result = $conn->query($sql);


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td scope='row'>".$row["nome"]."</td>";
    echo "<td scope='row'>".$row["apelido"]."</td>";
    echo "<td scope='row'>".$row["email"]."</td>";
    echo "<td><a href='usuario_senha.php?email=".$row["email"]."'>ALTERAR</td>";
    echo "<td><a href='usuario_editar.php?email=".$row["email"]."'>EDITAR</td>";
    echo "<td><a href='php/usuario_bd_remover.php?email=".$row["email"]."'>REMOVER</td>";
    echo "</tr>";
  }
} else {
  echo "<td>Nenhum usuário cadastrado</td><td></td><td></td>";
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
