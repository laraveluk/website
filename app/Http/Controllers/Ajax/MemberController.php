<?php

namespace App\Http\Controllers\Ajax;

use Log;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show($user_id)
    {
        return User::findOrFail($user_id);
    }

    public function update(Request $request, $user_id)
    {
        $user = User::findOrFail($user_id);

        $user->update($request->only('name', 'email', 'location'));

        if (Auth::user()) {
        	Log::debug(Auth::user()->name . " updated profile information for {$user->name}");
        }

        return $user;
    }
}
