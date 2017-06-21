<?php

use App\Livro;
use App\Autor;
use App\Categoria;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class LivroTest extends TestCase
{

    use DatabaseTransactions;

    public function setUp()
    {
        parent::setUp();

        factory(Autor::class)->create([
            'id' => 50,
            'nome' => 'J. R. R. Tolkien'
        ]);

        factory(Categoria::class)->create([
            'id' => 50,
            'categoria' => 'Fantasia'
        ]);

        factory(Livro::class)->create([
            'id' => 50,
            'titulo' => 'O Hobbit',
            'disponivel' => 1,
            'autor_id' => 50,
            'categoria_id' => 50
        ]);
    }

    /** @test */
    function get_livro()
    {
        $response = $this->call('GET', '/api/v1/livro');

        $this->assertEquals(200, $response->status());
    }

    /** @test */
    function post_livro()
    {
        $this->call('POST', 'api/v1/livro',
            [ 'titulo' => 'Contos Inacabados', 'disponivel' => 1,
                'autor_id' => 50, 'categoria_id' => 50]);

        $this->seeInDatabase('livros', ['titulo' => 'Contos Inacabados']);
    }

    /** @test */
    function put_livros()
    {
        $response = $this->call('PUT', 'api/v1/livro/50',
            ['titulo' => 'O Silmarillion', 'disponivel' => 0,
                'autor_id' => 50, 'categoria_id' => 50]);

        $this->assertEquals(200, $response->getStatusCode());
    }

    /** @test */
    function delete_livros()
    {

        $this->call('DELETE', 'api/v1/livro/50');

        $this->notSeeInDatabase('livros', ['titulo' => 'O Silmarillion']);
    }
}
