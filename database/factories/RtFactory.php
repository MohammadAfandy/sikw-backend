<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rt;
use Faker\Generator as Faker;

$factory->define(Rt::class, function (Faker $faker) {
    static $number = 1;
    return [
        'nama' => function() use (&$number) {
            if ($number > 8) {
                $number = 1;
            }
            return sprintf("%03d", $number++);
        },
        'alamat_kantor' => $faker->address,
    ];
});
