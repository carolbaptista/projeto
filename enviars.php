<?php
include "conexao.php";
include "header.php";

?>

<section>
<p>&nbsp;</p>
<div class = container>

<form class="form-row" method="POST" action="statusl.php">

    <div class="form-group col-md-6">
      <label for="inputName4">Nome:</label>
      <input type="text" class="form-control" id="inputname4" placeholder="Insira o nome do cliente" name="nome">
    </div>

    <div class="form-group col-md-6">
      <label for="inputName4">Nome do Produto:</label>
      <input type="text" class="form-control" id="inputname4" placeholder="Insira o nome do produto solicitado" name="nomep">
    </div>
   
   <div class="form-group col-md-12">
    <label for="inputAddress2">Endereço:</label>
    <input type="text" class="form-control" id="inputendereco2" placeholder="Insira o endereço do cliente" name="endereco">
  </div> 

  <div class="form-group col-md-6">
    <label for="inputname4">Preço do Produto:</label>
    <input type="text" class="form-control" id="inputname4" placeholder="Insira o preço do produto solicitado" name="precop">
  </div>
  
  <div class="form-group col-md-6">
  <label for="status">Status atual: </label>
      
      <select class= "custom-select" id="inputGroupSelect04" name="status">
      
        <option selected>Selecione o status atual</option>
        <option value = "aguardando">Aguardando Pagamento</option>
        <option value = "recebido">Pagamento Recebido</option> 
        <option value = "caminho">A caminho</option> 
        <option value = "entregue">Produto entregue</option> 
        <option value = "nrecebido">Pagamento ainda não recebido</option>
        <option value = "cancelado">Cancelado</option>
      
      </select>
   
   </div> 
		
		<button type="submit" class="btn btn-danger">Enviar</button>
 </form>

</div>

</section>

<?php
include "footer.php";
?>

