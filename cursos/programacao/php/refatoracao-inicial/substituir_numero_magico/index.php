<?php declare(strict_types=1);

namespace Alura\SubstituirNumeroMagico;

require 'CalculadoraDeSalario.php';

$calculadoraDeSalario = new CalculadoraDeSalario('1000');

$salarioComDescontos = $calculadoraDeSalario->aplicaDescontos();

echo $salarioComDescontos;
