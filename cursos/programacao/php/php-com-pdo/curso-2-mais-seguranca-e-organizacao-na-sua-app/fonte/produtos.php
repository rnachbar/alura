<?php
require_once 'global.php';

try {
    $lista = Produto::listar();
} catch(Exception $e) {
    Erro::trataErro($e);
} 

require_once 'cabecalho.php';  ?>

<div class="row">
    <div class="col-md-12">
        <h2>Produtos</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="produtos-criar.php" class="btn btn-info btn-block">Crair Novo Produto</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if (count($lista) > 0) : ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Categoria</th>
                        <th class="acao">Editar</th>
                        <th class="acao">Excluir</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($lista as $linha) : ?>
                        <tr>
                            <td><?= $linha['id'] ?></td>
                            <td><?= $linha['nome'] ?></td>
                            <td>R$ <?= $linha['preco'] ?></td>
                            <td><?= $linha['quantidade'] ?></td>
                            <td><?= $linha['categoria_nome'] ?></td>
                            <td><a href="/produtos-editar.php?id=<?= $linha['id'] ?>" class="btn btn-info">Editar</a></td>
                            <td><a href="/produtos-excluir-post.php?id=<?= $linha['id'] ?>" class="btn btn-danger">Excluir</a></td>
                        </tr>
                    <?php endforeach // Não precisamos usar o poto e vírgula (;) aqui pois ao abrir e fechar as tags PHP, o sistema já entende que é o fim da programação ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>Nenhum produto cadastrado</p>
        <?php endif; ?>
    </div>
</div>

<?php require_once 'rodape.php' ?>
