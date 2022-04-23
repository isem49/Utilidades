<?php  
function carrega_pagina(){
	(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
	if(file_exists('page_'.$pagina.'.php')):
		require_once('page_'.$pagina.'.php');
	else:
		require_once('page_home.php');
	endif;
}
function gera_titulo(){
	(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
	switch ($pagina):
		case 'Home':
			$titulo = 'CRISEM||Games';
			break;

		case 'Clientes':
			$titulo = 'clientes||Games';
			break;

		case 'Serviços':
			$titulo = 'Serviços||Games';
			break;

		case 'Sobre':
			$titulo = 'sobre||Games';
			break;

		case 'Contato':
			$titulo = 'Contato||Games';
			break;
		
		default:
			$titulo = 'CRISEM||Games';
			break;
	endswitch;
	return $titulo;

}