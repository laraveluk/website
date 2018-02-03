<?php

namespace App\Http\Controllers\Ajax;

use Log;
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
    public function index()
    {
        $posts = Post::with('author')->get()->sortByDesc('created_at');

        return response()->json([
            'posts' => $posts
        ]);
    }

    /**
     * Display a post
     * 
     * @param App\Models\Post $post
     * @return Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = $post->load('author');

        return response()->json([
            'post' => $post
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->body = $request->body;
        $post->user_id = auth()->id();
        $post->save();

        if (auth()->user()) {
            Log::debug(auth()->user()->name . " created post {$post->id}");
        }

        return response()->json([
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->title ?? $post->title,
            'body' => $request->body ?? $post->body,
        ]);
        
        if (auth()->user()) {
            Log::debug(auth()->user()->name . " updated post {$post->id}");
        }

        return response()->json([
            'post' => $post
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        if ($post->user_id != auth()->id()) {
            return redirect($post->url);
        }
        $post->delete();

        if (auth()->user()) {
            Log::debug(auth()->user()->name . " deleted post {$post_id}");
        }

        return response([
            'status' => 'deleted'
        ]);
    }
}
