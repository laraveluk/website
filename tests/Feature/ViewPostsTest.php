<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewPostsTest extends TestCase
{
    /** @test */
    public function any_user_may_see_the_blog_index()
    {
        // Given that there are posts in the database
        $posts = factory('App\Models\Post', 10)->create();
        // When we visit the posts index
        $this->call('GET', route('posts.index'))
        // It should load successfully
        ->assertStatus(200)
        // And we should see a post title and excerpt for the first post
        ->assertSee($posts->first()->title)
        ->assertSee($posts->first()->excerpt)
        // and the same for the last post
        ->assertSee($posts->last()->title)
        ->assertSee($posts->last()->excerpt);
    }

    /** @test */
    public function any_user_may_view_a_blog_post()
    {
        // Given that there is a post in the database
        $post = factory('App\Models\Post')->create();
        // When we visit that post's URL
        $this->call('GET', $post->url)
        // It should load successfully
        ->assertStatus(200)
        // and we should at a minimum see the title, date, body and author name.
        ->assertSee($post->title)
        ->assertSee($post->created_at->format('jS F Y'))
        ->assertSee($post->body)
        ->assertSee($post->author->name);
    }
}
