<?php

class Veiculo {
	/* 
	public -> Quando utilizar o "var", ele automanticamente é público.
	private
	protected
	*/

	private $placa;
	private $cor;
	protected $tipo = 'Caminhonete';

	public function setPlaca($parametro_placa) {
		$this->placa = $parametro_placa;
	}

	public function getPlaca() {
		return $this->placa;
	}

}


class Carro extends Veiculo {
	public function exibirTipo() {
		echo $this->tipo;
	}
}


$carro = new Carro();
//$veiculo->setPlaca('JAM3636');
$carro->exibirTipo();
//echo $veiculo->placa;



?>