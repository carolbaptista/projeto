<!DOCTYPE html>
<body>


<?php

include "conexao.php";
include "header.php";
?>

<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$nomep = $_POST['nomep'];
$endereco = $_POST['endereco'];
$precop = $_POST['precop'];
$status = $_POST['status'];

$sql = "INSERT INTO pedido (nome, nomep, precop, endereco, status) VALUES ('$nome', '$nomep', '$precop', '$endereco', '$status')";
$result = $conn->query($sql);

if($result->num_rows > 0) {
echo '	

';
}

else{
	echo "Error: " . $sql . "<br>" . $conn-> error;
}

$conn->close();


include "footer.php";
?>
</div>
</body>
</html>