<?php

	session_start();
	
	require_once('db.class.php');

	$objetoDB = new db();
	$link = $objetoDB->conecta_mysql();

	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	$sql = "SELECT id, usuario, email FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

	

	//update -> retorno true/false
	//insert -> true para sucesso / false para falha


	//select -> retorno false para erro na consulta / retorno resource para sucesso na consulta, retorna o resultado
	$resultado_ID = mysqli_query($link, $sql);

	if($resultado_ID){
		$dados_usuario = mysqli_fetch_array($resultado_ID); //Vai salvar o resultado em um array, se não encontrar, retorna NULL
		if(isset($dados_usuario['usuario'])){

			$_SESSION['usuario'] = $dados_usuario['usuario'];
			$_SESSION['email'] = $dados_usuario['email'];
			$_SESSION['id_usuario'] = $dados_usuario['id'];

			header('Location: home.php');
		} else {
			header('Location: index.php?erro=1');
		}

	} else {
		echo 'Erro na execução na consulta, por favor entrar em contato com o admin do site';
	}

	

	//delete -> retorno true/false

?>