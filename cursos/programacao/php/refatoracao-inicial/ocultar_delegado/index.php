<?php declare(strict_types=1);

namespace Alura\OcultarDelegado;

require 'Departamento.php';
require 'Gerente.php';
require 'Pessoa.php';

$maria = new Pessoa(new Departamento(new Gerente('José')));

echo $maria->getDepartamento()->getGerente()->getNome();
