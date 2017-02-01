<?php 
require_once ("header.php"); // require_once para inclir o arquivo apenas uma vez evitando que ele seja chamado nessa página mais de uma vez, evitando que de erro.
require_once ("banco-produto.php"); 
require_once ("logica-usuario.php");

$id = $_POST['id'];
removeProduto($conexao, $id);
$_SESSION["success"] = "Produto removido com sucesso.";
header("Location: produto-lista.php");
die();

require_once ("footer.php");