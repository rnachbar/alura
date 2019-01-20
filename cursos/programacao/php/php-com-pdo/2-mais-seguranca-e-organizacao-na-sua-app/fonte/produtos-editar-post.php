<?php 

require_once 'global.php';

try {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $categoria_id = $_POST['categoria_id'];

    $protudo = new Produto($id);
    $protudo->nome = $nome;
    $protudo->preco = $preco;
    $protudo->quantidade = $quantidade;
    $protudo->categoria_id = $categoria_id;

    $protudo->atualizar();

    header('Location: produtos.php');
} catch (Exception $e) {
    Erro::trataErro($e);
}

