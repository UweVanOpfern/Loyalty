<?php

use Faker\Generator as Faker;
use App\Model\Program;

$factory->define(App\Model\MurugoUser::class, function (Faker $faker) {
    return [
        //
        'program_id' => function(){

            return Program::all()->random();
        },
        'badge_id' => $faker->numberBetween(1,20),
    ];
});
