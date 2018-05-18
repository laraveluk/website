<?php
/**
 * Created by PhpStorm.
 * User: Lee Crosdale
 * Date: 18/05/2018
 * Time: 18:50
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Slack Invitation / API details
    |--------------------------------------------------------------------------
    |
    | Here you may configure the values used in Slack's API and Invitation System
    | Note That you MUST use a slack legacy token when posting to the
    | invitation_url
    */

    'invitation_url' => env('SLACK_SIGNUP_URL'),
    'legacy_token' => env('SLACK_LEGACY_TOKEN')
];