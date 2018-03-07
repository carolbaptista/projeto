<?php
Include "header.php";
Include "conexao.php";

$id = $_POST['id'];
$preco = $_POST['preco'];


$sql = "UPDATE produtos SET preco=$preco WHERE id=$id";


if ($conn->query($sql) === TRUE) {
	echo '<div class="display-4 text-center">Reajuste atualizado com sucesso</div>';

	
}
else{
	echo "Erro: ". $conn-> error;
}

$conn->close();


Include "footer.php";
?>