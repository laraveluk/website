<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Promotion::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'url' => $faker->url,
        'description' => $faker->text(140),
        'published' => true,
    ];
});
