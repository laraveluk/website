<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Post;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreatePostsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_authorized_user_can_see_the_form_to_create_a_blog_post()
    {
        // given I am signed in
        $user = factory('App\Models\User')->create();
        $this->signIn($user);
        // and I am authorised to create a blog post
        /** @todo */
        // $this->assertTrue($user->can('create posts'));
        // and I visit the create post URL
        $this->call('GET', route('posts.create'))
        // I should see the form
        ->assertStatus(200)
        ->assertSee('Create Post');
    }

    /** @test */
    public function an_authorized_user_can_publish_a_blog_post()
    {
        // given I am signed in
        $user = factory('App\Models\User')->create();
        $this->signIn($user);
        // and I am authorised to create a blog post
        /** @todo */
        // $this->assertTrue($user->can('publish posts'));
        // If I submit a request (aka filling out the form) to the create post endpoint
        $post = factory(Post::class)->make(['user_id' => $user->id]);
        $this->call('POST', route('posts.store'), $post->toArray());
        // my blog post should be persisted to the database
        $this->assertDatabaseHas('posts', $post->toArray());
    }

    /** @test */
    /** @todo */
    /**
    public function an_unauthorized_user_cannot_see_the_form_to_create_a_blog_post()
    {
        // given I am signed in
        $user = factory('App\Models\User')->create();
        $this->signIn($user);
        // and I do not have authorization to create a blog post
        $this->assertFalse($user->can('create posts'));
        // and I try to visit the create post URL
        $this->call('GET', route('posts.create'))
        // I should be redirected somewhere with an error message
        ->assertRedirect(route('home'));
    }
    */

    /** @test */
    public function a_guest_user_cannot_see_the_form_to_create_a_blog_post()
    {
        // given I am a guest
        // and I try to visit the create post URL
        $this->call('GET', route('posts.create'))
        // I should be redirected to the login page
        ->assertRedirect('/login');
    }

}
