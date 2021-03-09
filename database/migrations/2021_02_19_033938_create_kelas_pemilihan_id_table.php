<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasPemilihanIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_pemilihan_id', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pemilihan_id');
            $table->string('kelas_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas_pemilihan_id');
    }
}
