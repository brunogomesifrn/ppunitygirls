<?php

$nome = $_POST["nome"];

include "../banco/conexao.php";
$conn = conectar();
$sql = "INSERT INTO tipo_acao
(nome)
VALUES ('$nome');";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../tipo_acao.php");
    die();
}


?>