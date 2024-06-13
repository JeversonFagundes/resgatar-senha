<?php

//conectar com o banco de dados.
require_once "conecta.php";

$mysql = conectar();

//receber os dados.
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
