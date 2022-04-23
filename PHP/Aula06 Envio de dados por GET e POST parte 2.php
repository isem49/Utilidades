<?php  
if (isset($_POST['enviar'])):

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	if (mail('Juniorlobo1000@gmail.com', $assunto, $mensagem, 'from: '.$email)):
		$aviso = "Email enviado com sucesso";
	else:
		$aviso = 'erro ao enviar email';
	endif;
endif; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Envio de dados por GET e POST</title>
</head>
	
<body>
	<?php  
		if (isset($aviso)) echo $aviso;?>
	<form action="" method="post">
		<p><label for="">Nome</label><input type="text" name="nome"></p>
		<p><label for="">Email</label><input type="text" name="email"></p>
		<p><label for="">Assunto</label><input type="text" name="assunto"></p>
		<p><label for="">Mensagem</label><textarea name="mensagem" id="" cols="30" rows="10"></textarea>
		<p><input type="submit" name="enviar"></p>
	</form>


</body>
</html>



