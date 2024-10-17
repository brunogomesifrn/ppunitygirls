<?php

$id = $_GET["id"];

include "../banco/conexao.php";

$conn = conectar();

$sql = "DELETE FROM tipo_acao WHERE id=$id;";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../tipo_acao.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>