<?php

function nome__funcao(){
	//codigo da função
	
	//echo "testando" ou

	// return "testando";
}
function dobro($num){
return $num * 2;
}

function media($nota1 = 0 ,$nota2 = 0){
	if (!is_numeric($nota1) || !is_numeric($nota2)):
		return "informe um valor";
	endif;
	return ($nota1 + $nota2) / 2;
}

