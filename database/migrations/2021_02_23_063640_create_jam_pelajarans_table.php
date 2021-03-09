<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamPelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_pelajarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sekolah_id');
            $table->string('hari');
            $table->char('jam_ke');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->boolean('istirahat')->default(false);
            $table->unsignedInteger('editor_id')->nullable();
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
        Schema::dropIfExists('jam_pelajarans');
    }
}
