<?php

$nome = $_POST['username'];
$email = $_POST['e-mail'];
$equipe = $_POST['equipe'];

$conexao = mysqli_connect('localhost','root',' ','formulario',3306);

if (!$conexao) 
{
	die('Problemas com a conexão!');
}

foreach ($equipe as $equipamentos)
{
	$msg .= $equipamentos;
}

echo 'Você tem os seguintes equipamentos'.$equipamentos.;

$sql = "INSERT INTO formulario VALUES (null,'$nome','$email','$equipe');";


if($conexao -> query($sql))
{
	//Executou no BD
	echo 'Cadastro Inserido com sucesso!';
}
else
{
	//Não executou no BD
	// echo mysqli_error($conexao);
	echo 'Problemas com a Execusão!';
}

// Fecha a conexão BD
mysqli_close($conexao);