<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Cidade', 'Bairro', 'Rua', 'Número');
$outroEndereco = new Endereco('Cidade 2', 'Bairro 2', 'Rua 2', 'Número 2');

// echo $umEndereco->rua . PHP_EOL;
// echo $umEndereco->cidade . PHP_EOL;

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;
