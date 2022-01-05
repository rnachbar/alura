<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;

$endereco = new Endereco('Campinas', 'SP', 'Rua Teste', '123');

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('Campinas', 'SP', 'Rua Teste 2', '71B');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
