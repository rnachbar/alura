<?php

class Orcamento {
	
	private $valor;

	/* Classe de Contrução */
	/* Executada sempre que a classe é instanciada */
	function __construct($novoValor) { 
		$this->valor = $novoValor;
	}

	public function getValor() {
		return $this->valor;
	}

}
