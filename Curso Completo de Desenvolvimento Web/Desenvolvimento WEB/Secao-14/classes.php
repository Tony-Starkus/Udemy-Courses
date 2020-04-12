<?php

class Pessoa {
	//Atributos
	var $nome;

	//Métodos
	//getters e setter
	function setNome($nome_definido) {
		$this->nome = $nome_definido;
	}

	function getNome() {
		return $this->nome;
	}

}

$pessoa = new Pessoa();

$pessoa->setNome('Thalisson');

echo $pessoa->getNome();

?>