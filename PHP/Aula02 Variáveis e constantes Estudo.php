<!DOCTYPE html>
<html>
	<head>
		<title></title>
	
	</head>
	
	<body>
		<?php
			/*
			  ---------------------Tipos de Dados-----------------------

			INTEIROS (int) - qualquer número sem decimais ou negativo.
			PONTO FLUTUANTE (Float, Double ou Real ) - Numero decimais.
			STRING - Texto.
			BOOLEANOS ( boolean ) - Verdadeiro (TRUE) ou Falso (False).
			ARRAYS - Variáveis Multidimensionais, vetores.
			OBJETOS - Instâncias de uma classe.
			RECURSOS - Variáveis especiais do PHP que referenciam recursos externos.
			NULO (null) - Variável sem nenhum valor, porem é diferente de "".
			*/

			/* 
			  --------------------Criando Variáveis------------------------
				
			Para Criar Variáveis utilizer $ na frente de um nome por exemplo:
			$idade = (Num);
			Ou
			Caso seja texto
			$Nome = "Junior"; ( Obrigatorio Usar as "")

			PS:O php saber diferenciar quando a variavel é de cada tipo
			PS1: Não esqueça ; no final de cada comando
			*/

			$idade = 15;
			$idade1 = 16; 
			$nome = "Junior";
			$Casado = False;
			$altura = 1.81;

			$numero = 50;


			/* 
			--------------Função-------------

			function calc(){
				global $numero;
				echo $numero;
			}

			calc();
			*/

			/*------------definindo uma constante-----------*/

			define("CONFIG",33);

			echo CONFIG;





			/*
			-------------------------Regrinha-------------------- 
			Caso for uma constante use letras minuscula
			Caso Var use Maiusculas
			*/










			/* ----------------------------Alguns Comandos---------------------------  */

			/* 
			Saida de Dados (Aparecer o que você quer na tela) 
			print(Var);
			Ou
			Echo Var:
			PS: VAR = Variável
			*/

			/* 
			Como saber o tipo da sua VAR
			Usando o comando gettype(var) 
			*/

			/*e
			cho "Olá, meu nome é $nome e eu tenho $idade1 anos.";
			*/
		
			/* //------------------Criando Array/vetores unidimensionais e multidimensionais-----------------------// */
			
			/*Unidimensionais*/
			/*
			$cadastro = array('cliente1' => "junior" ,'cliente2' => 100 ,);
			identificar seu array caso não tenha dado manualmente
			var_dump($cadastro);

			Ver na tela:
			echo $cadastro["cliente1"];
			*/

			/*criando Multidimensionais*/

			/*
			$cadastro = array(
			   "cliente1" => array(
			   	'nome' => "junior", 
			   	"idade" => 16,
			   ),

			   "cliente2" => array(
			   	'nome' => "junior2", 
			   	"idade" => 17, 
			   ),
			);

			var_dump($cadastro);

			echo $cadastro['cliente1']['idade'];
			*/	

		 ?>


	</body>
</html>