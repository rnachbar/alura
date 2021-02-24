<?php

declare(strict_types=1);

namespace Alura\EncapsularCampo;

class Funcionario
{
    public $nome;
    public $salario;

    public function __construct(string $nome, int $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }
}
