<?php 

// strtolower -> String minúscula. Ex: "curso completo de php"

/* $texto = "Curso Completo de PHP";
echo strtolower($texto); */

//=========================================================//


// strtoupper -> String maiúscula. Ex: "CURSO COMPLETO DE PHP"

/* $texto = "Curso Completo de PHP";
echo strtoupper($texto); */

//=========================================================//


// ucfirst -> Primeira letra de uma string maiúscula. Ex: "Era uma vez um homem chamado Gepeto que fazia lindos bonecos de madeira"

/* $texto = "curso completo de php";
echo ucfirst($texto); */

//=========================================================//


// strlen -> Conta os caracteres da string. Ex: "amor", tem 4 caracteres

/* $texto = "curso completo de php";
echo strlen($texto); */

//=========================================================//


// str_replace(search, replace, subject) -> substitui um elemento/caractere da string por outro. Ex: "." por ",".

/* $texto = "R$ 12.40";
echo str_replace(".", ",", $texto); */

//=========================================================//


// substr(string, start, end) -> retorna uma parte de uma string (seria o conceito de substring no java). Ex: "Entenda porque seu smartphone esquenta tanto", substr = "Entenda porque seu smartphone..."

/* $texto = "Entenda porque seu smartphone esquenta tanto, se você tem um smartphone";
echo substr($texto, 0, 44); */

//=========================================================//





/*
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '' ;
$total_string_cpf = strlen($cpf);

if($total_string_cpf != 11 && $cpf != '' ){
	echo "CPF Inválido";
}
*/

?>

<!--
<form method="post" action="">
	<label>
		CPF
		<input type="text" name="cpf">
	</label>

	<input type="submit" value="Cadastrar">

</form>
-->