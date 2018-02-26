<section>

  <p>&nbsp;</p>

<div class = "container">
  
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
   
    <div class="carousel-item active">
      <img class="d-block w-100" src="game.jpg" alt="First slide">
    </div>
   
    <div class="carousel-item">
      <img class="d-block w-100" src="cel.jpg" alt="Second slide">
    </div>
   
    <div class="carousel-item">
      <img class="d-block w-100" src="cel2.jpg" alt="Third slide">
    </div>
  </div>
 
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
 
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
</div>

<p>&nbsp;</p>

<div class = "container">
<div class = "row text-center">

<?php

include "conexao.php";
$sql = "SELECT * FROM produtos limit 3" ;
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
            <button  class = "btn btn-outline-danger">Saiba mais</button>
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
	
</section>