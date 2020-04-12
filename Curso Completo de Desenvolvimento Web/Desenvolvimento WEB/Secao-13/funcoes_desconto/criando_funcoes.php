<?php 

/*
function primeira_funcao(){
	// Código de execução da função
	echo 'Curso de PHP';
}
	primeira_funcao();
*/



// Função sem retorno
	function exibir_boas_vindas($nome = 'indefinido'){
		echo 'Bem vindo ao curso de php, ' .$nome;
	}



// Função com retorno
	function calcular_soma($numero1, $numero2){
		return $numero1 + $numero2;
	}


//Chamar função
exibir_boas_vindas('Paulo');
echo '<br/>';
echo calcular_soma(1, 2);

?>