<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function homePage()
    {
        return view('frontend.index');
    }

    public function laravelPeople()
    {
        return view('frontend.laravel_people');
    }
}
