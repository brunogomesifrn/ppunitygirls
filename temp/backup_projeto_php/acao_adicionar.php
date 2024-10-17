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
      
        <h2>Cadastro de Ações</h2>
        <form action="php/acao_bd_adicionar.php" method="post" enctype="multipart/form-data">
        
            <p>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </p>

            <p>
                <label for="data_cadastro">Data de Cadastro</label>
                <input type="date" name="data_cadastro" id="data_cadastro">
            </p>

            <p>
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo">
            </p>

            <p>
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" id="descricao">
            </p>

            <p>
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto">
            </p>

            <p>
                <label for="link">Link</label>
                <input type="text" name="link" id="link">
            </p>

            <p>
                <label for="anexo">Anexo</label>
                <input type="text" name="anexo" id="anexo">
            </p>

            <p>
                <label for="responsavel">Responsável</label>
                <input type="text" name="responsavel" id="responsavel">
            </p>

        <p>
           
            <?php
                include "banco/conexao.php";
                $conn = conectar();
                $sql = "SELECT * FROM acao";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {    
                while($row = $result->fetch_assoc()) {
                    echo "<input type='radio' name='acao' value='".$row["id"]."' /> ".$row["nome"]."<br />";
                }
                } else {
                
                }
            ?>
        </p>
        <p> Selecione um Tipo de ação: <br/>
        <?php
                $sql = "SELECT * FROM tipo_acao";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<input type='radio' name='tipo_acao[]' value='".$row["id"]."' /> ".$row["nome"]."<br />";
                }
                } else {
                echo "Nenhuma área cadastrada";
                }
                desconectar($conn);
            ?>
        </p>
        </p>
        <p><input type="submit" value="Adicionar" />
        </form>

      </div>
    </div>
</div>


<?php include 'bases/rodape.php' ?>

    </body>
</html>
