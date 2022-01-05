<?php 

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo) 
    {
        // Classe parent é clase de quem estou herdando, nesse caso o contrutor de Pessoa.
        parent::__construct($nome, $cpf);

        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}
