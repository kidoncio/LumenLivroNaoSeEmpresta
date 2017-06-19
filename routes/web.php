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

$app->get('/', function () use ($app) {
    return view('index');
});

$app->get('/partials/{resource}/{action}', function ($resource, $action) {
    return view("/partials/$resource/$action");
});

/**
 * Routes for resource autor
 */
$app->get('api/v1/autor', 'AutorsController@all');
$app->get('api/v1/autor/{id}', 'AutorsController@get');
$app->post('api/v1/autor', 'AutorsController@add');
$app->put('api/v1/autor/{id}', 'AutorsController@put');
$app->delete('api/v1/autor/{id}', 'AutorsController@remove');

/**
 * Routes for resource livro
 */
$app->get('api/v1/livro', 'LivrosController@all');
$app->get('api/v1/livro/{id}', 'LivrosController@get');
$app->post('api/v1/livro', 'LivrosController@add');
$app->put('api/v1/livro/{id}', 'LivrosController@put');
$app->delete('api/v1/livro/{id}', 'LivrosController@remove');

/**
 * Routes for resource categoria
 */
$app->get('api/v1/categoria', 'CategoriasController@all');
$app->get('api/v1/categoria/{id}', 'CategoriasController@get');
$app->post('api/v1/categoria', 'CategoriasController@add');
$app->put('api/v1/categoria/{id}', 'CategoriasController@put');
$app->delete('api/v1/categoria/{id}', 'CategoriasController@remove');

/**
 * Routes for resource emprestado
 */
$app->get('emprestado', 'EmprestadosController@all');
$app->get('emprestado/{id}', 'EmprestadosController@get');
$app->post('emprestado', 'EmprestadosController@add');
$app->put('emprestado/{id}', 'EmprestadosController@put');
$app->delete('emprestado/{id}', 'EmprestadosController@remove');
