<?php

require "class/produto.php";

$produto = new Produto();
$produto->setPreco(59.9);

$outroProduto = new Produto();
$outroProduto->setPreco(59.8);

// == retorna true se os atributos dos objetos forem iguais
// === compara instancias dos objetos, instancia $produto deferente de $outroProduto
if ($produto == $outroProduto) {
	echo "IGUAIS";
} else {
	echo "DIFERENTES";
}