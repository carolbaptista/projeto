<?php
include "header.php";
include "conexao.php";

?>
<p>&nbsp;</p>

<h1 class="display-4" style="text-align:center; padding-top: 50px;">Excluir produto</h1>
<p></p>
<form class="container" method="POST" action="delete.php">
  <div class="form-group">
    <label for="exampleInputId1">ID</label>
    <input type="number" name="id" class="form-control" id="exampleInputId1" aria-describedby="IdHelp" placeholder="Digite o id do produto que deseja excluir">
 <p></p>
</div>


   
     <button type="submit" class="btn btn-danger">Excluir</button>
 
  </div>
  
</form>

<?php
include "footer.php";
?>