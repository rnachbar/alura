<?php declare(strict_types=1);

namespace Alura\MoverMetodo;

class Correntista
{
    private $nome;
    private $sobrenome;

    public function __construct(string $nome, string $sobrenome)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }
}
