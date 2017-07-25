<?php

use App\Models;
use App\Enums;
use Carbon\Carbon;

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
$factory->define(Models\Position::class, function () use ($faker) {
    return [
        'name' => $faker->jobTitle,
        'name_r' => $faker->jobTitle
    ];
});

$factory->define(Models\User::class, function () use ($faker) {
    static $password;
    $positionIds = Models\Position::pluck('id');
    $userRole = Enums\RolesEnum::EMPLOYEE;

    $userHead = $faker->boolean(5);
    if ($userHead)
    {
        $userRole = Enums\RolesEnum::HEAD;
    }

    return [
        'name' => $faker->name,
        'name_r' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = Hash::make('secret'),
        'remember_token' => str_random(10),
        'address' => $faker->address,
        'position_id' => $positionIds->random(),
        'role' => $userRole,
        'is_blocked' => $faker->boolean(20)
    ];
});

$factory->define(Models\Holiday::class, function () use ($faker) {
    $userIds = Models\User::pluck('id');
    $status = Enums\StatusEnum::getAll();    

    $daysMax = Models\Setting::where('key', 'MAX_HOLIDAY_DAYS')->value('value');
    $daysMin = 5;
    $days = $faker->numberBetween($daysMin, $daysMax);

    $commentNull = $faker->boolean(50);
    if ($commentNull) {
        $comment = null;
    }
    else {
        $comment = $faker->text;
    }
    
    $date_start = Carbon::instance($faker->dateTimeBetween('-2 years', '+1 years'));

    return [
        'user_id' => $userIds->random(),
        'date_start' => clone $date_start,
        'date_end' => $date_start->addDays($days),
        'duration' => $days,
        'comment' => $comment,
        'status' => $faker->randomElement($status)
    ];
});