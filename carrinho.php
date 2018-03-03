<!DOCTYPE html>
<html>
<body>

<?php

include "conexao.php";
include "header.php";

	 	  
	  
	  

	 if(isset($_POST['cesta'])){
	 	$_SESSION['cesta']= $_POST['cesta'];
	 	$_SESSION['preco']= $_POST['preco'];
	 	
	 	

	 }
 
	echo ' 
	<p>&nbsp;</p>
	<div class="container">
	<table class="table" >
  <thead>
    <tr>
      <th scope="col"></th>
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
      <td><button type="submit" class = "btn btn-outline-danger">Enviar </button></td>
      
    </tr>
  
  </tbody>
</table>
</div>
	';
	  

	
include "footer.php";
return
?>

</body>
</html>