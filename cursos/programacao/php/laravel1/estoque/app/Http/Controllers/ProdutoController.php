<?php 

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB; /* Utilizano classe DB do Laravel */

class ProdutoController extends Controller {

	public function lista() {

		/* DB é uma classe do laravel para consultas no banco */
		$produtos = DB::select('select * from produtos');
		// dd($produtos); /* Dump da variável */

		$html = '<h1>Listagem de Produtos</h1>';
		foreach ($produtos as $p) {
			$html .= "<br /> Nome: " . $p->nome;
		}

		return $html;
	}

}
