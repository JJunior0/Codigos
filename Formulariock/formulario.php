<?php

$nome = $_POST['username'];
$email = $_POST['e-mail'];
$equipe = $_POST['equipe'];

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

foreach ($equipe as $equipamentos) {
	$msg .= $equipamentos . ", ";
}

echo "Você tem os seguintes equipamentos: $msg";

$sql = "INSERT INTO formulario VALUES (null,'$nome','$email','$msg');";


if ($conexao->query($sql)) {
	//Executou no BD
	echo 'Cadastro Inserido com sucesso!';
} else {
	//Não executou no BD
	// echo mysqli_error($conexao);
	echo 'Problemas com a Execusão!';
}

//Fecha a conexão BD
mysqli_close($conexao);
