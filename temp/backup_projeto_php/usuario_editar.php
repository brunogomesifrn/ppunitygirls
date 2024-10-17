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


$email = $_GET["email"];


include "banco/conexao.php";


$conn = conectar();


$sql = "SELECT * FROM usuario where email='$email'";


$result = $conn->query($sql);


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $nome = $row["nome"];
    $senha = $row["senha"];
    $apelido = $row["apelido"];
  }
} else {
  echo "<td>Nenhum usuário cadastrado</td><td></td><td></td>";
}


desconectar($conn);


?>
<h2>Edição de usuário</h2>
   <form action="php/usuario_bd_editar.php" method="post">
 <p>
     <label for="nome">Nome:</label>
     <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" />
 </p>

 <p>
     <label for="apelido">Apelido:</label>
     <input type="text" name="apelido" id="apelido" value="<?php echo $apelido; ?>" />
 </p>

 <p>
     <label for="email">Email:</label>
     <input type="text" name="email" id="email" value="<?php echo $email; ?>" />
 </p>



<input type="hidden" name="email_chave" value="<?php echo $email; ?>" />


 <p><input type="submit" value="Cadastrar"></p >
</form>




      </div>
    </div>
</div>




<?php include 'bases/rodape.php' ?>


    </body>
</html>
