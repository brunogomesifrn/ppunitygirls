<?php 
$email = $_POST["email"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$apelido = $_POST["apelido"];

$senha_cripto = md5($senha);

include "banco/conexao.php";

$conn = conectar();

$sql = "INSERT INTO usuario
(email, senha, nome, apelido)
VALUES ('$email', '$senha_cripto', '$nome', '$apelido');";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: autenticacao.php");
    die();
}
?>