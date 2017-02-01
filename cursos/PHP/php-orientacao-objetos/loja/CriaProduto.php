<?php 
// testear a classe produto

// tudo que está externo, que não esta no nosso arquivo, temos que importar
require_once ("class/Produto.php");

// precisamos instanciar a classe produto para criar um produto
$livro = new Produto(); // estamos instanciando a variável livro. Agora livro é uma instância de um produto, onde $livro tem todas as propriedades e segue todas as regras definidas na classe produto (o $livro tem um $id, $nome, $preco, $descricao, $categoria_id, $usado)

// acessando os atributos na classe produto.
$livro->nome = "Livro de PHP e OO"; // atributo nome. Livro é um objeto que criamos

var_dump($livro); // imprimindo a estrutura do objeto $livro, que é uma instância de produto.

