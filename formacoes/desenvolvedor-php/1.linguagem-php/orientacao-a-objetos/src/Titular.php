<?php

class Titular {
    private $cpf;
    private $nome;

    public function __construct(CPF $cpf, string $nome) 
    {
        $this->cpf = $cpf;
        $this->validarNome($nome);
        $this->nome = $nome;
    }

    // public function definirCPF(string $cpf): void
    // {
    //     $this->cpf = $cpf;
    // }

    // public function definirNome(string $nome): void
    // {
    //     $this->nome = $nome;
    // }

    public function recuperarCPF(): string
    {
        return $this->cpf->recuperarCPF();
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    private function validarNome(string $nome): void
    {
        if (strlen($nome) < 5) :
            echo "Nome incorreto";
            exit();
        endif;
    }
}