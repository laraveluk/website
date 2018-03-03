<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homePage()
    {
        $posts = Post::with('author', 'tags')->get()->sortByDesc('created_at')->take(5);

        return view('frontend.index', compact('posts'));
    }

    public function laravelPeople()
    {
        return view('frontend.laravel_people');
    }
}
