<?php

namespace App\Http\Controllers\Blog;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param string $postType
     * @param \App\Models\Post $post description
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store($postType, Post $post, Request $request)
    {
        $comment = $post->comments()->create([
            'body' => $request->body,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }
}
