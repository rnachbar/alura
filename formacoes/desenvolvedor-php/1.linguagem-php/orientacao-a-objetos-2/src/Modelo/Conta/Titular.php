<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        // Classe parent é clase de quem estou herdando, nesse caso o contrutor de Pessoa.
        parent::__construct($nome, $cpf);

        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
