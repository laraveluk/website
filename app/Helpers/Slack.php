<?php
/**
 * Created by PhpStorm.
 * User: Lee Crosdale
 * Date: 19/05/2018
 * Time: 16:52
 */

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

class Slack
{

    public static function sendInvitation($email) {
        Log::info($email . ' attempted to obtain an invitation to Slack');
        return false;
    }

}
