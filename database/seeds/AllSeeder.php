<?php

use Illuminate\Database\Seeder;

class AllSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function() {
            factory(App\Kelurahan::class, 1)->create()->each(function ($kelurahan) {
                $kelurahan->rws()->saveMany(factory(App\Rw::class, 10)->make());
            });

            foreach (App\Rw::all() as $rw) {
                $rw->rts()->saveMany(factory(App\Rt::class, 8)->make());
            }

            foreach (App\Rt::all() as $rt) {
                $rt->keluargas()->saveMany(factory(App\Keluarga::class, 30)->make());
            }
        });
    }
}
