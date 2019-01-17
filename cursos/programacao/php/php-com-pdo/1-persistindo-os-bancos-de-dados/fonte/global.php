<?php

require_once 'classes/config.php';

/* Registra a função na pilha de __autoload da SPL. Se a pilha ainda não estiver ativa, ela será ativada. Se nenhum parâmetro for passado, a implementação padrão spl_autoload será registrada. Quando o registro for bem sucedido, o retono é true; em caso de falha, será retornado false. */
spl_autoload_register('carregarClasse');

function carregarClasse($nomeClasse) {
	if (file_exists('classes/' . $nomeClasse . '.php')) {
		require_once 'classes/' . $nomeClasse . '.php';
	}
}
