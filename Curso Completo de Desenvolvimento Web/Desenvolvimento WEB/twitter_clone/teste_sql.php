<?php

	require_once('db.class.php');
	$objetoDB = new db();
	$link = $objetoDB->conecta_mysql();

	$sql = "SELECT * FROM usuarios";

	$resultado = mysqli_query($link, $sql);

	$html = "";

	while($dados_usuario = mysqli_fetch_array($resultado)) {
		$id = $dados_usuario['id'];
		$usuario = $dados_usuario['usuario'];
		$email = $dados_usuario['email'];
		
		$html .= "
			<tr>
				<th scope='row'>$id</th>
			    <td>$usuario</td>
				<td>$email</td>
			</tr>
		";

	}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   	

   	<div class="container">
   		
   		<div class="row">
   			
   			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">NOME</th>
			      <th scope="col">EMAIL</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php echo $html; ?>
			  </tbody>
			</table>

   		</div><!-- fim row -->

   	</div><!-- fim container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>