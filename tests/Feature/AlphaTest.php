<?php

namespace Tests\Feature;

use Tests\TestCase;

class AlphaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/alpha');

        $response->assertStatus(200);
        $response->assertSee('This is the Alpha page');
        $response->assertDontSee('Beta');
    }
}
