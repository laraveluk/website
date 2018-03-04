<?php

namespace Tests\Feature;

use App\Models\Promotion;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PromotionsTest extends TestCase
{
    use RefreshDatabase;

    public function setup()
    {
        parent::setUp();
        $this->disableExceptionHandling();
    }

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

    /** @test */
    public function a_user_can_read_their_promotion()
    {
        $user = factory('App\Models\User')->create();
        $this->signIn($user);

        $promotion = factory('App\Models\Promotion')->create([
            'user_id' => $user->id
        ]);

        $response = $this->get('/api/promotions/get/' . $promotion->id);

        $response->assertStatus(200);
        $response->assertSee($promotion->name);
    }

    /** @test */
    public function a_user_can_update_their_promotion()
    {
        $user = factory('App\Models\User')->create();
        $this->signIn($user);

        $promotion = factory('App\Models\Promotion')->create([
            'user_id' => $user->id
        ]);

        $response = $this->put('/api/promotions/update/' . $promotion->id, [
            'name' => 'My Project',
            'description' => 'This is my awesome project',
            'url' => 'http://github.com',
            'published' => true,
        ]);

        $response->assertStatus(200);
        $this->assertEquals('My Project', $promotion->fresh()->name);
        $this->assertEquals('This is my awesome project', $promotion->fresh()->description);
        $this->assertEquals('http://github.com', $promotion->fresh()->url);
    }

    /** @test */
    public function a_user_can_delete_their_promotion()
    {
        $user = factory('App\Models\User')->create();
        $this->signIn($user);

        $promotion = factory('App\Models\Promotion')->create([
            'user_id' => $user->id
        ]);

        $response = $this->delete('/api/promotions/delete/' . $promotion->id);

        $response->assertStatus(200);
        $this->assertNotNull($promotion->fresh()->deleted_at);
    }
}
