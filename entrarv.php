
<body>

<?php

Include "header.php";
Include "conexao.php";


$email = $_POST['email'];
$senha = $_POST['senha'];



$sql= "SELECT * FROM vendedor WHERE email='$email' AND senha='$senha'";
$result= $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()){
    

  $_SESSION['logado'] = 1;
	$_SESSION['email'] = $email;

	

	echo '


 <p>&nbsp;</p>
   <div class="container text-center" class = "col-md-4 card border-danger mb-4" style="max-width: ; margin-left: ">
  
   <a href="pedidosf.php" class="btn btn-outline-danger btn-lg active" role="button" aria-pressed="true">Visualizar pedidos</a>
   
   <a href="alteraa.php" class="btn btn-outline-danger btn-lg active" role="button" aria-pressed="true">Alterar Preço</a>

   <a href="deletee.php" class="btn btn-outline-danger btn-lg active" role="button" aria-pressed="true">Deletar produto</a> 
<hr/>
   <a href="cadastrop.php" class="btn btn-outline-danger btn-lg active" role="button" aria-pressed="true">Cadastrar produto</a>
   
  <p>&nbsp;</p>

        
          <div class = "card-header bg-danger text-white">
            <h4 class="text-center">Nome: '.$row['nomev'].'</h4>
          </div>
          
          <div class = "card-body">
            <h5 class="text-center" class="card-title">CPF: '.$row['cpf'].'</h5>
            <h5 class="text-center" class="card-title">Endereco: '.$row['endereco'].'</h5>
            <h5 class="text-center" class="card-title">Endereco: '.$row['cargo'].'</h5>
          </div>
          
          <div class = "card-footer">
            <h5 class="text-center" class="card-title">Bem vinda(o) '.$row['nomev'].'</h5>
          </div>
      </div> 
<p>&nbsp;</p>

';
	
		
	}
 }

else{
	header('location: loginv.php');
	  
}
Include "footer.php";

?>
</body>