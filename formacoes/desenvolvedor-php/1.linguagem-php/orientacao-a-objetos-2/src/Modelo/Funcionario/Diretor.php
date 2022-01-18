<?php

namespace Alura\Banco\Modelo\Funcionario; 

use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Autenticavel;

/**
 * Podemos extender de uma única classe, mas implementar de quantas interfaces quisermos.
 */
class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}