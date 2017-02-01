<?php 
require_once ("header.php"); // require_once para inclir o arquivo apenas uma vez evitando que ele seja chamado nessa página mais de uma vez, evitando que de erro.
require_once ("banco-produto.php"); 

$id = $_POST['id'];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST['categoria_id'];

if(array_key_exists('usado', $_POST)){
	$usado = "true";
} else {
	$usado = "false";
}

if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)){ ?>
	<p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> foi alterado!</p>
<?php } else {
	$msg = mysqli_error($conexao); ?>
	<p class="text-danger">O produto <?= $nome; ?> não foi alterado: <?= $msg ?></p>
<?php }

include ("footer.php");