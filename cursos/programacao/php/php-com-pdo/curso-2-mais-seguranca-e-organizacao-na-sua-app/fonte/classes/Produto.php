<?php /* Classe de Produtos */

class Produto { /* Nome da classe sempre tendo o mesmo nome do arquivo para o AUTOLOADER funcionar corretamente e por questão de padronização */

	public $id;
	public $nome;
	public $preco;
	public $quantidade;
	public $categoria_id;

	public function __construct($id = false) {
        if ($id) {
            $this->id = $id;
            $this->carregar();
        }
    }

	public function carregar() {
        /* Tratando SLQ Injection */
        $query = "SELECT nome, preco, quantidade, categoria_id FROM produtos WHERE id = :id";

        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);

        $stmt->bindValue(':id', $this->id);
        $stmt->execute();

        $linha = $stmt->fetch();

        $this->nome = $linha['nome'];
        $this->preco = $linha['preco'];
        $this->quantidade = $linha['quantidade'];
        $this->categoria_id = $linha['categoria_id'];
    }

	/* O método estático é o método que não se relaciona com nada mais da nossa classe/objeto. Ele não faz referencia a outros métodos/objetos ou atributos dos objetos */
	public static function listar() {
		$query = "SELECT p.id, p.nome, preco, quantidade, categoria_id, c.nome as categoria_nome
			FROM produtos p
			INNER JOIN categorias c ON p.categoria_id = c.id
			ORDER BY p.nome";

		$conexao = Conexao::pegarConexao();
		$resultado = $conexao->query($query);

		$lista = $resultado->fetchAll();
		return $lista;
	}

    public static function listarPorCategoria($categoria_id) {
        $query = "SELECT id, nome, preco, quantidade FROM produtos WHERE categoria_id = :categoria_id";

        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);

        $stmt = bindValue(':categoria_id', $categoria_id);
        $stmt = execute();

        return $stmt->fetchAll();
    }

	public function inserir() {
		/* Forma insegura de inserir dados no banco de dados pois não estamos fazendo nenhum tratamento do que o usuário colocou no formulário. Ele preenche o formulário, que é submetido, e nós inserimos qualquer valor que o usuário tenha preenchido. */
		// $query = "INSERT INTO produtos (nome, preco, quantidade, categoria_id) VALUES ('" . $this->nome . "', " . $this->preco . ", " . $this->quantidade . ", " . $this->categoria_id . ")";
		// $conexao = Conexao::pegarConexao();
  		// $conexao->exec($query);

		/* Tratando SLQ Injection */
		$query = "INSERT INTO produtos (nome, preco, quantidade, categoria_id) VALUES (:nome, :preco, :quantidade, :categoria_id)";

		/* O método PREPARE também retorna um PHPStatement, mas mas retorna um PHPStatement preparado para execução, quando o método QUERY retorna o PHPStatement já xecutado */
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query); // stmt é a abreviação de statement

        /* Com a utilização do bindValue, já são feitas validações previnindo o SQL Injection */
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->bindValue(':quantidade', $this->quantidade);
        $stmt->bindValue(':categoria_id', $this->categoria_id);
        
        $stmt->execute();
	}

	public function atualizar() {
        $query = "UPDATE produtos set nome = :nome, preco = :preco, quantidade = :quantidade, categoria_id = :categoria_id WHERE id = :id";

        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);

        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->bindValue(':quantidade', $this->quantidade);
        $stmt->bindValue(':categoria_id', $this->categoria_id);
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();
    }

    public function excluir() {
        $query = "DELETE FROM produtos WHERE id = :id";
        
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);

        $stmt->bindValue(':id', $this->id);
        $stmt->execute();
    }

}