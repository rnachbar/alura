<?php declare(strict_types=1);

namespace Alura\MoverCampo;

class Contato
{
    private $endereco;
    private $telefone;

    public function __construct(string $endereco, string $telefone)
    {
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }

    public function __toString()
    {
        return "<p>Endereço: $this->endereco</p>
                <p>Telefone: $this->telefone</p>";
    }
}
