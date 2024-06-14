<?php

//conectar com o banco de dados.
require_once "conecta.php";

$mysql = conectar();

//receber os dados.
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email','$senha')";

$resultado = mysqli_query($mysql, $sql);

if ($resultado === false) {

    if (mysqli_errno($mysql) == 1062) {

        echo "Email já cadastrado no sistema.";
    } else {

        echo "Falha ao cadastrar você no banco de dados:" . " " . mysqli_errno($mysql) . " : " . mysqli_error($mysql);

        die();
    }
} else {

    header("location: index.php");
}

?>