<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EditPostsTest extends TestCase
{
    /** @test */
    public function an_authorized_user_can_see_the_edit_post_form()
    {
        // given i am a user
        $user = factory('App\Models\User')->create();
        // who is signed in
        $this->signIn($user);
        // who has created a post
        $post = factory('App\Models\Post')->create(['user_id' => $user->id]);
        // when I go to edit that post
        $this->call('GET', route('posts.edit', $post))
        // i should see the form
        ->assertSee('Edit Post: '.$post->title)
        ->assertStatus(200);
    }

    /** @test */
    public function an_unauthorized_user_cannot_see_the_edit_post_form()
    {
        // given i am a user
        $postAuthor = factory('App\Models\User')->create();
        $user = factory('App\Models\User')->create();
        // who is signed in
        $this->signIn($user);
        // who has created a post
        $post = factory('App\Models\Post')->create(['user_id' => $postAuthor->id]);
        // when I go to edit that post
        $this->call('GET', route('posts.edit', $post))
        // i should be redirected to the post.
        ->assertRedirect($post->url);
    }

    /** @test */
    public function an_authorized_user_can_update_a_blog_post()
    {
        // given I am signed in
        $user = factory('App\Models\User')->create();
        $this->signIn($user);
        // who has created a post
        $post = factory('App\Models\Post')->create(['user_id' => $user->id]);
        // and wants to update this post
        $updatedPost = factory('App\Models\Post')->make([
            'user_id' => $user->id,
            'title' => 'Changing the World',
            'body' => 'I have changed'
        ]);
        // If I submit a request (aka filling out the form) to the edit post endpoint
        $this->call('PATCH', route('posts.update', $post), $updatedPost->toArray())
        // I should be redirected back to my post
        ->assertRedirect($post->url);
        // and my changes should be persisted in the database
        $this->assertEquals($post->fresh()->title, $updatedPost->title);
        $this->assertEquals($post->fresh()->body, $updatedPost->body);
    }
}
