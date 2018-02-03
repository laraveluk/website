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
        $slackUser = Socialite::driver('slack')->user();

        Log::debug("{$slackUser->getName()} logged in with Slack");

        $user = User::firstOrCreate([
            'name' => $slackUser->getName(),
            'email' => $slackUser->getEmail(),
        ],[
            'password' => bcrypt(str_random(16)),
        ]);

        Auth::login($user);

        return view('frontend.welcome', compact('user'));
    }
}
