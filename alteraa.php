<?php
include "header.php";
include "conexao.php";

?>
<p>&nbsp;</p>

<h1 class="display-4" style="text-align:center; padding-top: 50px;">Alterar Informação</h1>
<p></p>
<form class="container" method="POST" action="altera.php">
  <div class="form-group">
    <label for="exampleInputId1">Id do produto</label>
    <input type="number" name="id" class="form-control" id="exampleInputId1" aria-describedby="IdHelp" placeholder="Digite o Id">
 <p></p>
</div>

 <div class="form-group">
    <label for="exampleInputPreco1">Preço</label>
    <input type="number" name="preco" class="form-control" id="exampleInputPreco1" aria-describedby="precoHelp" placeholder="Digite o preço">
 <p></p>
</div> 
   
     <button type="submit" class="btn btn-danger">Alterar</button>
 
  </div>
  
</form>

<?php
include "footer.php";
?>