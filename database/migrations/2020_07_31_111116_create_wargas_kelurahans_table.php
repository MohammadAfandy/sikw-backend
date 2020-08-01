<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargasKelurahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas_kelurahans', function (Blueprint $table) {
            $table->id();
            $table->string('hubungan');
            $table->foreignId('warga_id')->constrained();
            $table->foreignId('kelurahan_id')->constrained();
            $table->timestamps();

            $table->unique(['warga_id', 'kelurahan_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wargas_kelurahans');
    }
}
