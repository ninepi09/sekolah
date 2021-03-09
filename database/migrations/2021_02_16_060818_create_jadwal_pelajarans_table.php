<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pelajarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kelas');
            $table->unsignedBigInteger('mata_pelajaran_id');
            $table->string('hari');
            $table->string('semester');
            $table->string('tahun_ajaran');
            $table->char('jam_pelajaran', 2);
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('jadwal_pelajarans');
    }
}
