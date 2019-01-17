<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->address,
        'user_id' => rand(1,2)
    ];
});
