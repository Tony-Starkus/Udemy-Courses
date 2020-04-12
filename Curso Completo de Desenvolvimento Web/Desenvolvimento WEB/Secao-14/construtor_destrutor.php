<?php

/*

Método construtor (__construct)
	É chamado automaticamente quando um novo objeto é criado, sendo possível definir informações iniciais necessárias ao objeto.


Método destrutor (__destruct)
	É chamado automaticamente quando um objeto é deslocado da memória (a execução é finalizada).

*/

Class Pessoa {

	private $nome;

	public function correr() {
		echo $this->nome . " correndo<br>";
	}

	function __construct($parametro_nome) {
		echo "Construtor iniciado<br>";
		$this->nome = $parametro_nome;
		//echo $this->nome;
	}

	function __destruct() {
		echo "Objeto removido <br>";
	}

}


$pessoas = new Pessoa("Thalisson");
$pessoas->correr();

?>