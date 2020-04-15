<?php

function adiciona2($x) {
  return $x + 2;
}

function sacar(array $conta, float $valorASacar): array { // informando os tipos de dados que recebe e o tipo de dado que vai retornar
  // Uma função executa tudo o que ela precisa devolve um valor
  if ($valorASacar > $conta['saldo']) {
    exibeMensagem("Você não pode sacar");
  } else {
    $conta['saldo'] = $valorASacar;
  }

  return $conta;
}

function depositar(array $conta, float $valor): array {
  if ($valor > 0) {
    $conta['saldo'] += $valor;
  } else {
    exibeMensagem("Você não pode depositar");
  }

  return $conta;
}

function exibeMensagem(string $mensagem) { // Subrotina
  // Uma subrotina executa tudo o que ela precisa executar e não devolve valor nenhum
  echo $mensagem . PHP_EOL;
}

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

foreach ($contasCorrentes as $cpf => $conta) :
  exibeMensagem($cpf . ' ' . $conta['titular'] . ' ' . $conta['saldo']);
  exibeMensagem("$cpf $conta[titular] $conta[saldo]"); // essa forma só acontece de forma correta dentro de uma string
  exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
endforeach;
