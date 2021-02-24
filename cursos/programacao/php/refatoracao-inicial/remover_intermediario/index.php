<?php declare(strict_types=1);

namespace Alura\RemoverIntermediario;

require 'Funcionario.php';

$maria = new Funcionario('Giovanni', 'Instrutor');

echo "<p>{$maria->getNome()}</p>";
echo "<p>{$maria->getCargo()}</p>";
