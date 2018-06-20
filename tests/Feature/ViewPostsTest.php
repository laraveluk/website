<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewPostsTest extends TestCase
{
//    /** @test */
//    public function any_user_may_see_the_blog_index()
//    {
//        // Given that there are posts in the database
//        $posts = factory('App\Models\Post', 10)->create();
//        // When we visit the posts index
//        $this->call('GET', route('frontend.posts.index'))
//        // It should load successfully
//        ->assertStatus(200)
//        // And we should see a post title and excerpt for the first post
//        ->assertSee($posts->first()->title)
//        ->assertSee($posts->first()->excerpt)
//        // and the same for the last post
//        ->assertSee($posts->last()->title)
//        ->assertSee($posts->last()->excerpt);
//    }

    /** @test */
    public function any_user_may_view_an_approved_blog_post()
    {
        // Given that there is a post in the database
        $post = factory('App\Models\Post')->create([
            'approved' => 1,
        ]);
        // When we visit that post's URL
        $this->call('GET', route('frontend.posts.show', [$post->post_type, $post]))
        // It should load successfully
        ->assertStatus(200)
        // and we should at a minimum see the title, date, body and author name.
        ->assertSee($post->title)
        ->assertSee($post->created_at->format('jS F Y'))
        ->assertSee($post->body)
        ->assertSee($post->author->name);
    }

    /** @test */
    public function any_blog_post_gets_its_own_dynamic_metadata_information()
    {
        // Given that there is a post in the database
        $post = factory('App\Models\Post')->create([
            'approved' => 1,
        ]);

        $title = $post->title;
        $excerpt = $post->excerpt;
        // When we visit that post's URL
        $this->call('GET', route('frontend.posts.show', [$post->post_type, $post]))
        // It should load successfully
        ->assertStatus(200)
        // and check that we have the metadata title set to the post title.
        ->assertSee('<title>' . $title . '</title>')
        // and the post excerpt / facebook information
        ->assertSee('<meta name="description" content="' . $excerpt . '">')
        ->assertSee('<meta property="og:description" content="' . $excerpt . '">');
    }
}
