<?php

use App\Autor;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class AutoresTest extends TestCase
{

    use DatabaseTransactions;

    public function setUp()
    {
        parent::setUp();

        factory(Autor::class)->create([
            'id' => 40,
            'nome' => 'H. P. Lovecraft'
        ]);
    }

    /** @test */
    function get_autores()
    {
        $response = $this->call('GET', '/api/v1/autor');

        $this->assertEquals(200, $response->status());
    }

    /** @test */
    function post_autores()
    {
        $this->call('POST', 'api/v1/autor', [ 'nome' => 'George R. R. Martin' ]);

        $this->seeInDatabase('autors', ['nome' => 'George R. R. Martin']);
    }

    /** @test */
    function put_autores()
    {
        $this->call('PUT', 'api/v1/autor/40', ['nome' => 'J. R. R. Tolkien']);

        $this->seeInDatabase('autors', ['nome' => 'J. R. R. Tolkien']);
    }

    /** @test */
    function delete_autores()
    {
        $this->call('DELETE', 'api/v1/autor/40');

        $this->notSeeInDatabase('autors', ['nome' => 'J. R. R. Tolkien']);
    }
}
