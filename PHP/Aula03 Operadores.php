<?php

// Operador é um transformador,ou seja, você fornece um ou mais valores e ele o transforma em outro. 

/*
----Operadores Comuns----
+ mais
- menos
/ divisão
* multiplicação
. concatenação 
*/

// -----Exemplo de OP Comuns---- 
$valor = 10;
$valor += 10;
$valor -= 5;
$valor *= 5;
// echo $valor; 

// ---------- Concatenação (.) ----------------  
$nome = "Ricardo";
$nome .= " junior";
/*echo $nome;*/



// Lista de Operadores de comparação 

// lembrando sempre usar o Var_dump pois é um valor boleano exemplo

$valor1 = 10;
$valor2 = 10;

// var_dump($valor1 SInal $valor2); 

// Comparação de valores (==)

// Identicos de tipo (===) 

// Diferente (!=) 

// Não são identificos (!==) 

// Maior (>)

// Menor (<) 

// Maior ou igual (<=) 

// Menor ou igual (=>)

// ------ou outra maneira------------- 

// (expressao) ? (valor verdaediro) : (valor falso)
($valor1 == $valor2) ? $resultado = true : $resultado = false;
//var_dump ($resultado); 


$v1 = 10;
$v2 = $v1++;
/* echo $v1.' - ' .$v2; */

/* comparadores logicos */

$v1 = true;
$v2 = false;

// comparação se são iguais (&&)
//var_dump($v1 && $v2);

// comparação ou (||)
//var_dump($v1 || $v2);

// comparador negação
//var_dump(!($v1));

//concatenação .

$nome = 'Junior ';
$nome1 = 'Ricardo';
echo $nome.$nome1;





 