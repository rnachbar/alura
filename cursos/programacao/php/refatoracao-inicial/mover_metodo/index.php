<?php declare(strict_types=1);

namespace Alura\MoverMetodo;

require 'ContaCorrente.php';
require 'Correntista.php';

$correntista = new Correntista("Giovanni", "Tempobono");
$contaCorrente = new ContaCorrente($correntista);

echo $contaCorrente->exibeNomeCorrentista();
