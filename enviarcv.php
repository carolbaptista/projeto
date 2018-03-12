
<?php
	include "conexao.php";
	Include "header.php";

	$nomev = $_POST['nomev'];
	$cpf = $_POST['cpf'];
	$endereco = $_POST['endereco'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	

	$sql = "INSERT INTO vendedor (nomev, cpf, endereco, email, senha) VALUES ('$nomev','$cpf', '$endereco', '$email', '$senha')";

	if ($conn->query($sql) === TRUE){
	echo "<center><h2 style='padding-top: 20rem;'>Bem vindo ao Espaço de Vendedores da loja Mars Hunters</h2></center><hr/>";

	echo "<center><a href='index.php'><button style='background-color:#f44; border-radius: 5px; color: #fff;'> Voltar para a pagina inicial </button></a></center>

		<center><a href='loginv.php'><button style='background-color:#f44; border-radius: 5px; color: #fff;'> Fazer login </button></a></center>";
	}

	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	include "footer.php";
?>