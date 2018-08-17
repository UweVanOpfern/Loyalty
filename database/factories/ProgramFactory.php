<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Program::class, function (Faker $faker) {
    return [
        //

        'merchant_id'     => $faker->numberBetween(1,20),
        'name'            => $faker->name,
        'points_required' => $faker->numberBetween(10,20),
    ];
});
