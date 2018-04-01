<?php

// chamando metodo estatico 'get' de dentro de uma classe 'Route' que já é do Laravel
// primeiro parametro passado é a uri (nesse caso '/')
Route::get('/', function() {
	return '<h1>Listagem de Produtos<h1>'; // podemos retornar qualquer HTML válido
});

Route::get('/outra', function() {
  return '<h1>Outra lógica com Laravel</h1';
});
