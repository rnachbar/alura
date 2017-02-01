<?php
// definição de um produto
// produto é tudo que tem um id, preço, descrição. Todos os atributos passados como parametro para a função insere produto

// criando a classe produto
// Produto (noma da classe), public (definição de visibilidade - pública), $id (nome do atributo)
class Produto {
	// atributos da classe produto
	// public $id;  // atributo de uma classe. Atibuto publico pois queremos acessa-lo de qualquer lugar do nosso programa. Propriedade id
	// public $nome; // $nome não é uma variável, é uma propriedade
	// public $preco;
	// public $descricao;
	// Objeto categoria. O atibuto categoria faz referencia a classe categoria
	// agora uma instância de Produto guardará sua propriedade $categoria uma instância de Categoria
	// public $categoria; // guarda a instancia categoria e atraves dessa instancia chama se id ou seu nome. Objeto dentro de um objeto.
	// public $usado;

	//metodo - um comportamento da classe, tudo que for comportamento da classe ficara dentro dela
	// passando valor padrão - $valor = 0.1
	// public function precoComDesconto($valor = 0.1) { 
	// 	if ($valor > 0 && $valor <= 0.5) {
	// 		return $this->preco - ($this->preco * $valor);// $this faz referencia ao proprio objeto, acessa ele mesmo, produto faz referencia a ele mesmo, $this atributo interno da classe
	// 	}
	// }

	// preco é privado, só funciona dentro da classe. Criamos a função getPreco para passar o objeto preço para outros lugares
	// public function getPreco() {
	// 	return $this->preco;
	// }

	// public function setPreco($preco) {
	// 	if ($preco > 0) {
	// 		$this->preco = $preco;
	// 	}	
	// }

	private $id;
    private $nome;
    private $preco; // atributo private só funciona dentro da propria classe
    private $descricao;
    private $categoria;
    private $usado;

    // todo objeto em PHP tem o metodo __construct
    // executado toda vez que criamos um objeto (no nosso caso um produto - produto = objeto)
    function __construct($nome, $preco, $descricao, Categoria $categoria, $usado) {
        // isso torna o nome e preco do produto como obrigatorios, ao criar temos que passa los como parametro
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->categoria = $categoria;
        $this->usado = $usado;
    }

	public function precoComDesconto($valor = 0.1) {
        if ($valor > 0 && $valor <= 0.5) {
            $this->preco - $this->preco * $valor;
        }
        return $this->preco;
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

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function isUsado() {
        return $this->usado;
    }

    public function setUsado($usado) {
        $this->usado = $usado;
    }

    // chamado toda vez que queremos imprimir um objeto, imprimimos um objeto em forma de string
    function __toString() {
        return $this->nome . ": R$ " . $this->preco;
    }

    // chamado quando um objeto é destruido
    function __destruct() {
        // echo "Produto destruido";
    }
} 

?>