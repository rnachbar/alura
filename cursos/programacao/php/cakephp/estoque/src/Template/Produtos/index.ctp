<table class="table"> <!-- classe padrão do cakephp -->
	<!-- cabeçalho -->
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>Descrição</th>
		</tr>
	</thead>
	<!-- corpo -->
	<tbody>
		<?php foreach ($produtos as $produto) { ?>
			<tr>
				<td><?= $produto['id'] ?></td>
				<td><?= $produto['nome'] ?></td>
				<td><?= $produto['preco'] ?></td>
				<td><?= $produto['descricao'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>