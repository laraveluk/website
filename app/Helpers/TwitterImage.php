<?php

namespace App\Helpers;

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

    private static function getImageUrl(string $username) {

        $url = sprintf('https://twitter.com/%s/profile_image?size=original', $username);

        $client = new \GuzzleHttp\Client([
            'allow_redirects' => true
        ]);

        $client->get($url, [
            'on_stats' => function (\GuzzleHttp\TransferStats $stats) use (&$url) {
                $url = (string) $stats->getEffectiveUri();
            },
        ]);

        return $url;

    }

}