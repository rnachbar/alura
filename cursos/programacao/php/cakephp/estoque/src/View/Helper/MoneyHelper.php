<?php
// O caminho do namespace é sempre App\ e as pastas de onde está na arquitetura MVC
namespace App\View\Helper;
use Cake\View\Helper; // chamar a classe Helper

class MoneyHelper extends Helper {

	// a função recebe um parametro (number)
	public function format($number) {
		// adicionamos R$, formatamos o número (number, com duas casa decimais, separar decimal com vírgula, separar milhar com ponto). Retornamos
		return "R$ " . number_format($number,2,",",".");
	}

}