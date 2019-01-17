<?php 

require_once 'classes/Categoria.php';

$id = $_GET['id'];
$categoria = new Categoria($id);
$categoria->excluir();

header('Location: categorias.php');