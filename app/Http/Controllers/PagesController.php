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
        return view('frontend.laravel_people');
    }
}
