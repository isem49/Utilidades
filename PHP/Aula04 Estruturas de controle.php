<?php

/* 
As estruturas de decisão servem para tomar decisões com base em testes/comparações de valores por exemplo
As estruturas de repetição servem para repetir um procedimento um determinado numero de vezes ou até que uma decisão seja atendida
*/

// if = se
// else = senao

 //$valor = 5;

/*
if ($valor == 10):
	echo "O valor é igual a 10";
elseif ($valor > 10):
	echo "o valor é maior que 10";
else:
	echo "o valor é menor que 10";
endif;		
*/


//white = enquanto

$contador = 1;

/*
while ($contador >=1):
	echo $contador.' ';
	$contador--;
endwhile;
*/


/*
do{
	echo $contador. " ";
	$contador++;
} while ($contador <=10;);
*/	


// For = para


for ($num=1; $num <=10 ; $num++):
    if ($num == 5) continue;
	echo $num. '<br/> ';
endfor;


//foreach = paracada / caso 

/*
$nome = array('nome1' => 'Ricardo','nome2' => 'Junior','nome3' => 'farias');
foreach ($nome as $chave => $valor ):
		echo $chave.' = '.$valor."<br/>";
endforeach;
*/

// switch = alterne

/*
$valor = 10;
switch ($valor):
	case 10:
	  	echo 'valor = 10';
	  	break ;
	case 15:
		echo 'valor = 15';
	 	break ;
	default:
		echo 'valor nao reconhecido';	 	
endswitch;
*/



// break = para execução

// continue = encerrar e continua
