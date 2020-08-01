<?php

use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::transaction(function() {    
            factory(App\Warga::class, App\Keluarga::count() * 5)->create();
        // });
    }
}
