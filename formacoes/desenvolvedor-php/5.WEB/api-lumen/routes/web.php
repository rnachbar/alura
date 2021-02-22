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
$router->group(['prefix' => 'api'], function () use ($router) {
    /**
     * Definindo agrupamento de rotas de series da aplicação.
     */
    $router->group(['prefix' => 'series'], function () use ($router) {
        $router->post('', 'SeriesController@store');
        $router->get('', 'SeriesController@index');
        $router->get('{id}', 'SeriesController@show');
        $router->put('{id}', 'SeriesController@update');
        $router->delete('{id}', 'SeriesController@destroy');

        /**
         * sub-recurso de series.
         * Um episodio sempre vai pertencer a uma série, então usamos isso como um sub-recurso.
         */
        $router->get('{serieId}/episodios', 'EpisodiosController@buscaPorSerie');
    });

    /**
     * Definindo agrupamento de rotas de episodios da aplicação.
     */
    $router->group(['prefix' => 'episodios'], function () use ($router) {
        $router->post('', 'EpisodiosController@store');
        $router->get('', 'EpisodiosController@index');
        $router->get('{id}', 'EpisodiosController@show');
        $router->put('{id}', 'EpisodiosController@update');
        $router->delete('{id}', 'EpisodiosController@destroy');
    });
});
