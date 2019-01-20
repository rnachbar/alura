<?php

class KCV implements Imposto { /* Implementando a interface Imposto */

	public function calcula(Orcamento $Orcamento) {
		return $Orcamento->getValor() * 0.2;
	}

}