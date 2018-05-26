<?php

namespace App\Http\Controllers\Api\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Post;

class PostsController extends Controller
{
    public function getPosts()
    {

        $postQuery = Post::with('author', 'tags');

        if (request()->has('type')) {
            $postQuery->where('post_type', request()->type);
        }


        $posts = $postQuery
                    ->get()
                    ->sortByDesc('created_at');

        return response()->json([
            'posts' => $posts
        ]);
    }
}
