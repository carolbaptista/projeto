<?php
include "header.php";
include "conexao.php";

?>
<p>&nbsp;</p>

<h1 class="display-4" style="text-align:center; padding-top: 50px;">Alterar Informação</h1>
<p></p>
<form class="container">
  <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
 <p></p>
   <button type="submit" class="btn btn-danger">Alterar</button>

  </div> 
   <div class="form-group">
    <label for="exampleInputEmail1">Telefone</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefone">
   <p></p>
    <button type="submit" class="btn btn-danger">Alterar</button>
  </div> 
   <div class="form-group">
    <label for="exampleInputEmail1">Endereço</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Endereço">
    <p></p>
   <button type="submit" class="btn btn-danger">Alterar</button> 
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
    <p></p>
     <button type="submit" class="btn btn-danger">Alterar</button>
 
  </div>
  
</form>