<?php 

require_once 'src/Conta.php';
require_once 'src/CPF.php';
require_once 'src/Titular.php';

$cpf = new CPF('405.945.288-28');
$titular = new Titular($cpf, 'Raphael Nachbar');
$primeira_conta = new Conta($titular);

$primeira_conta->depositar(500);
$primeira_conta->sacar(300);

echo $primeira_conta->recuperarCPF();
echo $primeira_conta->recuperarNome();
echo $primeira_conta->recuperarSaldo();
echo Conta::recuperarNumeroDeContas();
