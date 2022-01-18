<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa 
{
    protected $nome;
    private $cpf;

    /**
     * Utilizando trait para pegar o conteúdo dela e "colar" onde é chamado
     */
    use Acessor;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCPF(): string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) :
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        endif;
    }
}
