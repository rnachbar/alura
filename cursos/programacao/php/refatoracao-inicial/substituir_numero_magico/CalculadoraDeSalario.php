<?php declare(strict_types=1);

namespace Alura\SubstituirNumeroMagico;

class CalculadoraDeSalario
{
    private $salario;

    // Valores que não serão alterados ao lonfo do programa.
    private const INSS = 0.08;
    private const IR = 0.075;

    public function __construct(string $salario)
    {
        $this->salario = $salario;
    }

    public function aplicaDescontos() {
        return $this->salario - $this->salario * self::INSS - $this->salario * self::IR;
    }
}
