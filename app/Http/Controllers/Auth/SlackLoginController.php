<?php

namespace App\Http\Controllers\Auth;

use Log;
use Auth;
use Socialite;
use App\Models\User;
use App\Http\Controllers\Controller;

class SlackLoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('slack')->redirect();
    }

    /**
     * Obtain the user information from slack.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('slack')->user();

        Log::debug("{$user->getName()} logged in with Slack");

        return view('frontend.welcome', compact('user'));
    }
}
