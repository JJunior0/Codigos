<?php
$servidor = "localhost";
$usuario = "root";
$bdname = "formulario";
$senha = "";
$porta = 3306;

$conexao = mysqli_connect($servidor, $usuario, $senha, $bdname, $porta);

if (!$conexao) {
    die('Problemas com a conexão!' . mysqli_connect_error());
    echo "Conexão efetuada com sucesso!";
}
?>