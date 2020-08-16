<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chambre;
use Faker\Generator as Faker;

$factory->define(Chambre::class, function (Faker $faker) {
    return [
        'num_chambre'=>$faker->randomDigit(),
        'description'=>$faker->sentence(3),
        'nombre_personne'=>$faker->randomDigit(),
        'prix'=>$faker->randomDigit()
    ];
});
