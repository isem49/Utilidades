<?php  
$chaves = array('nome' , 'endereco', 'telefone' );
$valores = array('junior ' , 'rua tal' , '0000' );
$nomes = array( 1 =>'junior' , 2 => 'ricardo', 3 => 'farias');
$cadastro = array_combine($chaves, $valores);
$numeros = array(10,30,40,50);


//Cominba 2 array 
//var_dump(array_combine($chaves, $valores));

//conta valores
//var_dump(array_count_values($nomes));

//verificar se existe uma key (chave)
//var_dump(array_key_exists('nome', $cadastro));


// Retorna todas as keys de um array
//var_dump(array_keys($cadastro));

//junta todos os valores
//var_dump(array_merge($chaves,$valores));

//pega um indice randominco
//var_dump(array_rand($nomes));

// indica em qual indice esta meu valor
//var_dump(array_search('junior', $nomes));

//soma de numeros
//var_dump(array_sum($numeros));

//ignora valores repetidos
//var_dump(array_unique($nomes));

//mostra apenas os valores
//var_dump(array_values($cadastro));

//organiza array em ordem alfabetica  
//asort($nomes);
//var_dump($nomes);
// tambem existe o arsort que faz a ordem inversa

// conta quantos valores tem no seu array
//var_dump(sizeof($nomes));

//decomponhe um array e transforma cada indice em variavel
//extract($cadastro);
//echo $endereco;

// procura a informa em um array
//var_dump(in_array('junior', $nomes));

// substituti um indice
//$acento = array('â','ê','î','ô','û');
//$vogais = array('a','e','i','o','u');
//var_dump(array_replace($acento, $vogais));

echo reset($nomes).'</br>';
echo next($nomes).'</br>';
echo next($nomes).'</br>';
echo current($nomes).'</br>';
echo prev($nomes).'</br>';
echo key($nomes).'</br>';
echo end($nomes).'</br>';







?>

