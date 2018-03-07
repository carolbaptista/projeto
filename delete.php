<?php
Include "conexao.php";
Include "header.php";

$id= $_POST['id'];



$sql="DELETE from produtos WHERE id=$id";

if($conn->query($sql)===TRUE){
	echo '<p>&nbsp;</p>
	<div class="display-4 text-center">Produto excluido com sucesso</div>
	<p>&nbsp;</p>';
} else {
	echo "Erro:". $conn->error;

}
$conn->close();

Include "footer.php";
?>