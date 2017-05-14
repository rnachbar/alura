<?php
// livro é uma extensao de um produto com algumas caracteristicas a mais
// livro herda tudo que produto tem
// com o abstract não conseguimos mais estanciar Livro, somente os seus tipos
abstract class Livro extends Produto {

	private $isbn;

	public function getIsbn() {
		return $this->isbn;
	}

	public function setIsbn($isbn) {
		$this->isbn = $isbn;
	}

	// reescrita - reescrever o metodo
	public function calculaImposto() {
		// usando o getPreco() pois o preço é privado na classe mãe
		return $this->getPreco() * 0.065;
		// return $this->preco * 0.065; // usando protected preco
		// return parent::calculaImposto() * 2; // com isso o imposto da classe Livro será o resultado do calculaImposto da classe Produto, que é o parent, multiplicado por dois
	}

}