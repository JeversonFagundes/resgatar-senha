<?php

/** 
 *Faz uma conexão com o banco de dados MYSQL.
 *na base de dados recuperar-senha.
 *
 * @return retorna uma conexão conexão com o banco de dados, ou 
 * em caso de falha, mata a excução e exibe o erro
 */
function conectar()
{

    $mysql = mysqli_connect("localhost", "root", "", "resgatar_senha");

    if ($mysql === false) {

        echo "Erro ao conectar com o banco de dados. N° do erro:" . mysqli_connect_errno() . " " . mysqli_connect_error();

        die();
    }

    return $mysql;
}
