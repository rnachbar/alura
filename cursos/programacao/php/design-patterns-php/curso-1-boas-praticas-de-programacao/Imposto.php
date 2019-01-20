<?php

/* Obrigatório cumpri o que está especificado na interface. */
/* Nesse caso, utilizar o método imposto */

interface Imposto { /* Forçando Imposto a ter o método calcula */
	public function calcula(Orcamento $Orcamento);
}
