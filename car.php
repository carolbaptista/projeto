<?php
include "conexao.php";
include "header.php";


//if(!isset($_POST['cesta'])){


		$precop = $_SESSION['preco'];
		$nome = $_SESSION['nome'];
		$cesta = $_SESSION['cesta'];
		$endereco = $_SESSION['endereco'];
		$status = $_SESSION['status'];
		
		
		$pagar = $_POST['pagar'];
		if($pagar=='12x'){
			$precop= $precop*1.1;
		}
		$sql = "INSERT INTO pedido (nome, endereco , cesta, preco, status, pagar) VALUES ('$nome', '$endereco', '$cesta', '$precop', '$status', '$pagar')";  

		if ($conn->query($sql) === TRUE){
			echo "<div class='display-4 text-center'>Compra feita com sucesso</div>";
			}
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
			
//}
			include "footer.php";
 ?>