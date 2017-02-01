<?php 
require_once ("banco-usuario.php"); // require_once para inclir o arquivo apenas uma vez evitando que ele seja chamado nessa página mais de uma vez, evitando que de erro.
require_once ("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

if ($usuario == NULL) {
	$_SESSION["danger"] = "Usuário ou senha inválido.";
	header("Location: index.php");
} else {
	$_SESSION["success"] = "Usuário logado com sucesso.";
	logaUsuario($usuario["email"]);
	header("Location: index.php");
}


