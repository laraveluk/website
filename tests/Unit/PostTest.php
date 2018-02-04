<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    protected $post;

    public function setUp()
    {
        parent::setUp();

        $this->post = factory(Post::class)->make();
    }

    /** @test */
    public function it_has_a_title()
    {
        $this->assertInternalType("string", $this->post->title);
        $this->assertNotNull($this->post->title);
    }

    /** @test */
    public function it_has_a_slug()
    {
        $this->assertInternalType("string", $this->post->slug);
        $this->assertNotNull($this->post->slug);
    }

    /** @test */
    public function it_has_a_body()
    {
        $this->assertInternalType("string", $this->post->body);
        $this->assertNotNull($this->post->body);
    }

    /** @test */
    public function it_has_a_user_id()
    {
        $this->assertInternalType("int", $this->post->user_id);
        $this->assertNotNull($this->post->user_id);
    }

    /** @test */
    public function it_has_an_author()
    {
        $this->assertInstanceOf(User::class, $this->post->author);
    }

    /** @test */
    public function it_can_tell_you_its_url()
    {
        $post = factory('App\Models\Post')->create();
        $url = route('frontend.posts.show', [$post->post_type, $post]);
        $this->assertEquals($url, $post->url);
    }

    /** @test */
    public function it_can_provide_an_excerpt()
    {
        $post = factory('App\Models\Post')->create();
        $excerpt = str_limit($post->body, 140);
        $this->assertEquals($excerpt, $post->excerpt);
    }
}
