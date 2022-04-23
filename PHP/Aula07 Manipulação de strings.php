<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Manipulação de strings</title>
</head>
<body>
	<?php if (isset($aviso)) echo $aviso;?>
	<form action="" method="post">
		<p><textarea name="mensagem" id="" cols="30" rows="10"><?php echo $_POST['mensagem'];?></textarea>
		<p><input type="submit" name="enviar"></p>
	</form>	
	<?php  
	if (isset($_POST['enviar'])):
		//echo $mensagem = addslashes($_POST['mensagem']).'<br /> ';
		//echo stripcslashes($mensagem);
		//var_dump(explode(',', $_POST['mensagem']));
		//echo $mensagem = htmlentities($_POST['mensagem']);
		//echo html_entity_decode($mensagem);
		//echo implode(' ', array('isso', 'é', 'um', 'array', 'sendo', 'implodido' ));
		//echo md5('minhasenha');
		//echo nl2br($_POST['mensagem']);
		//echo number_format(31223.64, 2, ',' , '.');
		//echo trim("textooooooooooooooooooooo", 'o');
		//echo str_pad('texto', 8 , '=');
		//echo str_repeat('texto', 10);
		//echo str_replace('o', '+,' , "testando isso");
		//echo str_word_count("testando um texto");
		//echo strip_tags($_POST['mensagem']);
		//echo strlen("texto simples");
		//echo strpos('isso e um texto simples', 'texto');
		//echo substr('isso é um texto simples', 11 , 6);
		//echo strtolower("ISSO E UM TEXTO ");
	endif; 
	?>
</body>
</html>