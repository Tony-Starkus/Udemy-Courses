<?php 

/*

	*is_array() -> Verifica se uma variávl é um array;

	*in_array() -> Verifica se um valor existe em um array (Retorna "true" ou "false").
		Ex> $array = array('mac', 'windows') // in_array('mac', $array);

	*array_keys() -> Retorna todas as chaves de um array;

	*sort() -> Ordena um array.
		Ex> $frutas = array(0='banana', 1=amora', 2='carambola') // resultado: array(0='amora', 1='banana', 2='carambola');

	*asort() -> Ordena um array, mantendo índice/valor.
		Ex: $frutas = array(0='banana', 1=amora', 2='carambola') // resultado: array(1='amora', 0='banana', 2='carambola');

	*count() -> Conta elementos de um array.
		Ex> $array = ('Notebook', 'Celular') // Retorna 2;

	*array_merge() -> Funde um ou mais arrays
		Ex> $array_1 = array('mac', 'windows');
			$array_2 = array('linux');
			Resultado: array('mac', 'windows', 'linux');

	*explode() -> Divide uma string baseado em um delimitador
		Ex> $data = '10/12/2020';
			$retorno = explode('/', $data);
			Resultado: array(0=>'10', 1=>'12', 2=> '2020');
	
	*implode() -> Junta elementos de um array em uma string
		Ex> $array = array(0=>'10', 1=>'12', 2=>'2020');
		$retorno = implode('/', $array);
		Resultado: 10/12/2020;

*/


		//is_Array()
		/*$array= array('notebook', 'windows');
		$retorno = is_array($array);
		if($retorno){
			echo 'Verdadeiro';
		} else{
			echo 'Falso';
		}*/

//=====================================================//

		//in_array()
		/*$array = array('mac', 'linux', 'windows');
		$retorno = in_array('mac', $array);
		if($retorno){
			echo 'Verdadeiro';
		} else {
			echo 'Falso';
		}*/

//=====================================================//

		//array_keys()
		/*$produtos = array(10=>'Notebook', 11=>'Teclado');
		$chaves_array = array_keys($produtos);
		var_export($chaves_array);*/

//=====================================================//

		//sort()
		/*$frutas = array(0=>'Banana', 1=>'Amora', 2=>'Carambola');
		sort($frutas);
		var_export($frutas);*/

//=====================================================//

		//asort()
		/*$frutas = array(0=>'Banana', 1=>'Amora', 2=>'Carambola');
		asort($frutas);
		var_export($frutas);*/

//=====================================================//

		//count()
		/*$frutas = array(0=>'Banana', 1=>'Amora', 2=>'Carambola');
		$itens_array = count($frutas);
		echo $itens_array;*/

//=====================================================//

		//array_merge
		/*$array1 = array('mac', 'linux');
		$array2 = array('windows');
		$array3 = array('solaris');
		$novo_array = array_merge($array1, $array2, $array3);
		var_export($novo_array);*/

//=====================================================//

		//explode
		/*$string = "20/10/2020";
		$retorno = explode("/", $string);
		var_export($retorno);*/

//=====================================================//

		//implode
		$string = "20/10/2020";
		$retorno = explode("/", $string);
		$nova_string = implode("/", $retorno);
		echo $nova_string;

?>