<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Model\Reply;
use App\Model\Question;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [

        'body' =>  $faker->text,
        
        'question_id' => function(){
            return Question::all()->random();
        },

        'user_id' => function(){
            return \App\User::all()->random();
        }
    ];
});
