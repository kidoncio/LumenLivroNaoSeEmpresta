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
    return $app->version();
});

/**
 * Routes for resource autor
 */
$app->get('autor', 'AutorsController@all');
$app->get('autor/{id}', 'AutorsController@get');
$app->post('autor', 'AutorsController@add');
$app->put('autor/{id}', 'AutorsController@put');
$app->delete('autor/{id}', 'AutorsController@remove');

/**
 * Routes for resource livro
 */
$app->get('livro', 'LivrosController@all');
$app->get('livro/{id}', 'LivrosController@get');
$app->post('livro', 'LivrosController@add');
$app->put('livro/{id}', 'LivrosController@put');
$app->delete('livro/{id}', 'LivrosController@remove');

/**
 * Routes for resource categoria
 */
$app->get('categoria', 'CategoriasController@all');
$app->get('categoria/{id}', 'CategoriasController@get');
$app->post('categoria', 'CategoriasController@add');
$app->put('categoria/{id}', 'CategoriasController@put');
$app->delete('categoria/{id}', 'CategoriasController@remove');

/**
 * Routes for resource autor
 */
$app->get('autor', 'AutorsController@all');
$app->get('autor/{id}', 'AutorsController@get');
$app->post('autor', 'AutorsController@add');
$app->put('autor/{id}', 'AutorsController@put');
$app->delete('autor/{id}', 'AutorsController@remove');

/**
 * Routes for resource autor
 */
$app->get('autor', 'AutorsController@all');
$app->get('autor/{id}', 'AutorsController@get');
$app->post('autor', 'AutorsController@add');
$app->put('autor/{id}', 'AutorsController@put');
$app->delete('autor/{id}', 'AutorsController@remove');

/**
 * Routes for resource autor
 */
$app->get('autor', 'AutorsController@all');
$app->get('autor/{id}', 'AutorsController@get');
$app->post('autor', 'AutorsController@add');
$app->put('autor/{id}', 'AutorsController@put');
$app->delete('autor/{id}', 'AutorsController@remove');

/**
 * Routes for resource autor
 */
$app->get('autor', 'AutorsController@all');
$app->get('autor/{id}', 'AutorsController@get');
$app->post('autor', 'AutorsController@add');
$app->put('autor/{id}', 'AutorsController@put');
$app->delete('autor/{id}', 'AutorsController@remove');

/**
 * Routes for resource livro
 */
$app->get('livro', 'LivrosController@all');
$app->get('livro/{id}', 'LivrosController@get');
$app->post('livro', 'LivrosController@add');
$app->put('livro/{id}', 'LivrosController@put');
$app->delete('livro/{id}', 'LivrosController@remove');

/**
 * Routes for resource livro
 */
$app->get('livro', 'LivrosController@all');
$app->get('livro/{id}', 'LivrosController@get');
$app->post('livro', 'LivrosController@add');
$app->put('livro/{id}', 'LivrosController@put');
$app->delete('livro/{id}', 'LivrosController@remove');

/**
 * Routes for resource emprestado
 */
$app->get('emprestado', 'EmprestadosController@all');
$app->get('emprestado/{id}', 'EmprestadosController@get');
$app->post('emprestado', 'EmprestadosController@add');
$app->put('emprestado/{id}', 'EmprestadosController@put');
$app->delete('emprestado/{id}', 'EmprestadosController@remove');

/**
 * Routes for resource livro
 */
$app->get('livro', 'LivrosController@all');
$app->get('livro/{id}', 'LivrosController@get');
$app->post('livro', 'LivrosController@add');
$app->put('livro/{id}', 'LivrosController@put');
$app->delete('livro/{id}', 'LivrosController@remove');
