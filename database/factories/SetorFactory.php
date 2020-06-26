<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Setor::class, function (Faker $faker) {
    return [
        'descricao'=>$faker->sentence,
        'area'=>$faker->name,
        'tel_setor'=>$faker->phoneNumber,
        'ramal'=>$faker->phoneNumber,
    ];
});
