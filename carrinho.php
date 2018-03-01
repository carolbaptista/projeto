<!DOCTYPE html>
<html>
<body>

<?php
session_start();

include "conexao.php";
include "header.php";

	 	  
	  
	  

	 if(isset($_POST['cesta'])){
	 	$_SESSION['cesta']= $_POST['cesta'];
	 	$_SESSION['preco']= $_POST['preco'];
	 	
	 	

	 }
  
	echo '
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>'.$_SESSION['cesta'].'</td>
      <td>R$ '.$_SESSION['preco'].',00</td>
      <td></td>
    </tr>
  
  </tbody>
</table>
	';
	  

	
include "footer.php";
return
?>

</body>
</html>