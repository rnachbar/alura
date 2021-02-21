<?php declare(strict_types=1);

namespace Alura\ExtrairClasse;

class Usuario
{
    private $nome;
    private $sobrenome;
    private $endereco; //nao pertence
    private $cep; //nao pertence
    private $telefone; //nao pertence
    private $tipoTelefone; //nao pertence
    private $ddd; //nao pertence

    public function __construct(string $nome, string $sobrenome, string $endereco, string $cep, string $telefone, string $ddd)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->endereco = $endereco;
        $this->cep = $cep;
        $this->telefone = $telefone;
        $this->ddd = $ddd;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function getTipoTelefone(): string
    {
        return $this->tipoTelefone;
    }

    public function getEnderecoECep(): string
    {
        return "$this->endereco $this->cep";
    }

    public function getTelefoneDdd(): string
    {
        return "($this->ddd) $this->telefone";
    }
}
