<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    /** @test */
    function test_inicial()
    {
        $response = $this->call('GET', '/');

        $this->assertEquals(200, $response->status());
    }
}
