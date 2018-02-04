<?php

namespace App\Http\Controllers\Blog;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($postType = null)
    {
        if (is_null($postType)) {
            $posts = Post::with('author', 'tags')->get()->sortByDesc('created_at');
        } else {
            $posts = Post::with('author', 'tags')->where('post_type', $postType)->get()->sortByDesc('created_at');
        }

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
