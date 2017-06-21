<?php

use App\Categoria;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class CategoriaTest extends TestCase
{

    use DatabaseTransactions;

    public function setUp()
    {
        parent::setUp();

        factory(Categoria::class)->create([
            'id' => 45,
            'categoria' => 'Horror'
        ]);
    }

    /** @test */
    function get_categoria()
    {
        $response = $this->call('GET', '/api/v1/categoria');

        $this->assertEquals(200, $response->status());
    }

    /** @test */
    function post_categoria()
    {
        $this->call('POST', 'api/v1/categoria', [ 'categoria' => 'Fantasia' ]);

        $this->seeInDatabase('categorias', ['categoria' => 'Fantasia']);
    }

    /** @test */
    function put_categoria()
    {
        $this->call('PUT', 'api/v1/categoria/45', ['categoria' => 'Ficção Científica']);

        $this->seeInDatabase('categorias', ['categoria' => 'Ficção Científica']);
    }

    /** @test */
    function delete_autores()
    {
        $this->call('DELETE', 'api/v1/categoria/45');

        $this->notSeeInDatabase('categorias', ['categoria' => 'Fantasia']);
    }
}
