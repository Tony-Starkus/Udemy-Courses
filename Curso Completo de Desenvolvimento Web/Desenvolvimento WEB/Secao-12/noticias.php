<?php 

$noticias = array();

$noticias[1]['titulo'] = 'título da notícia 1';
$noticias[1]['conteudo'] = 'conteúdo dessa notícia 1';

$noticias[2]['titulo'] = 'título da notícia 2';
$noticias[2]['conteudo'] = 'título dessa notícia 2';

$noticias[3]['titulo'] = 'título da notícia 3';
$noticias[3]['conteudo'] = 'título dessa notícia 3';

//var_dump($noticias);


/*========== while ==========*/
/*
$idx = 1;
while ($idx <= 3) {
	
	echo $noticias[$idx]['titulo'];
	echo '<br/>';
	echo $noticias[$idx]['conteudo'];
	echo '<br/>';

	$idx++;
}
*/




/*======== do while ========*/
/*
$idx = 1;
do{

	echo $noticias[$idx]['titulo'];
	echo '<br/>';
	echo $noticias[$idx]['conteudo'];
	echo '<br/>';

	$idx++;

} while($idx <= 3);
*/




/*========== for ==========*/
/*
for($idx = 1; $idx <= 3; $idx++){
	echo $noticias[$idx]['titulo'];
	echo '<br/>';
	echo $noticias[$idx]['conteudo'];
	echo '<br/>';
}
*/

?>