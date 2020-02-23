<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Likes;
use Faker\Generator as Faker;

$factory->define(Likes::class, function (Faker $faker) {
    return [

        'user_id' => function(){
            return \App\User::all()->random();
        }
    ];
});
