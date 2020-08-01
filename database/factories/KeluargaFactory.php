<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Keluarga;
use Faker\Generator as Faker;

$factory->define(Keluarga::class, function (Faker $faker) {
    return [
        'no_kk' => $faker->nik(),
    ];
});
