<?php declare(strict_types=1);

namespace Alura\SubstituirSubclassesPorCampo;

class Microondas110 extends Microondas
{

    public function getVoltagem(): int
    {
        return 110;
    }
}
