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
        $metadata = [
            'title' => 'Laravel UK / Laravel People',
            'description' => 'These wonderful folk contribute so much to the Laravel community.',
            'keywords' => config('site.keywords') . ', laravel people, people, wonderful, folk, Eric L. Barnes, Michael Dyrynda, Ian Landsman, Laura Elizabeth, Matt Stauffer, taylor otwell, Jeffery Way, Evan You, Chris Fidao, Adam Watham, Mohamed Said, Michael Dyrynda, Steve Schoger, Jacob Bennett'
        ];

        return view('frontend.laravel_people', compact('metadata'));
    }
}
