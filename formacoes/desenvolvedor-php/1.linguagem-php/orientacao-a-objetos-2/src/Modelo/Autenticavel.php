<?php

/**
 * Interface é uma classe abstrata com todos os métodos abstratos.
 */

namespace Alura\Banco\Modelo;

interface Autenticavel 
{
    public function podeAutenticar(string $senha): bool;
}