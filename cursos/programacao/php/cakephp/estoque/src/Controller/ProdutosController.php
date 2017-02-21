<?php
namespace App\Controller; // classe herda da App\Controller. Necessário para iniciar a controller

use Cake\ORM\TableRegistry; // usar a classe TableRegistry

// todo controller extende para o AppController
class ProdutosController extends AppController {

	// crinado as ações. Por padrão, se não houver nenhuma ação, o cake irá procurar a index
	// toda vez que criamos uma controller temos que criar metodos, metodo é uma ação
	public function index() {

		// pega a tabela, TableRegistry tras a tabela que queremos utilizar
		$produtosTable = TableRegistry::get('Produtos'); 
		$produtos = $produtosTable->find('all'); // pegar os dados, pegar todos

		//mandar variável da controller para a view
		$this->set('produtos', $produtos);

	} // após executar a ação o cake procura uma view, automaticamente dentro da pasta Template, uma pasta com o mesmo nome da controller (Template/Produtos) e dentro de Produtos vai procurar um arquivo com o mesmo nome da ação (Template/Produtos/index.ctp)
	
}