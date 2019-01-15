<?php

require_once 'classes/Categoria.php';

$categoria = new Categoria();

$nome = $_POST['nome'];
$categoria->nome = $nome;
$categoria->inserir();

/* Redirecionando usuário */
header('Location: categorias.php');
