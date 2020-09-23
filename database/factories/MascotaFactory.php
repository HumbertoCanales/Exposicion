<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mascota;
use Faker\Generator as Faker;

$factory->define(Mascota::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'especie' => $faker->numberBetween(1,3),
        'propietario' => $faker->numberBetween(1,10)
    ];
});
