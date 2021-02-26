<?php

// O include não da erro se não encontrar o arquivo, só da um aviso.
// include 'funcoes.php';

// Arquivos obrigatórios devem ser chamados com o require.
// require 'funcoes.php';

// Incliu o arquivo apenas uma vez, exitando duplicar.
require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Raphael',
        'saldo' => 1000
    ],

    '123.456.889-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],

    '443.456.789-10' => [
        'titular' => 'João',
        'saldo' => 300
    ]
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.889-11'] = sacar($contasCorrentes['123.456.889-11'], 100);
$contasCorrentes['123.456.889-11'] = depositar($contasCorrentes['123.456.889-11'], 900);

unset($contasCorrentes['123.456.889-11']);
titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

foreach ($contasCorrentes as $cpf => $conta) :
    // Pegando valores do array e adicionando a variávies.
    // list('titular' => $titular, 'saldo' => $saldo) = $conta;
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem($cpf . ' ' . $titular . ' ' . $saldo);

    exibeMensagem($cpf . ' ' . $conta['titular'] . ' ' . $conta['saldo']);

    // Essa forma só acontece de forma correta dentro de uma string ("minha string").
    exibeMensagem("$cpf $conta[titular] $conta[saldo]");

    // Interpolar valores de forma complexa.
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
endforeach;
