
<body>
<?php
include "header.php";
include "conexao.php";

?>

<div class="container">
	<h1 class="display-4" style="text-align:center; padding-top: 50px;">Faça o login</h1>

	<form method="POST" action="entrar.php" style="padding-top: 40px">
			<div class="form-row">
		 <div class="form-group col-md-12">
	    <label for="inputAddress2">Email</label>
	    <input type="email" class="form-control" id="inputemail2" placeholder="Insira o seu email" name="email" required>
	     </div> 

	   <div class="form-group col-md-12">
	    <label for="inputAddress2">Senha</label>
	    <input type="password" class="form-control" id="inputsenha2" placeholder="Insira o seu senha" name="senha" required>
	  </div>
		 	</div>
		 
	   <hr/>
		 <center><button type="submit" class="btn btn-danger"> Entrar</button>
		 </center>
 
 </form>
 </div>
 <?php
include "footer.php";
 ?>
</body>
