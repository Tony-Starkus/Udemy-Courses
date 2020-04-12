<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>PhP - Arrays Multidimensionais</title>
	</head>

	<body>
		
		<?php
			
			$tabuleiro[8]['a'] = 'torre preta';
			$tabuleiro[8]['b'] = 'bispo preta';
			$tabuleiro[8]['c'] = 'cavalo preta';
			$tabuleiro[8]['d'] = 'rainha preta';
			$tabuleiro[8]['e'] = 'rei preta';
			$tabuleiro[8]['f'] = 'bispo preta';
			$tabuleiro[8]['g'] = 'cavalo preta';
			$tabuleiro[8]['h'] = 'torre preta';

			$tabuleiro[7]['a'] = 'peão preta';
			$tabuleiro[7]['b'] = 'peão preta';
			$tabuleiro[7]['c'] = 'peão preta';
			$tabuleiro[7]['d'] = 'peão preta';
			$tabuleiro[7]['e'] = 'peão preta';
			$tabuleiro[7]['f'] = 'peão preta';
			$tabuleiro[7]['g'] = 'peão preta';
			$tabuleiro[7]['h'] = 'peão preta';

			print_r($tabuleiro);
			print '<br>';
			print $tabuleiro[8]['d'];
			print '<br>';
			print $tabuleiro[8]['g'];
			print '<br>';
			print $tabuleiro[7]['b'];

		?>


	</body>
</html>