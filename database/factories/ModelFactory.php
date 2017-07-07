<?php


use App\Models;
use App\Enums;

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
$factory->define(Models\Position::class, function ($faker) {
    return [
        'name' => $faker->name,
        'name_r' => $faker->name
    ];
});

$factory->define(Models\User::class, function ($faker) {
    static $password;
    $listPositionId = Models\Position::pluck('id');
    $roleUser = Enums\RolesEnum::getAll();

    return [
        'name' => $faker->name,
        'name_r' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'address' => $faker->address,
        'position_id' => $listPositionId->random(),
        'role' => $faker->randomElement($roleUser)
    ];
});

$factory->define(Models\Holiday::class, function ($faker) {
    $listUserId = Models\User::pluck('id');
    $status = Enums\StatusEnum::getAll();    

    $daysMax = \App\Models\Setting::where('key', 'MAX_HOLIDAY_DAYS')->value('value');
    $daysMin = \App\Models\Setting::where('key', 'MIN_HOLIDAY_DAYS')->value('value');

    $days = $faker->numberBetween($daysMin, $daysMax);

    return [
        'name' => $faker->name,
        'user_id' => $listUserId->random(),
        'date_start' => $date_start = $faker->date('now'),
        'date_end' => $faker->dateTimeBetween($date_start, $date_start.' +'. $days .' days'),
        'duration' => $days,
        'comment' => $faker->text,
        'status' => $faker->randomElement($status)
    ];
});