<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

class Usuario
{
    private $nome;
    private $sobrenome;
    private $contato;
    private $cep;
    private $telefone;

    public function __construct(
        string $nome,
        string $sobrenome,
        Contato $contato
    ) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->contato = $contato;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function getEnderecoECep(): string
    {
        return "$this->endereco $this->cep";
    }

    public function getTelefoneDdd(): string
    {
        return "({$this->contato->getDdd()}) {$this->contato->getTelefone()}";
    }
}
