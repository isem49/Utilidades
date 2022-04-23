<?php

// dates


//echo time();

//echo strtotime('2019-07-23');
//var_dump(checkdate(07, 23, 2019));

//echo date_default_timezone_get()
//echo date_default_timezone_set('America/Bahia');
//echo date('d-m-Y H:i:s', time(23-07-2019));


//Arquivos

//var_dump(file_exists('funcoes.php'));

//Remove o diretorio
//echo basename(__FILE__);
//deixa so o diretorio
//echo dirname(__FILE__);
//var_dump(file('arquivo.txt'));
//echo nl2br(file_get_contents('arquivo.txt'));

//grava informaçoes dentro de um arquivos
//echo file_put_contents('arquivo.txt', "\r\n".'linha 04 ', FILE_APPEND);
//$arquivo = fopen('arquivo.txt','a');
//fwrite($arquivo, 'testando'."\r\n");
//fclose($arquivo);

var_dump($_COOKIE);
setcookie('Junior','testando', time() + (30 * 24 * 3600));