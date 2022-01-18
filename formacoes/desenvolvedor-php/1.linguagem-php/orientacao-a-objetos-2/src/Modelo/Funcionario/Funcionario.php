<?php 

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{CPF, Pessoa};

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario) 
    {
        // Classe parent é clase de quem estou herdando, nesse caso o contrutor de Pessoa.
        parent::__construct($nome, $cpf);

        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valor): void
    {
        if ($valor < 0) :
            echo "Aumento deve ser positivo.";
            return;
        endif;

        $this->salario += $valor;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float;
}
