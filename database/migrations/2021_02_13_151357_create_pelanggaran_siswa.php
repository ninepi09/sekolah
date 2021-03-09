<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelanggaranSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggaran_siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_siswa');
            $table->string('tanggal_pelanggaran');
            $table->string('pelanggaran');
            $table->string('poin');
            $table->string('sebab');
            $table->string('sanksi');
            $table->string('penanganan');
            $table->string('keterangan');
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
        Schema::dropIfExists('pelanggaran_siswa');
    }
}
