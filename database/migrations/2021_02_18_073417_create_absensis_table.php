<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('kelas_id');
            $table->date('tanggal');
            $table->char('status', 1);
            $table->unsignedBigInteger('editor_id')->nullable();
            $table->timestamps();

            $table->primary(['siswa_id', 'kelas_id', 'tanggal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensis');
    }
}
