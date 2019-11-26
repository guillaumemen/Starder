<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
    $especes = array("Human", "Droid", 'Gungan', 'Gorax', 'Rakata');
    $sides = array("C3PO", "Padme_Amidala", "Yoda", "Kaylo_Ren", "Dark_Vador", "Palpatine");
    shuffle($especes);
    shuffle($sides);
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'species' => $especes[0],
        'side' => $sides[0],
        'remember_token' => Str::random(10),
    ];
});
