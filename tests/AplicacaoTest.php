<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class AplicacaoTest extends TestCase
{

    /** @test */
    function test_inicial()
    {
        $response = $this->call('GET', '/');

        $this->assertEquals(200, $response->status());
    }
}
