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

/**
 * Factory definition for model App\Autor.
 */
$factory->define(App\Autor::class, function ($faker) {
    return [
        'id' => $faker->unique()->randomDigit,
        'nome' => $faker->name
    ];
});

/**
 * Factory definition for model App\Categoria.
 */
$factory->define(App\Categoria::class, function ($faker) {
    return [
        'id' => $faker->unique()->randomDigit,
        'categoria' => $faker->sentence,
    ];
});

/**
 * Factory definition for model App\Livro.
 */
$factory->define(App\Livro::class, function ($faker) {
    return [
        'id' => $faker->unique()->randomDigit,
        'titulo' => $faker->sentence,
        'autor_id' => $faker->unique()->randomDigit,
        'categoria_id' => $faker->unique()->randomDigit,
    ];
});

/**
 * Factory definition for model App\Emprestado.
 */

$factory->define(App\Emprestado::class, function ($faker) {
   return [
       'id' => $faker->unique()->randomDigit,
       'nome' => $faker->name,
       'livro_id' => $faker->unique()->randomDigit,
   ];
});
