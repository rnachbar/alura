<?php

function adiciona2($x): int {
    return $x + 2;
}

/**
 * Informando os tipos de dados que recebe e o tipo de dado que vai retornar.
 * Uma função executa tudo o que ela precisa devolve um valor.
 * @param array $conta
 * @param float $valorASacar
 * @return array
 */
function sacar(array $conta, float $valorASacar): array {
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] = $valorASacar;
    }

    return $conta;
}

/**
 * Depositando valor.
 * @param array $conta
 * @param float $valor
 */
function depositar(array $conta, float $valor) {
    if ($valor > 0) {
        $conta['saldo'] += $valor;
    } else {
        exibeMensagem("Você não pode depositar");
    }

    return $conta;
}

/**
 * Subrotina.
 * Uma subrotina executa tudo o que ela precisa executar e não devolve valor nenhum.
 * @param string $mensagem
 */
function exibeMensagem(string $mensagem) {
    echo $mensagem . '<br>';
}

/**
 * O & indica que estou recebendo o endereço da conta e não uma cópia dela.
 * Quando passamos o valor sem o &, estamos enviando uma cópia desse valor. Ao adicionar o & passamos 
 * exatamento a variável e ela é alterada.
 * & é passar por referência.
 * Sem o & é passar por valor.
 * @param array &$conta
 * @return void
 */
function titularComLetrasMaiusculas(array &$conta): void {
    $conta['titular'] = mb_strtoupper($conta['titular']);
}
