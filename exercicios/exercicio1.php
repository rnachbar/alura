<?php

function somaArray($array){
	$soma = 0;
	for($i = 0; $i < sizeof($array); $i++){
		$soma = $soma + $array[$i];
	}
	return $soma;
}

$numeros = array(10,20,30,40,50);
$resultado = somaArray($numeros);
echo $resultado;


?>