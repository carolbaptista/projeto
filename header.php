<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <title>|| Mars Hunters </title>
  </head>
  
  <body>
  <?php 
include "conexao.php";
  ?>
    <header style="border: solid 2px; background-color: #f44; border-color:#f40;">
  
  <div class = "container"> 
    <div class = "row">
      
      <div class = "col-md-3">
        <img src="mars.png" class="rounded" alt="...">
      </div>
      
       
      <div class ="col-md-6">
       <form>
      
      
       <input class="form-control" style="margin-top:5%; float: left; width: 80%;" type="search" placeholder="Buscar" aria-label="Search">
      
        

       <button type="button" class="btn btn-outline-dark btn-sm" style="margin-top: 6%; margin-left: 1%;" >Pesquisar</button>
        
    
 
      </form>
   
   </div>
         
         <div class = "col-md-3">
          <img src="icon.png" class="rounded float-right" alt="..." style="margin-top: 5%;">
    
    <p style="margin-top: 5%;"> Olá, faça seu <a href="login.php" style="color:#fff; ">Login</a> ou <a href="cadastro.php" style="color:#fff;">Cadastre-se</a></p>  
    </div>
    </div>

<div class="row">
<div class = "col-md-3"></div>

<nav class="navbar navbar-expand-lg navbar-danger bg-danger">

  <a class="navbar-brand" href="#" style="color:#fff;">Produtos</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"  style="background-color:#000;"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color:#fff;">Livros</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color:#fff;">Celulares</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color:#fff;">Games</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color:#fff;">Informática</a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="#" style="color:#fff;">Vestuário</a>
      </li>
    
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color:#fff;">Eletrônicos</a>
      </li>
    </ul>
    
    </div>
</nav>

</div>
</div>
</header>
