<?php declare(strict_types=1);

namespace Alura\SubstituirNumeroMagico;

class CalculadoraDeSalario
{
    private $salario;

    public function __construct(string $salario)
    {
        $this->salario = $salario;
    }

    public function aplicaDescontos()
    {
        //pega o salário, desconta o INSS e o IR
        return $this->salario - $this->salario * 0.08 - $this->salario * 0.075;
    }
}
