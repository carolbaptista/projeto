<html>
<body>

<?php
include "conexao.php";
include "header.php";
?>

<div class="container">
<div class = "row">

<?php

$nome = $_POST['nome'];
$nomep = $_POST['nomep'];
$endereco = $_POST['endereco'];
$precop = $_POST['precop'];
$status = $_POST['status'];

$sql = "SELECT * FROM pedido";
$result = $conn->query($sql);

if($result->num_rows > 0) {

	while($row = $result->fetch_assoc()){
echo '	

<p>&nbsp;</p>
	<table class="table" >
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Produto</th>
      <th scope="col">Preço</th>
      <th scope="col">Cliente</th>
      <th scope="col">Status de Entrega</th>

      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>'.$row['nomep'].'</td>
      <td>R$ '.$row['precop'].',00</td>
      <td>'.$row['nome'].'</td>
      <td>'.$row['status'].'</td>
      
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