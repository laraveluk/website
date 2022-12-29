<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class TwitterImage
{

    public static function get(string $username) {

        $key = sprintf('TwitterImage_%s', $username);

        if (cache()->has($key)) {
            return cache($key);
        }

        $url = self::getImageUrl($username);

        cache()->put($key, $url, 5760);

        return $url;

    }

    // Doesn't actually work anymore - Twitter have updated their APIs - https://developer.twitter.com/en/docs/twitter-api/v1/accounts-and-users/follow-search-get-users/api-reference/get-users-show
    // This would be a good PR :)

    private static function getImageUrl(string $username) {
        return sprintf('https://twitter.com/%s/profile_image?size=original', $username);
    }

}
