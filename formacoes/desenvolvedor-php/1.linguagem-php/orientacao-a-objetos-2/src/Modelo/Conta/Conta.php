<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaDeSaque = $valorASacar * $this->percentualTarifa();
        $valorDoSaque = $valorASacar + $tarifaDeSaque; 

        if ($valorDoSaque > $this->saldo) :
            echo "Saldo indisponível";
            return;
        endif;

        $this->saldo -= $valorDoSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) :
            echo "Valor precisa ser positivo";
            return;
        endif;

        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    /**
     * Para um método abstrato, todas as classes que extende da minha classe, 
     * precisam ter esse metódo.
     */
    abstract protected function percentualTarifa(): float;
}