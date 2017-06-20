<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

/**
 * Factory definition for model App\Autor.
 */
$factory->define(App\Autor::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Livro.
 */
$factory->define(App\Livro::class, function ($faker) {
    return [
        'livro_id' => $faker->fillable,key,
    ];
});

/**
 * Factory definition for model App\Categoria.
 */
$factory->define(App\Categoria::class, function ($faker) {
    return [
        'categoria_id' => $faker->fillable,key,
        'nome' => $faker->fillable,
    ];
});

/**
 * Factory definition for model App\Autor.
 */
$factory->define(App\Autor::class, function ($faker) {
    return [
        'autor_id' => $faker->fillable,key,
    ];
});

/**
 * Factory definition for model App\Autor.
 */
$factory->define(App\Autor::class, function ($faker) {
    return [
        'autor_id' => $faker->fillable,key,
    ];
});

/**
 * Factory definition for model App\Autor.
 */
$factory->define(App\Autor::class, function ($faker) {
    return [
        'autor_id' => $faker->fillable,key,
    ];
});

/**
 * Factory definition for model App\Autor.
 */
$factory->define(App\Autor::class, function ($faker) {
    return [
        'autor_id' => $faker->fillable,key,
    ];
});

/**
 * Factory definition for model App\Livro.
 */
$factory->define(App\Livro::class, function ($faker) {
    return [
        'livro_id' => $faker->fillable,key,
        'categoria_id' => $faker->fillable,key,
        'autor_id' => $faker->fillable,key,
        'autor_id' => $faker->key,
        'categorium_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Livro.
 */
$factory->define(App\Livro::class, function ($faker) {
    return [
        'livro_id' => $faker->fillable,key,
        'categoria_id' => $faker->fillable,key,
        'autor_id' => $faker->fillable,key,
        'autor_id' => $faker->key,
        'categorium_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Emprestado.
 */
$factory->define(App\Emprestado::class, function ($faker) {
    return [
        'livro_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Livro.
 */
$factory->define(App\Livro::class, function ($faker) {
    return [
        'livro_id' => $faker->fillable,key,
        'autor_id' => $faker->key,
        'categorium_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Categoria.
 */
$factory->define(App\Categoria::class, function ($faker) {
    return [
        // Fields here
    ];
});
