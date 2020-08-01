<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargasRwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas_rws', function (Blueprint $table) {
            $table->id();
            $table->string('hubungan');
            $table->foreignId('warga_id')->constrained();
            $table->foreignId('rw_id')->constrained();
            $table->timestamps();

            $table->unique(['warga_id', 'rw_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wargas_rws');
    }
}
