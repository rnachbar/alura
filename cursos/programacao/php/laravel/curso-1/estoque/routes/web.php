<?php

// Chamando metodo estatico 'get' dentro da classe 'Route', que é do Laravel
Route::get('/', function() { /* primeiro parametro passado é a uri, segundo a função */
	return '<h1>Listagem de Produtos<h1>';
});

// Para acessar controller passar segundo parametro como NomeController@metodo
Route::get('/produtos', 'ProdutoController@lista');

Route::get('/outra', function() {
  return '<h1>Lógica com Laravel</h1>'; /* pode retornar qualquer HTML válido */
});
