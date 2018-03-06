<!DOCTYPE html>
<html>
<body>

<?php
include "header.php";
include "conexao.php";


	 
 
	echo ' 
	<p>&nbsp;</p>
	<div class="container">
	<table class="table" >
  <thead>
    <tr>
      <th scope=
      "col"></th>
      <th scope="col">Produto</th>
      <th scope="col">Preco</th>
      <th scope="col">Comprar</th>

      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>'.$_SESSION['cesta'].'</td>
      <td>R$ '.$_SESSION['preco'].',00</td>
      <td><button type="submit" class = "btn btn-outline-danger">Pagar à vista </button></td>
      
    </tr>
  
  </tbody>
</table>
</div>
	';
	  
echo'
<div class="container">
<button  type="submit" class = "btn btn-outline-danger" style="margin-left:61%"><a href="car.php">10 Vezes s/ juros</a>
</button>

<p></p>
<button  type="submit" class = "btn btn-outline-danger" style="margin-left:61%">12 Vezes com 10% de juros</button>
</div>';
	
include "footer.php";

?>

</body>
</html>