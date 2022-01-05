<?php 

class CFP {
    private $cpf;

    public function __construct(string $cpf) 
    {
        $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^([0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}|[0-9]{2}\.?[0-9]{3}\.?[0-9]{3}\/?[0-9]{4}\-?[0-9]{2})$/'
            ]
        ]);

        if ($cpf === false) :
            echo "CPF inválido";
            exit();
        endif;

        $this->cpf = $cpf;
    }

    public function recuperarCPF(): string
    {
        return $this->cpf;
    }
}