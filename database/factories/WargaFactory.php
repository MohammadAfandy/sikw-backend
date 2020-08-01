<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Warga;
use Faker\Generator as Faker;

$factory->define(Warga::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'no_ktp' => $faker->nik(),
        'jenis_kelamin' => $faker->randomElement($array = ['L', 'P']),
        'alamat' => $faker->address,
        'tempat_lahir' => $faker->city,
        'tanggal_lahir' => $faker->dateTimeBetween('1930-01-01', '2010-12-31')->format('Y-m-d'),
        'keterangan' => null,
    ];
});
