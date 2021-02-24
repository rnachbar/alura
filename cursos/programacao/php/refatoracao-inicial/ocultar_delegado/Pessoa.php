<?php declare(strict_types=1);

namespace Alura\OcultarDelegado;

class Pessoa
{
    private $departamento;

    public function __construct(Departamento $departamento)
    {
        $this->departamento = $departamento;
    }

    public function getDepartamento(): Departamento
    {
        return $this->departamento;
    }

    public function getNomeDoGerente(): string {
        return $this->departamento->getGerente()->getNome();
    }
}
