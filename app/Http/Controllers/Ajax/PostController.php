<?php

namespace App\Http\Controllers\Ajax;

use Log;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function show($post_id)
    {
        return Post::findOrFail($post_id);
    }

    public function store(Request $request)
    {
        // TODO: Add the fillable post fields
        $post = Post::create($request->only(/* */));

        if (Auth::user()) {
            Log::debug(Auth::user()->name . " created post {$post->id}");
        }

        return $post;
    }

    public function update(Request $request, $post_id)
    {
        $post = Post::findOrFail($post_id);

        // TODO: Add the fillable post fields
        $post->update($request->only(/* */));

        if (Auth::user()) {
        	Log::debug(Auth::user()->name . " updated post {$post->id}");
        }

        return $post;
    }
}
