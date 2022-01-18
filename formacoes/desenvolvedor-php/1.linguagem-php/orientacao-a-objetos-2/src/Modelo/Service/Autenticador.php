<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    private $totalBonificacoes = 0;

    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) :
            echo 'Ok. Usuário logado no sistema'; 
        else :
            echo 'Ops. Senha incorreta';
        endif;
    }
}
