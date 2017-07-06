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

$faker = Faker\Factory::create('ru_RU');

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Position::class, function ($faker) {
    return [
        'name' => $faker->name,
        'name' => $faker->name
    ];
});

$factory->define(App\Models\User::class, function ($faker) {
    static $password;

    return [
        'name' => $faker->name,
        'name_r' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'address' => $faker->address,
        'position_id' => function() {
            return factory(App\Models\Position::class)->create()->id;
        }
    ];
});

$factory->define(App\Models\Holiday::class, function ($faker) {
    return [
        'name' => $faker->name,
        'user_id' => function() {
            return factory(App\Models\User::class)->create()->id;
        }
        'date_start' => $date_start => $faker->date($format = 'Y-m-d', $max = 'now'),
        'date_end' => $faker->dateTimeBetween($date_start, $date_start.'+10 days')->format('Y-m-d'),
        'duration' => 10,
        'comment' => $faker->text
    ];
});

$factory->define(App\Models\Setting::class, function ($faker) {
    return [
        'name' => str_random(10),
        'value' => str_random(10)
    ];
});