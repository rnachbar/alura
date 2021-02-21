<?php declare(strict_types=1);

namespace Alura\SubstituirSubclassesPorCampo;

class Microondas220 extends Microondas
{

    public function getVoltagem(): int
    {
        return 220;
    }
}
