<?php

class Avaliador {

	public $maiorValor = -INF; /* menos infinito, qualquer número é maior que menos infinito */
	public $menorValor = INF; /* Nenhu, valor será maior que infinito a primeira vez que o código for executado */

	public function avalia(Leilao $leilao) {
		 
		foreach ($leilao->getLances() as $lance) {
			if ($lance->getValor() > $this->maiorValor) {
				$this->maiorValor = $lance->getValor();
			} else if ($lance->getValor() < $this->menorValor) {
				$this->menorValor = $lance->getValor();
			}
		}

	}

	public function getMaiorLance() {
		 return $this->maiorValor;	
	}

	public function getMenorLance() {
		 return $this->menorValor;	
	}

}
