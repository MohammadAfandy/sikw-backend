<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kelurahan;
use Faker\Generator as Faker;

$factory->define(Kelurahan::class, function (Faker $faker) {
    return [
        'nama' => $faker->state,
        'alamat_kantor' => $faker->address,
    ];
});
