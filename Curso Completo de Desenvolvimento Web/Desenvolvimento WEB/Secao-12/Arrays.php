<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>PhP - Arrays</title>
	</head>

	<body>
		
		<?php
			
			/*
			$mensagens_divertidas[1] = 'Estou fazendo as contas aqui e este mês não tem jeito, vou ter que ganhar na loteria.';
			$mensagens_divertidas[2] = 'As 3 coisas que as mulheres mais gostam de ouvir: Eu te amo, 50% de desconto e como você emagreceu.';
			$mensagens_divertidas[3] = 'Cara feira pra mim é fome.';
			$mensagens_divertidas[4] = 'Estou tão carente que o churrasqueiro chega e diz: "Coração?" e eu respondo: "O que foi amor?"';
			$mensagens_divertidas[5] = 'O casamento é um relacionamento a dois, no qual uma das pessoas está sempre certa e a outra é o marido.';
			*/

			$teste = 'Teste com variavel';

			$mensagens_divertidas = array(
				'a' => 2,
				'b' => true,
				 3  => -7.25,
				 4  => $teste,
				 5  => 'O casamento é um relacionamento a dois, no qual uma das pessoas está sempre certa e a outra é o marido.',
				);

			var_dump($mensagens_divertidas);

		?>


	</body>
</html>