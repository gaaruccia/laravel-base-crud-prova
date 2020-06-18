<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Omino_model;
use Faker\Generator as Faker;

function sesso(){
  $rand = rand(0,1);
  if($rand){
    return $sesso = 'M';
  }else{
    return $sesso = 'F';
  }
};

$factory->define(Omino_model::class, function (Faker $faker) {

    return [
      'nome' => $faker -> firstname(),
      'cognome' => $faker -> lastname(),
      'eta' => $faker -> numberBetween(10,90),
      'indirizzo' => $faker -> streetAddress(),
      'capelli' => $faker -> safeColorName(),
      'occhi' => $faker -> ColorName(),
      'altezza' => rand(70,220),
      'peso' => rand(10,120),
      'sesso' => sesso()
    ];
});
