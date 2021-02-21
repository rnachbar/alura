<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

class Contato
{
    private $endereco;
    private $cep;
    private $ddd;
    private $telefone;
    private $tipoTelefone;

    public function __construct(
        string $endereco,
        string $cep,
        string $ddd,
        string $telefone,
        string $tipoTelefone
    ) {
        $this->endereco = $endereco;
        $this->cep = $cep;
        $this->ddd = $ddd;
        $this->telefone = $telefone;
        $this->tipoTelefone = $tipoTelefone;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function getDdd(): string
    {
        return $this->ddd;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function getTipoTelefone(): string
    {
        return $this->tipoTelefone;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }
}
