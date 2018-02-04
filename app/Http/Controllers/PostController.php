<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($postType = 'post')
    {
        $posts = Post::with('author')->where('post_type', $postType)->get()->sortByDesc('created_at');

        return \view('frontend.posts.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($postType, Post $post)
    {
        return \view('frontend.posts.show', compact('post'));
    }
}
