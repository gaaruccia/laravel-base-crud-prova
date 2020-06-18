<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cagnolino_model;
use Faker\Generator as Faker;

$factory->define(Cagnolino_model::class, function (Faker $faker) {
    return [
      'nome' => $faker -> firstname(),
      'tipo' => $faker -> word(),
      'altezza' => rand(70,220),
      'peso' => rand(10,120)
    ];
});
