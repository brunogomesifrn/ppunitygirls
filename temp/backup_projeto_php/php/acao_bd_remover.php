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

include "../banco/conexao.php";

$conn = conectar();

/* 
Antes de remover o núcleo, é preciso remover todas as instâncias
da tabela nucleo_publico, já que lá tem as referências de quais 
públicos ela se relaciona (dependência).
*/

$sql = "DELETE FROM acao WHERE id_acao=$acao;";
$result = $conn->query($sql);

if($result){
        desconectar($conn);
        header("Location: ../acao.php");
        die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>


      </div>
    </div>
</div>


<?php include 'bases/rodape.php' ?>

    </body>
</html>
