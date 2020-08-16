<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'nombre_adulte'=>$faker->randomDigit,
        'nombre_enfant'=>$faker->randomDigit,
        'date_debut'=>$faker->date,
        'date_fin'=>$faker->date,
        'statut'=>$faker->randomElement(['expired','unexpired'])
    ];
});
