<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200)->assertSee("Pedro Alves")->assertSee("Software Engineer & Systems Analyst", false)
            ->assertSee('Projetos em Destaque')
            ->assertSee('Vamos conversar?')
            ->assertSee('img/foto_pedro.jpg', false);
    }
}
