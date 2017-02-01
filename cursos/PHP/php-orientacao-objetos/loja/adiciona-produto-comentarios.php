<?php 
require_once("cabecalho.php"); // require_once para inclir o arquivo apenas uma vez evitando que ele seja chamado nessa página mais de uma vez, evitando que de erro.
require_once("banco-produto.php");
require_once("logica-usuario.php");
require_once("class/Produto.php"); // incluindo a classe Produto
require_once("class/Categoria.php"); // incluindo a classe Categoria

verificaUsuario();

$categoria = new Categoria(); // instanciamos a categoria
$categoria->id = $_POST['categoria_id'];

// com o Produto declarado, devemos instancia-lo
$produto = new Produto(); // instanciamos o produto
// definindo os atributos. Obejeto
$produto->nome = $_POST['nome']; // atributo nome (-> Object Operator)
$produto->preco = $_POST['preco']; // atributo preco
$produto->descricao = $_POST['descricao']; // atributo descricao
// atributo usado
if(array_key_exists('usado', $_POST)) {
	$produto->usado = "true";
} else {
	$produto->usado = "false";
}
// atributo categoria
$produto->categoria = $categoria;

// dessa forma passamos apenas o $produto para a função de inserir. Apenas o produto, se existir mais variáveis, continuamos passando somente o objeto produto
if(insereProduto($conexao, $produto)) { ?>
	<p class="text-success">O produto <?= $produto->nome ?>, <?= $produto->preco ?> foi adicionado.</p>
<?php  } else {
	$msg = mysqli_error($conexao); ?>
	<p class="text-danger">O produto <?= $produto->nome ?> não foi adicionado: <?= $msg?></p>
<?php } ?>

<?php include("rodape.php"); ?>