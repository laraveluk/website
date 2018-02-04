<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title' => $title,
        'slug' => str_slug($title), // to be replaced with Sluggable Fake
        'body' => $faker->paragraph,
        'user_id' => factory('App\Models\User')->create()->id,
        'post_type' => 'post'
    ];
});
