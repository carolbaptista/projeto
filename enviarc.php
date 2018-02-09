
<?php
	include "conexao.php";
	Include "header.php";

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$nascimento = $_POST['nascimento'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	

	$sql = "INSERT INTO cadastroc (nome, cpf , telefone, endereco, nascimento, email, senha) VALUES ('$nome', '$cpf', '$telefone', '$endereco','$nascimento', '$email', '$senha')";

	if ($conn->query($sql) === TRUE){
	echo "<center><h2 style='padding-top: 20rem;'>Bem vindo a loja Mars Hunters</h2></center><hr/>";

	echo "<center><a href='index.php'><button style='background-color:#f44; border-radius: 5px;'> Voltar para a pagina inicial </button></a></center>";
	}

	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	include "footer.php";
?>