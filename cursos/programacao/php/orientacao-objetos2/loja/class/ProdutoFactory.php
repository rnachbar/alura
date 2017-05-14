<?php

class ProdutoFactory {

	private $classes = array("LivroFisico", "Ebook");

	// classe que encapsula a criação de produtos
	public function criaPor($tipoProduto, $parametros) {

		$nome = $parametros['nome'];
		$preco = $parametros['preco'];
		$descricao = $parametros['descricao'];
		$categoria = new Categoria ();
		$usado = $parametros['usado'];

		// Se o tipo do produto estiver no array classes
		if (in_array($tipoProduto, $this->classes)) {
			// Podemos instanciar a classe com uma variavel
			// O parametro tem que ter o mesmo nome da classe
			return new $tipoProduto($nome, $preco, $descricao, $categoria, $usado);
		} else {
			return new LivroFisico($nome, $preco, $descricao, $categoria, $usado);
		}

	}

}