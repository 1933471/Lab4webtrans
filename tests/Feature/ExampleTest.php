<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFirst()
    {
        $this->withHeader('Authorization', 'Basic bGlhbS5qb3VyZGFpbjoxMjM0NTY=');
        $response = $this->get('http://localhost:8000/api/produits');
        $response->assertStatus(200);
    }

    public function testSecond()
    {
        $this->withHeader('Authorization', 'Basic bGlhbS5qb3VyZGFpbjoxMjM0NTY=');
        $response = $this->put('http://localhost:8000/api/produits/2/5');
        $response->assertStatus(200);
    }
    public function testThird()
    {
        $this->withHeader('Authorization', 'Basic bGlhbS5qb3VyZGFpbjoxMjM0NTY=');
        $response = $this->delete('http://localhost:8000/api/produits/2');
        $response->assertStatus(200);
    }

}
