<?php 

$num = 1;

while ( $num < 10 ) {

	/* Aqui ele pula a interação, nesse caso, quando a variavel for 3, ele volta para o laço, não executa mais o código na interação $num = 3;
	$num = $num + 1;
	if($num == 3){
		continue;
	}
	*/

	echo $num;
	echo '<br/>';
	$num = $num + 1;

	/* ele para totalmente o laço, não volta mais no while.
	if($num == 5){
		break;
	}
	*/



}



?>