<?php


$email = $_GET["email"];


include "../banco/conexao.php";


$conn = conectar();


$sql = "DELETE FROM usuario WHERE email='$email';";


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
