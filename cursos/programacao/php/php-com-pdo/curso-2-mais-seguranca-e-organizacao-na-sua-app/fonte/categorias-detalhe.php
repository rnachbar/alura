<?php 
require_once 'global.php';

try {
    $id = $_GET['id'];
    $categoria = new Categoria($id);
    $categoria->carregarProdutos();
    $listaProdutos = $categoria->produtos;
} catch (Exception $e) {
    Erro::trataErro($e);
}

require_once 'cabecalho.php'; ?>

<div class="row">
    <div class="col-md-12">
        <h2>Detalhe da Categoria</h2>
    </div>
</div>

<dl>
    <dt>ID</dt>
    <dd><?= $categoria->id ?></dd>
    <dt>Nome</dt>
    <dd><?= $categoria->nome ?></dd>
    <dt>Produtos</dt>
    <dd>
        <ul>
            <?php foreach ($listaProdutos as $linha) : ?>
                <li><a href="/produtos-editar.php?<?= $linha['id'] ?>"><?= $linha['nome'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </dd>
</dl>

<?php require_once 'rodape.php' ?>
