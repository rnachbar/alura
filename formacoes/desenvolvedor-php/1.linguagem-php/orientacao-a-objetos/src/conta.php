<?php

/**
 * Quando utilizamos condicionais (if, else if, else), aumentamos a complexidade do nosso código. 
 * Isso dificulta a leitura.
 * 
 * Quanto menos condicionais tivermos, mais natural e fácil se torna a leitura. 
 * A técnica Early Return ajuda bastante neste caso.
 * 
 * Aqui tem um artigo explicando um pouco sobre esta técnica: 
 * https://dorianneto.com.br/boas-praticas/torne-se-um-ninja-das-funcoes-com-early-return/.
 */

class Conta 
{
    /**
     * Ter propriedades sempre privadas e somente métodos como públicos.
     */
    private $saldo;
    private $titular;

    /**
     * Atributo estático é um atributo da classe (Conta) e não da instância.
     * Entendemos o que são membros estáticos. São membros da classe em si, e não de cada instância (objeto).
     */
    private static $numero_de_contas = 0;

    public function __construct(Titular $titular) 
    {
        $this->saldo = 0;
        self::$numero_de_contas++;
        
        $this->titular = $titular;
    }

    public function __destruct()
    {
        // if (self::$numero_de_contas > 2) :
        //     echo "Existe mais de uma conta ativa";
        // endif;

        self::$numero_de_contas--;
    }

    public function sacar(float $valor)
    {
        if ($valor > $this->saldo) :
            echo "Saldo indisponível";
            return;
        endif;

        $this->saldo -= $valor;
    }

    public function depositar(float $valor)
    {
        if ($valor < 0) :
            echo "Valor precisa ser positivo";
            return;
        endif;

        $this->saldo += $valor;
    }

    public function tranferir(float $valor, Conta $conta): void
    {
        if ($valor > $this->saldo) :
            echo "Saldo indisponível";
            return;
        endif;

        $this->sacar($valor);
        $conta->depositar($valor);
    }

    public function recuperarCPF(): string
    {
        return $this->titular->recuperarCPF();
    }

    public function recuperarNome(): string
    {
        return $this->titular->recuperarNome();
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public static function recuperarNumeroDeContas(): int
    {
        return self::$numero_de_contas;
    }
}
