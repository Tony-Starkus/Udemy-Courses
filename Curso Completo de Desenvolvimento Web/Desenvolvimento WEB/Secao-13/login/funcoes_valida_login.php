<?php

function valida_login($login, $senha){

	// Validar direto em um banco de dados.
	$login_bd = 'thalisson.bandeira';
	$senha_bd = '123';


	if($login == $login_bd && $senha == $senha_bd){

		return true;
	}

	return false;
}


?>