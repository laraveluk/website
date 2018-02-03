<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeletePostsTest extends TestCase
{
    /** @test */
    public function an_unauthorized_user_cannot_delete_a_blog_post()
    {
        // given I am signed in
        $postAuthor = factory('App\Models\User')->create();
        $user = factory('App\Models\User')->create();
        $this->signIn($user);
        // who has NOT created a post
        $post = factory('App\Models\Post')->create(['user_id' => $postAuthor->id]);
        // and wants to delete this post
        $this->call('DELETE', route('posts.destroy', $post))
        // I should be redirected back to the post
        ->assertRedirect($post->url);
        // and my post should NOT be missing from the database
        $this->assertDatabaseHas('posts', $post->toArray());
    }

    /** @test */
    public function an_authorized_user_can_delete_a_blog_post()
    {
        // given I am signed in
        $user = factory('App\Models\User')->create();
        $this->signIn($user);
        // who has created a post
        $post = factory('App\Models\Post')->create(['user_id' => $user->id]);
        // and wants to delete this post
        $this->call('DELETE', route('posts.destroy', $post))
        // I should be redirected back to the posts index
        ->assertRedirect(route('posts.index'));
        // and my post should be missing from the database
        $this->assertDatabaseMissing('posts', $post->toArray());
    }
}
