<?php declare(strict_types=1);

function verificaSeEmailEhValido(): string
{
    return filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) ? "O seu e-mail é: " . $_GET['email'] : "O seu e-mail não é válido";
}

echo verificaSeEmailEhValido();
