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

    
    $email = $_POST["email"];
    $data_cadastro = $_POST["data_cadastro"];
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $foto = $_POST["foto"];
    $link = $_POST["link"];
    $anexo = $_POST["anexo"];
    $acao = $_POST["acao"];
    $responsavel = $_POST["responsavel"];

    //Fazer o upload da imagem para a pasta media, dentro de src e salvar o nome dela em uma variável
    $nome_foto = $_FILES['foto']['name'];
    
    move_uploaded_file($_FILES['foto']['tmp_name'], ("../src/media/$nome_foto"));

    include "../banco/conexao.php";

    $conn = conectar();

    $sql = "INSERT INTO acao (email, data_cadastro, titulo, descricao, foto, link, anexo, responsavel, id_acao) 
    VALUES ('$email', '$data_cadastro', '$titulo', '$descricao', '$nome_foto', '$link', '$anexo','$responsavel', '$acao');";

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
