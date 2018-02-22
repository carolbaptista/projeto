<?php

include "conexao.php";
Include "header.php";
$tipo= $_GET['tipo'];
?>


	
<p>&nbsp;</p>
<div class="container">
<div class = "row text-center">


<?php


$sql = "SELECT * FROM produtos WHERE (tipo)='$tipo'" ;
$result = $conn->query($sql);

if($result->num_rows > 0){

  while($row = $result->fetch_assoc()){

echo' 

<div class = "col-md-4 card border-danger mb-4" style="max-width: ; margin-left: ">
        
          <div class = "card-header bg-danger text-white">
            <h4 class="text-center">'.$row['nomep'].'</h4>
          </div>
          
          <div class = "card-body">
            <center><img src="'.$row['foto'].'"/></center>
            <h5 class="text-center" class="card-title">'.$row['descricao'].'</h5>
          <p class="text-center" class="card-text">R$ '.$row['preco'].',00</p>
          </div>
          <div class = "card-footer">
            <p class="text-center" class="card-text">'.$row['tipo'].'</p>
          </div>
      </div>  






';

}
}

else{
  echo "Grande quantidade de usuários na página, volte mais tarde";
}

$conn->close();

?>
</div>
</div>
<?php
Include "footer.php";
?>

