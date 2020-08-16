<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'nom_client'=>$faker->firstName,
        'prenom_client'=>$faker->lastName,
        'adresse'=>$faker->streetAddress,
        'ville'=>$faker->city,
        'pays'=>$faker->sentence(1),
        'telephone'=>$faker->phoneNumber,
        'email'=>$faker->email,
        'cin'=>$faker->buildingNumber,
        'passport'=>$faker->buildingNumber,
    ];
});
