<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/**
 * @var \Laravel\Lumen\Routing\Router $router
 */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

/**
 * Criando grupo de rotas no Lumen com a função group.
 */
$router->group(['prefix' => '/api'], function () use ($router) {
    /**
     * Definindo rotas da aplicação.
     */
    $router->get('/series', 'SeriesController@index');
});
