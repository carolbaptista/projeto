<!DOCTYPE html>
<body>



<?php

include "conexao.php";
include "header.php";

session_start();

$id = $_SESSION['id'];
$nome = $_SESSION['nome'];
$nomep = $_SESSION['nomep'];
$endereco = $_SESSION['endereco'];
$precop = $_SESSION['precop'];
$status = $_SESSION['status'];

$sql = "INSERT INTO pedidos (nome, nomep, precop, endereco, status) VALUES ('$nome', '$nomep', '$precop', '$endereco', '$status')";

if($conn -> query($sql) === TRUE) {
	echo '	

	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produto</th>
      <th scope="col">Preco</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>'.$_SESSION['nomep'].'</td>
      <td>R$ '.$_SESSION['precop'].',00</td>
      
    </tr>
  
  </tbody>
</table>
';
}

else{
	echo "Error: " . $sql . "<br>" . $conn-> error;
}

$conn->close();


include "footer.php";
?>
</body>
</html>