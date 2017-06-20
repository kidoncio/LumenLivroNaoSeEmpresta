<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    public function verificar_get_autores()
    {
        $response = $this->call('GET', '/autors');

        $this->assertEquals(200, $response->status());
    }
}
