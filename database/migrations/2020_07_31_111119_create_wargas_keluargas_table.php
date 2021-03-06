<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargasKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas_keluargas', function (Blueprint $table) {
            $table->id();
            $table->string('hubungan');
            $table->foreignId('warga_id')->constrained();
            $table->foreignId('keluarga_id')->constrained();
            $table->timestamps();

            $table->unique(['warga_id', 'keluarga_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wargas_keluargas');
    }
}
