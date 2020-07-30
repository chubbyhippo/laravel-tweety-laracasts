<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FollowingUser;
use App\User;
use Faker\Generator as Faker;

$factory->define(FollowingUser::class, function (Faker $faker) {
    return [
        'user_id' => '1',
        'following_user_id' => User::inRandomOrder()->limit(1)->pluck('id')[0]
    ];
});
