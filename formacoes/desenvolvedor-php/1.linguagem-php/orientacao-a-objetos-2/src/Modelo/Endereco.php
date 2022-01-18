<?php 

namespace Alura\Banco\Modelo;

/**
 * Classe de Endereço
 * 
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */
final class Endereco 
{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    /**
     * Utilizando trait para pegar o conteúdo dela e "colar" onde é chamado
     */
    use Acessor;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero) {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}
