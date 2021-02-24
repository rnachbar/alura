<?php declare(strict_types=1);

namespace Alura\OcultarDelegado;

class Gerente
{
    private $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
}
