<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('405.945.288-28'), 
        'Raphael Nachbar', 
        new Endereco('Campinas', 'Bairro Teste', 'Rua Teste', '123A')
    )
);

$contaCorrente->deposita(500);
$contaCorrente->saca(100);

echo $contaCorrente->recuperaSaldo();

$contaPoupanca = new ContaPoupanca(
    new Titular(
        new CPF('405.945.288-28'), 
        'Raphael Nachbar', 
        new Endereco('Campinas', 'Bairro Teste', 'Rua Teste', '123A')
    )
);

$contaPoupanca->deposita(500);
$contaPoupanca->saca(100);

echo $contaPoupanca->recuperaSaldo();
