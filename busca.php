<!DOCTYPE html>
<html>
<body>

<?php

include "header.php";
include "footer.php";
include "conexao.php";

$nome = $_POST ['nomep'];
$preco = $_POST ['preco'];
$descricao = $_POST ['descricao'];
$tipo = $_POST ['tipo'];
$foto = $_POST ['foto'];

$sql = "SELECT * FROM produtos";

$result = $conn->query($sql);

if($result->num_rows > 0){

	while($row = $result->fetch_assoc()){
		echo "Exibindo 0 Resultados";
}
}

else{
	echo "0 resultados";
}

$conn->close();

session_start();
  
  $cargo = $_SESSION['busca'];

  echo "$busca";

  if($_SESSION['busca'] == $nome = $_POST ['nomep'] $preco = $_POST ['preco'] $descricao = $_POST ['descricao'] $tipo = $_POST ['tipo'] $foto = $_POST ['foto']; ){
    
    echo "

    $nome = $_POST ['nomep'] $preco = $_POST ['preco'] $descricao = $_POST ['descricao'] $tipo = $_POST ['tipo'] $foto = $_POST ['foto']";


else{
	echo "Deu ruim";
}
?>

</body>
</html>