<?php

use Faker\Generator as Faker;
use App\Model\Program;
use App\Model\MurugoUser;

$factory->define(App\Model\Transaction::class, function (Faker $faker) {
    return [

        //
        'murugo_user_id' => function(){

            return MurugoUser::all()->random();
        },
        'program_id' => function(){

            return Program::all()->random();
        },
        'points_awarded'  => $faker->numberBetween(10,20),
    ];
});
