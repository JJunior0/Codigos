<?php
$servidor = "br894.hostgator.com.br";
$usuario = "mvpstudi_elektro";
$bdname = "formulario";
$senha = "ipi2022";
$porta = 3306;

$conexao = mysqli_connect($servidor, $usuario, $senha, $bdname, $porta);

if (!$conexao) {
    die('Problemas com a conexão!' . mysqli_connect_error());
    echo "Conexão efetuada com sucesso!";
}
?>