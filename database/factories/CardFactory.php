<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Card;
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

$factory->define(Card::class, function (Faker $faker) {
    return [
        'card_id' => implode('', $faker->unique()->randomElements([1,2,3,4,5,6,7,8,9,0], 20, true)),
        'pin' => implode('', $faker->randomElements([1,2,3,4,5,6,7,8,9,0], 4, true)),
        'activation_date' => $faker->dateTimeThisYear(),
        'expiration_date' => $faker->dateTimeThisYear()->add(new DateInterval('P1Y')),
        'balance' => $faker->randomFloat(2, 0, 10000)
    ];
});
