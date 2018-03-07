<?php
Include "header.php";
Include "conexao.php";

$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$senha = $_POST['senha'];

$sql = "UPDATE cadastroc SET email=$email WHERE id=$id";


if ($conn->query($sql) === TRUE) {
	echo "Reajuste atualizado com sucesso";

	
}
else{
	echo "Erro: ". $conn-> error;
}

$conn->close();



?>