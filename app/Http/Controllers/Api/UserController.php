<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

class UserController extends Controller
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

    public function resetPassword(Request $request, $user_id)
    {
        $user = User::findOrFail($user_id);

        $exitCode = Artisan::call('user:resetpassword', [
            'user' => $user->id,
            '--force' => true
        ]);

        return $user;
    }
}
