<?php

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\Diretor;

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Diretor(
    'Perola Esteves Nachbar',
    '333.111.111-33',
    13000
);

$autenticador->tentaLogin($umDiretor, '1234');
