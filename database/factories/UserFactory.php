<?php

/** @var Factory $factory */

use App\User;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    $users = User::all('id')->pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'status' => $faker->randomElement([1,2,3,1,2,1,1,0,-1,-2]),
        'role' => $faker->randomElement([1,2,0,2,2,2,1]),
        'sex' => $faker->randomElement([1,2,3,1,2,1,2,1,2]),
        'orient' => $faker->randomElement([1,2,3,1,1,1,1,1,2,3,3]),
        'direct' => $faker->randomElement([1,1,1,1,3,3,2]),
        'old' => $faker->numberBetween(17, 40),
        'invited_by_id' => $faker->randomElement($users),
        //'rating' => $faker->numberBetween(-100, 1000), //todo transactions log
    ];
});
