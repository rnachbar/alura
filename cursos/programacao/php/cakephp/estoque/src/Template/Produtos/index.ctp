<table class="table"> <!-- classe padrão do cakephp -->
	<!-- cabeçalho -->
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>Preço com Desconto</th>
			<th>Descrição</th>
			<th>Ações</th>
		</tr>
	</thead>
	<!-- corpo -->
	<tbody>
		<?php foreach ($produtos as $produto) { ?>
			<tr>
				<td><?= $produto['id']; ?></td>
				<td><?= $produto['nome']; ?></td>
				<td><?= $this->Money->format($produto['preco']); ?></td>
				<td><?= $this->Money->format($produto->calculaDesconto()); ?></td>
				<td><?= $produto['descricao']; ?></td>
				<!-- passando parametro pelo link, passando o id -->
				<td><?= $this->Html->Link('Editar', ['controller' => 'produtos', 'action' => 'editar', $produto['id']]) ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<?php
	// Helper de HTML. Criando um link (nome do texto, array[controller, ação])
	echo $this->Html->Link('Novo Produto', ['controller' => 'produtos', 'action' => 'novo']);
?>
