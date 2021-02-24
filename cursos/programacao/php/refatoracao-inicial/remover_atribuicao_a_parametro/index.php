<?php declare(strict_types=1);

function recebeDesconto(int $descontoInicial, bool $ehPremium, int $quantidade, int $anosCliente): void {
    $desconto = $descontoInicial;

    if ($desconto > 200) {
        return;
    }

    if ($ehPremium === true) {
        $desconto = $descontoInicial * 1.1;
    }

    if ($quantidade > 50) {
        $desconto = $desconto * 1.2;
    }

    if ($anosCliente > 3) {
        $desconto = $desconto * 1.1;
    }

    echo <<<EOF
    --------------------
    Desconto Inicial: $descontoInicial
    Desconto: $desconto
    --------------------
    EOF;
}

recebeDesconto(50, true, 100, 100);
