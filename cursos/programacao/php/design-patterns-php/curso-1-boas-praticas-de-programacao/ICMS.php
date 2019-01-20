<?php

class ICMS implements Imposto { /* Implementando a interface Imposto */

	public function calcula(Orcamento $Orcamento) { /* Classe do tipo Orçamento, onde podemos utilizar o método getValor */
		return $Orcamento->getValor() * 0.05;
	}

}