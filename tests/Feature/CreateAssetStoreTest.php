<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateAssetStoreTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_a_new_store() {

        $this->post('/api/asset-stores', [
            'name' => 'New Asset Store',
            'disk' => 'local'
        ]);

        $this->assertDatabaseHas('assetStores', ['name' => 'New Asset Store', 'disk' => 'local']);
    }
}
