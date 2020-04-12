<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>PhP - Variáveis</title>
	</head>

	<body>
		
		<!-- Tipos de Variáveis:
			int;
			float;
			string;
			boolean;
			array;
			...



			Regras para declaração de variáveis em PHP:
			1. Deven obrigatoriamente iniciar com o caractere "$";
			2. Não podem ser iniciadas com "espaços" ou números;
			2. Não é permitida a utilização de caracteres especiais (exceto o caractere "_");

			Php é Case Sensitive !!!!

		-->

		<?php 

		//int
		$valor_inteiro = 4;
		echo $valor_inteiro;

		echo '<br>';

		$valor_inteiro = $valor_inteiro * 2;
		echo $valor_inteiro;

		echo '<br>';

		//float
		$valor_fracionado = -10.7;
		echo $valor_fracionado;

		echo '<br>';

		//boolean
		$estado = true; //false
		echo $estado;

		echo '<br>';

		//strings
		$texto = 'Curso de PhP - ' .$valor_inteiro ;
		echo $texto;

		//arrays (falaremos mais adiante)

		?>


	</body>
</html>