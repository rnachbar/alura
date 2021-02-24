<?php declare(strict_types=1);

namespace Alura\OcultarDelegado;

class Departamento
{
    private $gerente;

    public function __construct(Gerente $gerente)
    {
        $this->gerente = $gerente;
    }

    public function getGerente(): Gerente
    {
        return $this->gerente;
    }
}
