<?php

if(isset($_POST['cesta'])){
	 	$_SESSION['cesta']= $_POST['cesta'];
	 	$_SESSION['preco']= $_POST['preco'];
	 	
		$precop = $_SESSION['precop'];
		$nome = $_SESSION['nome'];
		$nomep = $_SESSION['cesta'];
		$endereco = $_SESSION['endereco'];
		$status = $_SESSION['status'];
		$formaPag = $_SESSION['formaPag'];

		$sql = "INSERT INTO pedido (nome, endereco , nomep, precop, status, formaPag) VALUES ('$nome', '$endereco', '$nomep', '$precop', '$status', '$formaPag')";  

	 }

 ?>