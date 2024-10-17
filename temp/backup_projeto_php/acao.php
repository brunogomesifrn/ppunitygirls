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
      
    <h2>Ações</h2>
        <p><a href="acao_adicionar.php">Adicionar</a></p>

        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Logo</th>
            <th scope="col">Nome</th>
            <th scope="col">Editar</th>
            <th scope="col">Remover</th>
            </tr>
        </thead>
        <tbody>

        <?php

        include "banco/conexao.php";

        $conn = conectar();

        $sql = "SELECT * FROM acao";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><img class='img-fluid rounded' src='src/media/".$row["imagem"]."' width='50px' alt=''></td>";  

            echo "<td scope='row'>".$row["nome"]."</td>";
            echo "<td><a href='p_nucleos_editar.php?codigo=".$row["id"]."'>EDITAR</td>";
            echo "<td><a href='php/p_nucleo_remover_bd.php?codigo=".$row["id"]."'>REMOVER</td>";
            echo "</tr>";
        }
        } else {
        echo "<td>Nenhuma Ação cadastrada</td><td></td><td></td>";
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