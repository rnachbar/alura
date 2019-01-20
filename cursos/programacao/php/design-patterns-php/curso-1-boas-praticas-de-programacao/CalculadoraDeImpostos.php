<?php

class CalculadoraDeImpostos {
	
	/* Ter vários métodos dentro de uma classe é um problema. Vamos tentar resolver tudo dentro do mesmo método */
	// public function calculaICMS(Orcamento $Orcamento) { /* Forçando tipo como Orçamento */
	// 	return $Orcamento->getValor() * 0.05; /* 5% */
	// }

	// public function calculaISS(Orcamento $Orcamento) {
	// 	return $Orcamento->getValor() * 0.1; /* 10% */
	// }

	/* Aqui o problema ainda persiste pois, antes tinhamos um método para cada imposto e agora temos um if para cada imposto. Isso ainda não é a melhor forma. */
	/* Nesse caso o melhor seria ter uma classe para cada imposto, as vezes o calculo do imposto pode ser complexo por isso a criação de uma nova classe seja uma boa solução. */
	/* Assim temos objetos que cuidam do calculo do imposto separado da minha calculadora, então se precisarmos mexer no ISS vamos direto no objeto responsavel por ele. Tudo está muito mais isolado. */
	public function calcula(Orcamento $Orcamento, Imposto $imposto) {
		
		/* O que muda de um if para o outro é só o objeto que estamos criando, o nome do método é sempre igual. */
		// if ($imposto == 'ICMS') {
		// 	$icms = new ICMS();
		// 	return $icms->calcula($Orcamento);
		// } else if ($imposto == 'ISS') {
		// 	$iss = new ISS();
		// 	return $iss->calcula($Orcamento);
		// }

		/* Então vamos passar o objeto invés da string e como o nome dos metodos estão padronizados é só chamarmos o nome do objeto que está vindo. */
		return $imposto->calcula($Orcamento);

	}

}