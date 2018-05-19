<?php
/**
 * Created by PhpStorm.
 * User: Lee Crosdale
 * Date: 19/05/2018
 * Time: 16:52
 */

namespace App\Helpers;

class Slack
{

    public static function sendInvitation($email) {
        return \Unirest\Request::post(config('slack.invitation_url'), [], ['token' => config('slack.legacy_token'), 'email' => $email]);
    }

}