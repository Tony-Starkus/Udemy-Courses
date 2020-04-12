<?php

//Class mãe ou Super Classe;
class Felino {
	var $mamifero = 'sim';

	function correr() {
		echo 'Correr como felino';
	}

}

//Class filha ou subclasse
class Chita extends Felino {

	//Polimorfismo. a função "correr" já foi herdada, mas foi sobreescrita aqui.
	function correr() {
		echo 'Correr como chita 100 KM/H';
	}

}

/*
class Gato extends Felino {

}
*/

$chita = new Chita();

echo $chita->mamifero . '<br>';

$chita->correr();

?>