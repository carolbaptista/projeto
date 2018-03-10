<html>
<body>



<?php

include "conexao.php";
include "header.php";

?>
<div class = "container">

<?php 

$sql = "SELECT FROM pedido WHERE status = '$status'";

$result = $conn->query($sql);


$status = $_SESSION['status'];

echo '$status';

if($_SESSION['status'] == 'aguardando'){

echo ' 
<p>&nbsp;</p>
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<div class="float-left">Em processamento</div>
<div class="float-right">Produto Enviado</div>
<div class="text-center">Em preparação</div>
 <p>&nbsp;</p> ';

}

if($_SESSION['status'] == 'caminho'){

echo ' 
<p>&nbsp;</p>
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<div class="float-left">Em processamento</div>
<div class="float-right">Produto Enviado</div>
<div class="text-center">Em preparação</div>
 <p>&nbsp;</p> ';

}

if($_SESSION['status'] == 'entregue'){

echo ' 
<p>&nbsp;</p>
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<div class="float-left">Em processamento</div>
<div class="float-right">Produto Enviado</div>
<div class="text-center">Em preparação</div>
 <p>&nbsp;</p> ';

}


else{ 
echo 'deu ruim';

}

?>
</div>

<?php
include "footer.php";
?>

</body>
</html>