<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Pessoa::class, function (Faker $faker) {
    return [

        'matricula'=> $faker->name,
        'funcao' => $faker->name,
        'tel_fixo' => $faker->phoneNumber,
        'tel_movel' => $faker->phoneNumber,

    ];
});
