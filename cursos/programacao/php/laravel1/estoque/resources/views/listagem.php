<!DOCTYPE html>
<html>
<head>
	<?php /* bootstrap já incorporado do laravel */ ?>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<title>Controle de Estoque</title>
</head>
<body>

	<h1>Listagem de Produtos</h1>

	<table class="table">
		<?php foreach ($produtos as $p) : ?>
			<tr>
				<td><?= $p->nome ?></td>
				<td><?= $p->valor ?></td>
				<td><?= $p->descricao ?></td>
				<td><?= $p->quantidade ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>