<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5,10)), "."),
        'body' => $faker->paragraph(rand(5,10), true),
        'views' => rand(0,10),
        'answers' => rand(0,10),
        'votes' => rand(-3,10),
    ];
});
