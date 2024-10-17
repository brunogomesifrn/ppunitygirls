<?php

$email = $_POST["email"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$apelido = $_POST["apelido"];


include "../banco/conexao.php";
$conn = conectar();
$sql = "INSERT INTO usuario
(email, nome, senha, apelido)
VALUES ('$email', '$nome', '$senha', '$apelido');";


$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../usuario.php");
    die();
}




?>
