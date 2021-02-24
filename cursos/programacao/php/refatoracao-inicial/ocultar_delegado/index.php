<?php declare(strict_types=1);

namespace Alura\OcultarDelegado;

require 'Departamento.php';
require 'Gerente.php';
require 'Pessoa.php';

$maria = new Pessoa(new Departamento(new Gerente('José')));

// Princípio do menor conhecimento.
// Lei de Demeter (um objeto só deve ter noção dos objetos que são próximos a ele)
// Pessoa só deveria ter conhecimento de Departamento, não de Gerente.
// echo $maria->getDepartamento()->getGerente()->getNome();

echo $maria->getNomeDoGerente();
