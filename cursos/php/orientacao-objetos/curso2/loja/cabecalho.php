<?php
// autoloading - criar uma função simples que é executada automaticamente no caso de instanciarmos um objeto que não tenha sido defenida
function carregaClasse($nomeDaClasse) {
	// essa função irá carregar todas as classes dentro da pasta class, automaticamnete todas as classes que o php não conseguir carregar
	// carregamos as classes automaticamente, sem necessidade de require em diversos arquivos. Como o nome da classe é igual o nome do arquivo, o php envia o nome automaticamente
	require_once("class/". $nomeDaClasse . ".php");
}

// registramos a função a ser utilizada
spl_autoload_register("carregaClasse");

error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); 
require_once("conecta.php"); ?>

<html>
<head>
	<meta charset="utf-8">
	<title>Minha Loja</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/loja.css" rel="stylesheet">
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Minha Loja</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="produto-formulario.php">Adiciona Produto</a></li>
					<li><a href="produto-lista.php">Produtos</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="principal">
			<?php  mostraAlerta("success"); ?>
			<?php mostraAlerta("danger"); ?>