<?php

// não se pode instanciar uma classe abstrata
// se a classe mãe possui um metodo abstrato, todas suas filhas tem que ter esse metodo
// uma classe abstrata pode ter metodos que não sejam abstratos
// a partir do momento que ela tem um metodo abstrato a classe tem que ser abstrata
abstract class Produto {

	private $id;
	private $nome;
	private $preco; // privado só pode ser visto na classe
	// protected $preco; // protected pode ser visto pela classe relacionadas
	private $descricao;
	private $categoria;
	private $usado;

	function __construct($nome, $preco, $descricao, Categoria $categoria, $usado) {
		$this->nome = $nome;
		$this->preco = $preco;
		$this->descricao = $descricao;
		$this->categoria = $categoria;
		$this->usado = $usado;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getPreco() {
		return $this->preco;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function getCategoria() {
		return $this->categoria;
	}

	public function isUsado() {
		return $this->usado;
	}

	public function setUsado($usado) {
		$this->usado = $usado;
	}

	public function precoComDesconto($valor = 0.1) {

		if ($valor > 0 && $valor <= 0.5) {
			$this->preco -= $this->preco * $valor;
		}

		return $this->preco;
	}

	public function temIsbn() {
		return $this instanceof Livro;
	}

	public function temTaxaImpressao() {
		return $this instanceof LivroFisico;
	}

	public function temWaterMarker() {
		// retorna a instancia de Ebook
		return $this instanceof Ebook;
	}

	// quando um metodo é abstrato obrigatoriamente que suas filhas implemente esse método nele
	abstract function atualizaBaseadoEm($params);

	public function calculaImposto() {
		return $this->getPreco() * 0.195;
	}

	function __toString() {
		return $this->nome.": R$ ".$this->preco;
	}
}

?>