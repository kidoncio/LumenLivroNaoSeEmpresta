<?php

use App\Autor;
use App\Categoria;
use App\Livro;
use App\Emprestado;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class EmprestarTest extends TestCase
{

    use DatabaseTransactions;

    public function setUp()
    {
        parent::setUp();

        factory(Autor::class)->create([
            'id' => 55,
            'nome' => 'J. R. R. Tolkien'
        ]);

        factory(Categoria::class)->create([
            'id' => 55,
            'categoria' => 'Fantasia'
        ]);

        factory(Livro::class)->create([
            'id' => 55,
            'titulo' => 'O Hobbit',
            'disponivel' => 1,
            'autor_id' => 55,
            'categoria_id' => 55
        ]);

        factory(Livro::class)->create([
            'id' => 56,
            'titulo' => 'A Sociedade do Anel',
            'disponivel' => 1,
            'autor_id' => 55,
            'categoria_id' => 55
        ]);

        factory(Emprestado::class)->create([
           'id' => 55,
            'nome' => 'Lucas Nascimento',
            'livro_id' => 55
        ]);
    }

    /** @test */
    function get_emprestimo()
    {
        $response = $this->call('GET', '/api/v1/livro');

        $this->assertEquals(200, $response->status());
    }

    /** @test */
    function post_emprestimo()
    {
        $this->call('POST', 'api/v1/livro',
            [ 'nome' => 'Ian McKellen', 'livro_id' => 56]);

        $this->seeInDatabase('emprestados', ['nome' => 'Lucas Nascimento']);
    }

    /** @test */
    function put_emprestimo()
    {
        $response = $this->call('PUT', 'api/v1/emprestado/55',
            ['nome' => 'João da Silva', 'livro_id' => 55]);

        $this->assertEquals(200, $response->getStatusCode());

        $this->seeInDatabase('emprestados', ['nome' => 'João da Silva']);
    }

    /** @test */
    function delete_emprestimo()
    {
        $this->call('DELETE', 'api/v1/emprestado/55');

        $this->notSeeInDatabase('emprestados', ['nome' => 'Lucas Nascimento']);
    }
}
