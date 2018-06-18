<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homePage()
    {
        $posts = Post::with('author', 'tags')
            ->approved()
            ->get()
            ->take(5);
    
        return view('frontend.home.index', compact('posts'));
    }

    public function aboutUs()
    {
        $metadata = [
            'title' => 'Laravel UK / About Us',
            'description' => 'The most exciting coding community in the UK',
            'keywords' => config('site.keywords') . ', Laravel, LaravelUK, United Kingdom, coding, programming, community, Laracon, Slack, About Us, Ian Landsman, Laura Elizabeth, Matt Stauffer, Taylor Otwell, Jeffery Way, Evan You, Chris Fidao, Adam Watham, Mohamed Said, Michael Dyrynda, Steve Schoger, Jacob Bennett'
        ];

        return view('frontend.about', compact('metadata'));
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
