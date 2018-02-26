<!DOCTYPE html>
<html>
<body>

<?php
include "header.php";
include "footer.php";
include "conexao.php";
?>

<section>

<div class = "container">
<div class = "row">

<?php

$nomep = $_POST ['nomep'];
$preco = $_POST ['preco'];
$descricao = $_POST ['descricao'];
$tipo = $_POST ['tipo'];
$foto = $_POST ['foto'];

$sql = "SELECT * FROM produtos";

$result = $conn->query($sql);

session_start();
  
  $busca = $_SESSION['busca'];

  echo "$busca";

  if($_SESSION['busca'] == $nome = $_POST ['nomep'] ){
    if($result->num_rows > 0){

	while($row = $result->fetch_assoc()){
		
		echo '<div class = "col-md-4 card border-danger mb-4" style="max-width: ; margin-left: ">
        
          <div class = "card-header bg-danger text-white">
            <h4 class="text-center">'.$row['nomep'].'</h4>
          </div>
          
          <div class = "card-body">
            <center><img src="'.$row['foto'].'"/></center>
            <h5 class="text-center" class="card-title">'.$row['descricao'].'</h5>
          <p class="text-center" class="card-text">R$'.$row['preco'].',00</p>
          </div>
         
          <div class = "card-footer">
            <button class = "btn btn-outline-danger">Saiba mais</button>
          </div>
      
      </div>'; }
}
}

else{
	echo "<h4> Nenhum resultado encontrado</h4>";
}



?>

</div>
</div>

</section>
</body>
</html>



