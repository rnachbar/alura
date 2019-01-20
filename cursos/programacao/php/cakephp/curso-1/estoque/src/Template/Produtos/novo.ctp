<?php
	// criando formulário com Helper, create(o que quer criar, array[ação]).
	// Usar 'url' para versões novas do cakephp [url => [ação]] (https://github.com/cakephp/cakephp/issues/7885)
	echo $this->Form->create($produto, ['url' => ['action' => 'salva']]);
	echo $this->Form->input('id'); // como é uma chave primária o cake não exibe o campo, necessário para editar o formulário
	echo $this->Form->input('nome');
	echo $this->Form->input('preco');
	echo $this->Form->input('descricao');
	echo $this->Form->button('Salvar');
	echo $this->Form->end();
?>