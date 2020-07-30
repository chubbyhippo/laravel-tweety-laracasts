<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tweet;
use App\User;
use Faker\Generator as Faker;

$factory->define(Tweet::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            $user_id = App\User::inRandomOrder()->limit(1)->pluck('id')[0];
            return $user_id ? $user_id : factory(App\User::class);
        },
        'body' => $faker->sentence
    ];
});
