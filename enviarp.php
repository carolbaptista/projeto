<?php
	include "conexao.php";
	Include "header.php";

	$cesta= $_POST['cesta'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$tipo = $_POST['tipo'];
	$foto = $_POST['foto'];
	

	$sql = "INSERT INTO produtos (nomep, preco , descricao, tipo, foto ) VALUES ('$nomep', '$preco', '$descricao', '$tipo','$foto')";

	if ($conn->query($sql) === TRUE){
	echo "<h2 class='text-center' style='padding-top: 20rem;'>Produto cadastrado com sucesso</h2><hr/>";

	echo "<center><a href='index.php'><button style='background-color:#f44; border-radius: 5px;'> Voltar para a pagina inicial </button></a></center>";
	}

	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	include "footer.php";
?>