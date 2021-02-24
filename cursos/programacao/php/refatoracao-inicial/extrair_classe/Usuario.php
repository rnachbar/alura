<?php declare(strict_types=1);

namespace Alura\ExtrairClasse;

class Usuario
{
    private $nome;
    private $sobrenome;

    public function __construct(string $nome, string $sobrenome, Contato $contato) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->contato = $contato;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getSobrenome(): string {
        return $this->sobrenome;
    }

    public function getEnderecoECep(): string {
        return $this->contato->getEnderecoECep();
    }

    public function getTelefoneDdd(): string {
        return $this->contato->getTelefoneDdd();
    }
    
}
