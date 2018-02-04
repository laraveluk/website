<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileShowController extends Controller
{
    /**
     * Show a user profile.
     *
     * @param  int $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        $profile = User::with('profile')->findOrFail($id);

        dd($profile);
    }
}
