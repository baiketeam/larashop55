<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$52xlGAZTrd7LivF7nyBvIeHulFfuzrkkSUcK5tA/lo2aO6AmcCPfW', // 123456
        'remember_token' => str_random(10),
        'email_verified' => true,
    ];
});
