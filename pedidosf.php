<html>
<body>

<?php
include "conexao.php";
include "header.php";

?>

<div class="container">
<div class = "row">

<?php

$cesta = $_POST['cesta'];
$preco = $_POST['preco'];

$sql = "SELECT * FROM pedido";
$result = $conn->query($sql);

if($result->num_rows > 0) {

	while($row = $result->fetch_assoc()){
echo '	

<p>&nbsp;</p>
	<h1 class = "display-4">Pedidos feitos</h1>
	<table class="table" >
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Produto</th>
      <th scope="col">Preço</th>
      <th scope="col">Status de Entrega</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>'.$row['cesta'].'</td>
      <td>R$ '.$row['preco'].',00</td>
      <td><a href = "statusc.php" class = "btn btn-outline-danger btn active" role= "button" aria-pressed= "true" >Visualizar</a></td>
    
    </tr>
  
  </tbody>
</table>
';
}
}

else{
	echo "Error: " . $sql . "<br>" . $conn-> error;
}

$conn->close();
?>

</div>
</div>

<?php
include "footer.php";

?>
</body>
</html>