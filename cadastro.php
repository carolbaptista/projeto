<?php
include"header.php";
include "conexao.php";

?>

<body >
<div class="container">
<h1 class="display-4" style="text-align:center; padding-top: 50px">Cadastre-se aqui</h1>

<form method="POST" action="enviarc.php" style="padding-top: 40px">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" id="inputnome4" placeholder="Insira o seu nome " name="nome">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">CPF</label>
      <input type="text" class="form-control" id="inputcpf4" placeholder="Digite o seu CPF" name="cpf">
    </div>
   
   <div class="form-group col-md-12">
    <label for="inputAddress2">Endereço</label>
    <input type="text" class="form-control" id="inputendereco2" placeholder="Insira o seu endereço" name="endereco">
  </div> 

  <div class="form-group col-md-6">
    <label for="inputAddress">Telefone</label>
    <input type="text" class="form-control" id="inputtelefone" placeholder="Digite o seu Telefone" name="telefone">
  </div>
 

   <div class="form-group col-md-6">
    <label for="inputAddress2">Nascimento</label>
    <input type="text" class="form-control" id="inputnascimento2" placeholder="Insira o seu nascimento" name="nascimento">
  </div> 

  <div class="form-group col-md-6">
    <label for="inputAddress2">Email</label>
    <input type="text" class="form-control" id="inputemail2" placeholder="Insira o seu email" name="email">
  </div> 

   <div class="form-group col-md-6">
    <label for="inputAddress2">Senha</label>
    <input type="password" class="form-control" id="inputsenha2" placeholder="Insira o seu senha" name="senha">
  </div>
 </div>


 <center><button type="submit" class="btn btn-danger" style="">Enviar</button></center> 
</form>
</div>
<br/>
</body>

<?php
include "footer.php"

?>
