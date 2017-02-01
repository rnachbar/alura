<?php
require_once("cabecalho.php"); // require_once para inclir o arquivo apenas uma vez evitando que ele seja chamado nessa página mais de uma vez, evitando que de erro.
require_once("banco-produto.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");

$categoria = new Categoria();
$categoria->id = $_POST['categoria_id'];

$produto = new Produto(); // instanciando um novo produto
$produto->id = $_POST['id'];
$produto->nome = $_POST['nome'];
$produto->preco = $_POST['preco'];
$produto->descricao = $_POST['descricao'];

if(array_key_exists('usado', $_POST)) {
	$produto->usado = "true";
} else {
	$produto->usado = "false";
}

$produto->categoria = $categoria;

if(alteraProduto($conexao, $produto)) { ?>
	<p class="text-success">O produto <?= $produto->nome ?>, <?= $produto->preco ?> foi alterado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $produto->nome ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>