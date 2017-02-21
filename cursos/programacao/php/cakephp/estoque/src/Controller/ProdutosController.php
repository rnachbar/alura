<?php
namespace App\Controller; // classe herda da App\Controller. Necessário para iniciar a controller

// todo controller extende para o AppController
class ProdutosController extends AppController {

	// crinado as ações. Por padrão, se não houver nenhuma ação, o cake irá procurar a index
	// toda vez que criamos uma controller temos que criar metodos, metodo é uma ação
	public function index() {
		$msg = "Bem vindo ao CakePHP!";

		//mandar variável da controller para a view
		$this->set('msg', $msg); // enviamos a variável 'msg' com conteúdo da $msg (nome, valor)

	} // após executar a ação o cake procura uma view, automaticamente dentro da pasta Template, uma pasta com o mesmo nome da controller (Template/Produtos) e dentro de Produtos vai procurar um arquivo com o mesmo nome da ação (Template/Produtos/index.ctp)
	
}