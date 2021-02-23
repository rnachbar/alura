<?php declare(strict_types=1);

function verificaSeEmailEhValido(): string {
    $email = $_GET['email'];
    $sucesso = "O seu e-mail é: $email";
    $erro = 'O seu e-mail não é válido';

    return filter_var($email, FILTER_VALIDATE_EMAIL) 
        ? $sucesso
        : $erro;
}

echo verificaSeEmailEhValido();
