<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rws', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('alamat_kantor')->nullable();
            $table->text('keterangan')->nullable();
            $table->foreignId('kelurahan_id')->constrained();
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['nama', 'kelurahan_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rws');
    }
}
