<?php

$peso = 83;
$altura = 1.70;
$imc = $peso / $altura ** 2;

echo "Seu IMC é $imc. Você está com o IMC ";

if ($imc < 18.5) {
  echo "abaixo";
} elseif ($imc < 25) {
  echo "dentro";
} else {
  echo "acima";
}

echo " do recomendado";
