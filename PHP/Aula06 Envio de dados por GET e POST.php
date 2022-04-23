<?php  

if (isset($_POST['campo1'])) $campo1 = $_POST['campo1'];
echo $campo1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Envio de dados por GET e POST</title>
</head>
	
<body>
	<form action="" method="post">
		<p><input type="text" name="campo1"></p>
		<p><input type="submit" name="enviar"></p>
	</form>


</body>
</html>



<?php
 var_dump($_GET); 

(isset($_GET['acao'])) ? $acao = $_GET['acao'] : $acao = null;
if (isset($_GET['id'])) $id = $_GET['id']; 


switch ($acao) {
	case 'excluir':
		echo "Excluir um registro do banco de dados".$id;
		break;
	
	default:
		//echo "nenhuma açao foi tomada";
		break;
}

