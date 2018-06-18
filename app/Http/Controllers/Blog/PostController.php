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
            $metadata_title = 'Laravel UK / News, Interviews & Articles';
        } else {

            $metadata_title = 'Laravel UK | ' . title_case($postType);
        }

        $metadata = [
                'title' => $metadata_title,
                'description' => 'A comprehensive list of our latets news, events, tutorials and interviews',
                'keywords' => config('site.keywords') . ', news, articles, tutorials, interviews, event, events'
            ];

        return view('frontend.posts.index', compact( 'metadata', 'postType'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($postType, Post $post)
    {
        $metadata = [
            'title' => (strtolower($postType) !== 'post') ? str_singular(title_case($postType)) . ' | ' . $post->title : $post->title,
            'description' => $post->excerpt,
            'keywords' => config('site.keywords') . ', ' . $post->author->name
        ];

        return view('frontend.posts.show', compact('post', 'metadata'));
    }
}
