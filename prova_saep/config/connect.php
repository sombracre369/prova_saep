<?php

//definindo constantes para criar o objeto de conexão
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "06062006369");
define("DB_NAME", "petshopp");
define("DB_PORT", "3306");

/**
 *  Esta função abre uma conexão e 
 *  @return myslqi - retorna objeto de conexão mysql
 *  DB_HOST é uma constante com o endereço de conexão
 *  DB_USER é uma constante com o nome do usuario
 *  DB_PASS é uma constante com o a senha da conexão
 *  DB_NAME é uma constante com o nome do BD
 *  DB_PORT é uma constante com a porta de conexão
 */
function abrirBD()
{

    $conexaoComBanco = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

    //verificar se ouve algum erro de conexão
    if ($conexaoComBanco->connect_error) {
        die("falha na conexão" . $conexaoComBanco->connect_error);
    } else {
        return $conexaoComBanco;
    }
}

/**
 * Fenha a conexão com o banco de dados
 */
function fecharBD($conexaoComBanco){
    $conexaoComBanco->close();
}