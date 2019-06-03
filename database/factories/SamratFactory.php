<?php

use Faker\Generator as Faker;

$factory->define(App\Samrat::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
    ];
});
