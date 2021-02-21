<?php

// Arrays Associativos

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

$contasCorrentes['053.456.752-10'] = [
  'titular' => 'Alberto',
  'saldo' => 5000
];

foreach ($contasCorrentes as $cpf => $conta) :
  echo $conta['titular'] . PHP_EOL;
endforeach;
