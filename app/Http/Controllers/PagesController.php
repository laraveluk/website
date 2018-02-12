<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homePage()
    {
        return view('frontend.index');
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
