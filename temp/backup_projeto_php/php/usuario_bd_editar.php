<?php

$email = $_POST["email"];
$email_chave = $_POST["email_chave"];
$nome = $_POST["nome"];
$apelido = $_POST["apelido"];


include "../banco/conexao.php";


$conn = conectar();


$sql = "UPDATE usuario SET nome='$nome', email='$email', apelido='$apelido' WHERE email='$email_chave';";


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
