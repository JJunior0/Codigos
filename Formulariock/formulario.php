<?php

$nome = $_POST['username'];
$email = $_POST['e-mail'];
$equipe = $_POST['equipe'];

include('../conexao.php');

foreach ($equipe as $equipamentos) {
	$msg .= $equipamentos . ", ";
}

echo "Você tem os seguintes equipamentos: $msg";

$sql = "INSERT INTO formulario VALUES (null,'$nome','$email','$msg');";


if (mysqli_query($conexao, $sql)) {
	//Executou no BD
	echo 'Cadastro Inserido com sucesso!';
} else {
	//Não executou no BD
	echo "Problemas com a Execusão!". mysqli_error($conexao);
}

//Fecha a conexão BD
mysqli_close($conexao);
