<?php

namespace App\Http\Controllers\Api;

use App\Promotion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:40',
            'description' => 'required|max:140',
            'url' => 'required|url',
            'published' => 'required|boolean'
        ]);

        $promotion = Promotion::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'url' => $request->get("url"),
            'published' => $request->get('published')
        ]);

        return $promotion;
    }
}
