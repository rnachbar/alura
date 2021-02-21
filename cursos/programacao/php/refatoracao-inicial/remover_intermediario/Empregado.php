<?php declare(strict_types=1);

namespace Alura\RemoverIntermediario;

class Empregado
{
    private $funcionario;

    public function __construct(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
    }

    public function getNome(): string
    {
        return $this->funcionario->getNome();
    }

    public function getCargo(): string
    {
        return $this->funcionario->getCargo();
    }
}
