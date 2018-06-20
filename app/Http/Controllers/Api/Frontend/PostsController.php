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

        // Return only approved posts if user is not an Admin
        if (! request()->has('all')) {
            $postQuery->approved();
        }

        $posts = $postQuery->orderBy('created_at', 'DESC')->get();

        return response()->json([
            'posts' => $posts
        ]);
    }

    public function approvePost()
    {
        if (auth()->user()->hasRole('Admin')) {
            $post = Post::find(request()->post_id);
            $post->approved = 1;
            $post->approved_by = auth()->user()->id;
            $post->save();

            return response()->json([
                'code' => 200,
                'status' => 'Post approved successfully'
            ]);
        }
    }
}
