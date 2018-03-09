<?php
include"header.php";
include "conexao.php";

?>

<body >
<div class="container">
<h1 class="display-4" style="text-align:center; padding-top: 50px">Cadastro de produto</h1>

<form method="POST" action="enviarp.php" style="padding-top: 40px">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" id="inputnome4" placeholder="Insira o nome do produto " name="cesta">
    </div>
    <div class="form-group col-md-6">
      <label for="inputpreco">Preço</label>
      <input type="number" class="form-control" id="inputpreco4" placeholder="Digite o preço" name="preco">
    </div>
   
   <div class="form-group col-md-12">
    <label for="inputdescricao2">Descrição</label>
    <input type="text" class="form-control" id="inputdescricao2" placeholder="Insira a descrição" name="descricao">
  </div> 

  <div class="form-group col-md-6">
    <label for="inputTipo">Tipo</label>
    <input type="text" class="form-control" id="inputtipo" placeholder="Digite o seu Tipo" name="tipo">
  </div>
 

   <div class="form-group col-md-6">
    <label for="inputFoto2">Foto</label>
    <input type="text" class="form-control" id="inputfoto2" placeholder="Insira a foto" name="foto">
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
