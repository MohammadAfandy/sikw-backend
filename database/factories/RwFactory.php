<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rw;
use Faker\Generator as Faker;

$factory->define(Rw::class, function (Faker $faker) {
    static $number = 1;
    return [
        'nama' => sprintf("%03d", $number++),
        'alamat_kantor' => $faker->address,
    ];
});
