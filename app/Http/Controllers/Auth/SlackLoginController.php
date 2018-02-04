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
     * Redirect the user to the Slack authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('slack')->redirect();
    }

    /**
     * Obtain the user information from Slack.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $slackUser = Socialite::driver('slack')->user();

        if ($user = User::where('slack_id', $slackUser->getId())->first()) { // User already exists, so sign them back in

            $user->update([
                'name' => $slackUser->getName(),
                'email' => $slackUser->getEmail(),
            ]);

            Log::debug("{$slackUser->getName()} logged in with Slack");

        }
        else{ // User does not exist, so register them

            $user = User::create([
                'slack_id' => $slackUser->getId(),
                'name' => $slackUser->getName(),
                'email' => $slackUser->getEmail(),
                'password' => bcrypt(str_random(16)),
            ]);

            Log::debug("{$slackUser->getName()} registered with Slack");

        }

        Auth::login($user);

        return redirect()->route('home');
    }
}
