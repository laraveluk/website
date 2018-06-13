<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Log;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = $request->page;

        $posts = Post::with('author')->orderBy('created_at', 'DESC');

        if (!$page) {
            $posts = $posts->get();
        } else {
            $posts = $posts->take(10)->offset($page * 10)->get();
        }

        return response()->json([
            'posts' => $posts
        ]);
    }

    /**
     * Display a post
     *
     * @param Post $post
     * @return Response
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
        $post->title = $request->data['title'];
        $post->body = $request->data['body'];
        $post->post_type = $request->data['post_type'] ?? 'post';
        $post->user_id = auth()->id();
        $post->save();

        // Only allow administrators to save tags.
        if (auth()->user()->hasRole(config('laraveluk.site.admin_role_name'))) {
            // Only Store tags if they have been passed through
            if ($request->data['tags']) {
                $post->tag($request->data['tags']);
            }
        }

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
            return response([
                'status' => 'error'
            ]);
        }

        if (auth()->user()) {
            Log::debug(auth()->user()->name . " deleted post {$post->id}");
        }

        $post->delete();

        return response([
            'status' => 'deleted'
        ]);
    }
}
