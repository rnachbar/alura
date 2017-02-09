<?php
require_once("conecta.php");
require_once("class/Produto.php"); // incluir classe
require_once("class/Categoria.php"); // incluir classe

function listaProdutos($conexao) {

	$produtos = array();
	$resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome 
		from produtos as p join categorias as c on c.id=p.categoria_id");

	while($produto_array = mysqli_fetch_assoc($resultado)) {

		$categoria = new Categoria();
		// atribuindo valor
		$categoria->nome = $produto_array['categoria_nome'];

		// instanciar produto
		$produto = new Produto();

		// instanciar todos atributos da nossa classe produto
		// utilizando arry para instanciar o nosso produto
		$produto->id = $produto_array['id'];
		$produto->nome = $produto_array['nome'];
		$produto->descricao = $produto_array['descricao'];
		$produto->categoria = $categoria;
		$produto->setPreco($produto_array['preco']);
		$produto->usado = $produto_array['usado'];

		array_push($produtos, $produto);
	}

	// retornando o produto que é uma instancia da classe
	return $produtos;
}

// passando o objeto produto
// a função nao sabe que ela é obrigada a receber um tipo Produto, então falamos que esse $produto que ela recebe por parâmetro é uma instância da classe Produto. Devemos deixar claro que o segundo parâmetro é do tipo Produto
function insereProduto($conexao, Produto $produto) {
	// inserindo nos campos os valores do objeto produto
	$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) 
		values ('{$produto->nome}', {$produto->preco}, '{$produto->descricao}', 
			{$produto->categoria->id}, {$produto->usado})";

	return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, Produto $produto) {

	$query = "update produtos set nome = '{$produto->nome}', 
		preco = {$produto->preco}, descricao = '{$produto->descricao}', 
			categoria_id= {$produto->categoria->id}, usado = {$produto->usado} 
				where id = '{$produto->id}'";

	return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {

	$query = "select * from produtos where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	$produto_buscado = mysqli_fetch_assoc($resultado);

	$categoria = new Categoria();
	$categoria->id = $produto_buscado['categoria_id'];

	$produto = new Produto();
	$produto->id = $produto_buscado['id'];
	$produto->nome = $produto_buscado['nome'];
	$produto->descricao = $produto_buscado['descricao'];
	$produto->categoria = $categoria;
	$produto->preco = $produto_buscado['preco'];
	$produto->usado = $produto_buscado['usado'];

	return $produto;
}

function removeProduto($conexao, $id) {

	$query = "delete from produtos where id = {$id}";

	return mysqli_query($conexao, $query);
}