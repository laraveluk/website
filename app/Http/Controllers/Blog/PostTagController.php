<?php

namespace App\Http\Controllers\Blog;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostTagController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($tag)
    {
        $posts = Post::withAnyTags([$tag])->get();
        $title = "Posts Tagged: {$tag}";
        return \view('frontend.posts.index', compact('posts', 'title'));
    }
}
