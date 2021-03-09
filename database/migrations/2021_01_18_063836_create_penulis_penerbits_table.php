<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenulisPenerbitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penulis_penerbits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('penulis');
            $table->string('penerbit');
            $table->integer('tahun');
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
        Schema::dropIfExists('penulis_penerbits');
    }
}
