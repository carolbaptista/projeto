
<body>

<?php

Include "header.php";
Include "conexao.php";


$email = $_POST['email'];
$senha = $_POST['senha'];



$sql= "SELECT * FROM cadastroc WHERE email='$email' AND senha='$senha'";
$result= $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()){
    

  $_SESSION['logado'] = 1;
	$_SESSION['email'] = $email;
	

	echo '


  <p>&nbsp;</p>
   <div class="container text-center" class = "col-md-4 card border-danger mb-4" style="max-width: ; margin-left: ">
  
   <a href="pedidosf.php" class="btn btn-outline-danger btn-lg active" role="button" aria-pressed="true">Visualizar pedidos</a>
   
   <a href="alteraa.php" class="btn btn-outline-danger btn-lg active" role="button" aria-pressed="true">Alterar alguma informação</a>
   
  <p>&nbsp;</p>

        
          <div class = "card-header bg-danger text-white">
            <h4 class="text-center">Nome: '.$row['nome'].'</h4>
          </div>
          
          <div class = "card-body">
            <h5 class="text-center" class="card-title">CPF: '.$row['cpf'].'</h5>
            <h5 class="text-center" class="card-title"> Telefone: '.$row['telefone'].'</h5>
            <h5 class="text-center" class="card-title">Endereco: '.$row['endereco'].'</h5>
            <h5 
          <p class="text-center" class="card-text">Nascimento: '.$row['nascimento'].'</p>
          </div></h5>
          <div class = "card-footer">
            <h5 class="text-center" class="card-title">Bem vinda(o) '.$row['nome'].'</h5>
          </div>
      </div> 
<p>&nbsp;</p>

';
	
		
	}
 }

else{
	header('location: login.php');
	  
}
Include "footer.php";

?>
</body>