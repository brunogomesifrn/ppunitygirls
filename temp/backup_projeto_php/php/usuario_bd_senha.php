<?php

$senha = $_POST["senha"];
$email_chave = $_POST["email_chave"];

$senha_cripto = md5($senha);
include "../banco/conexao.php";


$conn = conectar();


$sql = "UPDATE usuario SET senha='$senha_cripto' WHERE email='$email_chave';";


$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../usuario.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}


?>
