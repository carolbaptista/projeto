<!DOCTYPE html>
<html>
<body>

<?php
include "header.php";
include "conexao.php";



$_SESSION['cesta']= $_POST['cesta'];
$_SESSION['preco']= $_POST['preco'];



?>

<div class="container">
	 
 <?php
	echo ' 
	<p>&nbsp;</p>
	<form method="POST" action="car.php">
	<table class="table" >
  <thead>
    <tr>
      <th scope=
      "col"></th>
      <th scope="col">Produto</th>
      <th scope="col">Preco</th>
      <th scope="col">Forma de pagamento</th>
      <th scope="col"></th>

      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>'.$_SESSION['cesta'].'</td>
      <td>R$ '.$_SESSION['preco'].',00</td>
      <td><select name="pagar">
      <option value="vista">À Vista</option>
      <option value="10x">10 vezes sem juros</option>
      <option value="12x">12 vezes com 10% de juros</option>


      </select></td>
      <td> <button type="submit" style="background-color: #dc3545; color: #fff; border-radius:12px;">Efetuar compra </button> </td>
      
    </tr>
  
  </tbody>
</table>
</form>
</div>
	';
	  

	
include "footer.php";
return
?>

</body>
</html>