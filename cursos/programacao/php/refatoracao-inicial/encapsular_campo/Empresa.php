<?php

declare(strict_types=1);

namespace Alura\EncapsularCampo;

class Empresa
{
    private $funcionarios = [];

    public function adicionarFuncionario(Funcionario $funcionario): void
    {
        array_push($this->funcionarios, $funcionario);
    }

    public function promoveFuncionario(Funcionario $possivelFuncionario, float $aumento)
    {
        foreach ($this->funcionarios as $funcionario) {
            if ($funcionario->nome === $possivelFuncionario->nome) {
                $funcionario->salario += $aumento;
            }
        }
    }
}
