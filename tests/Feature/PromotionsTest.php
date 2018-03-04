<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PromotionsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_create_a_promotion()
    {
        $this->signIn();

        $response = $this->post('/api/promotions/store', [
            'name' => 'My Project',
            'description' => 'This is my awesome project',
            'url' => 'http://github.com',
            'published' => true,
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('promotions', [
            'name' => 'My Project',
            'description' => 'This is my awesome project',
            'url' => 'http://github.com',
            'published' => true,
        ]);
    }
}
