<?php 

// date(formato de data = dia/mes/ano ou ano/mes/dia hora:minuto). o "Y" maiúsculo usa os 4 dígitos do ano, o minúsculo usa 2. O "H" usa o padrão 24 horas, o "h" usa padrão 12 horas.
// echo date("d/m/Y H:i");

// strtotime -> converte uma string para tempo (em segundos). Ex: "2015-02-02";
$data_inicial = '2015-04-02';
$data_final = '2015-04-05';

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

$diferenca_times = $time_final - $time_inicial;

$diaSegundos = 24*60*60;

$diferenca_dias = $diferenca_times / $diaSegundos;

echo $diferenca_dias;

?>