<?php

require_once "conecta.php";

$mysql = conectar();

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE email = '$email'";

$resultado = mysqli_query($mysql, $sql);

if ($resultado === false) {

    echo "Falha ao buscar usuário:" . " " . mysqli_errno($mysql) . " : " . mysqli_error($mysql);

    die();
} else {

    $usuario = mysqli_fetch_assoc($resultado);

    if ($usuario == null) {
        
        echo "Email não existe no sistema! Realize o seu cadastro no sistema.";

        die ();
        
    }

    if ($senha == $usuario['senha']) {
        
        header("location: principal.php");

    }else {
        
        echo "Senha inválida! Tente novamente ou caso tenha esquecido sua senha tente recupera-la.";
    }
}
