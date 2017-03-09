<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Bike::class, function (Faker\Generator $faker) {

    return [
        'brand' => $faker->word,
        'model' => $faker->word,
    ];
});

$factory->define(App\Frame::class, function (Faker\Generator $faker) {

    return [
        'size' => $faker->randomElement($array = ['XS', 'S', 'M', 'L', 'XL']),
        'color' => $faker->safeColorName,
        'material' => $faker->randomElement($array = ['carbon fiber', 'aluminum', 'titanium', 'steel']),
    ];
});

$factory->define(App\Wheel::class, function (Faker\Generator $faker) {

    return [
        'size' => $faker->randomElement($array = ['29', '27.5', '27.5+', '26']),
    ];
});
