<?php

require_once 'global.php';

try {
    /* Todo código que estiver dentro do try, caso ocorra algum erro com esse código automaticamente ele cai no catch */
    $categoria = new Categoria();
    $lista = $categoria->listar();
} catch(Exception $e) {
    /* O catch, por padrão, recebe uma variável do tipo Exception */
    /* Exception é uma classe de erro do PHP */
    Erro::trataErro($e);
}

/*
// Para Debugar
echo '<pre>';
print_r($variavel);
echo '<pre>';
*/

require_once 'cabecalho.php' ?>

<div class="row">
    <div class="col-md-12">
        <h2>Categorias</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="categorias-criar.php" class="btn btn-info btn-block">Crair Nova Categoria</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th class="acao">Editar</th>
                    <th class="acao">Excluir</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($lista as $linha): ?>
                    <tr>
                        <td><a href="/categorias-detalhe.php" class="btn btn-link"><?= $linha['id'] ?></a></td>
                        <td><a href="/categorias-detalhe.php" class="btn btn-link"><?= $linha['nome'] ?></a></td>
                        <td><a href="/categorias-editar.php?id=<?= $linha['id'] ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="/categorias-excluir-post.php?id=<?= $linha['id'] ?>" class="btn btn-danger">Excluir</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once 'rodape.php' ?>
