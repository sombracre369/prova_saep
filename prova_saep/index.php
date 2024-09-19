<?php
require_once 'config/connect.php';
require_once 'funcoes.php';

$conexaocombanco = abrirBD();

dd($_POST);

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <section>
        <form action='' method='post' enctype='multpart/form-data'>
            <h1>
                cadastro
            </h1>

            <label>
                nome
            </label>
            <input>
            
            <label>
                cpf
            </label>
            <input>

            <button type="submit"><a>cadastrar</a></button>
        </form>
    </section>

</body>
</html>