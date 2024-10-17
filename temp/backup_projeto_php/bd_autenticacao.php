<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

//criptografar a sennha
$senha_cripto = md5($senha);

// conectar o banco de dados
include "conexao/conexao.php";
$conn = conectar();

// criar a string de consulta
$sql = "SELECT * FROM usuario
WHERE apelido='$usuario' and
senha='$senha_cripto';";

// executar consulta
$result = $conn->query($sql);

// verificar se retornou alguma coisa
if($result->num_rows > 0) {
    // retornou e pode autenticar
    // retornar nome do usuário
    while($row = $result->fetch_assoc()){
        // adicionar o nome á sessão
        session_start();
        $_SESSION["usuario"] = $row["nome"];
    }
    desconectar($conn);
    header("Location: perfil.php");
    die();
}else{
    // não retornou e não autentica
    desconectar($conn);
    header("Location: autenticacao.php");
    die();
}
