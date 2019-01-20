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

	public function novo() {

		$produtosTable = TableRegistry::get('Produtos'); // pega a tabela Produto, usa a tabela
		$produto = $produtosTable->newEntity(); // criando uma nova entidade para produto, um produto vazio. Se queremos cadastrar um produto novo, precisamos de uma variavel vazia para preencher

		// enviando variavel da controller para a view
		$this->set('produto', $produto);
	}

	public function salva() {

		$produtosTable = TableRegistry::get('Produtos');
		$produto = $produtosTable->newEntity($this->request->data());

		// se o id, que é a chave primária for null, o cake sabe que é para inserir um novo registro, caso o ide esteja preenchido ele ira atualizar o registro com o id informado
		if ($produtosTable->save($produto)) {
			$msg = "Produto salvo com sucesso!";
			$this->Flash->set($msg, ['element' => 'success']); // usar o Flash Scope
		} else {
			$msg = "Erro ao salvar o produto!";
			$this->Flash->set($msg, ['element' => 'error']); // usar o Flash Scope
		}

		$this->redirect('Produtos/index');

		// $this->request->data(); // pegar dados do formulário
		// $produtosTable->save($produto); // salvar no banco
	}

	// tem que receber o id do produto por parametro
	public function editar($id) {

		$produtosTable = TableRegistry::get('Produtos');
		$produto = $produtosTable->get($id);

		$this->set('produto', $produto);

		// renderizar a ação novo, a view novo
		$this->render('novo');
	}

	// tem que receber o id do produto por parametro
	public function apagar ($id) {

		$produtosTable = TableRegistry::get('Produtos');
		$produto = $produtosTable->get($id);

		if ($produtosTable->delete($produto)) {
			$msg = "Produto removido com sucesso!";
			$this->Flash->set($msg, ['element' => 'error']); // usar o Flash Scope, com elemento de erro, pode se personalizar o element
		} else {
			$msg = "Erro ao deletar o produto!";
			$this->Flash->set($msg); // usar o Flash Scope
		}

		// fazer um redirecionamento (Para Produtos na ação index)
		$this->redirect('Produtos/index');

		// $produtosTable->delete($produto) // deletar registro
	}
}