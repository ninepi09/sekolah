<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaWalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_walis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_siswa')->unsigned();

            $table->string('nama_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->date('tanggal_lahir_wali')->nullable();
            $table->enum('agama_wali', ['Islam', 'Budha', 'Kristen Protestan', 'Hindu', 'Kristen Katolik', 'Konghuchu'])->nullable();
            $table->enum('kewarganegaraan_wali', ['WNI', 'WNA'])->nullable();
            $table->enum('pendidikan_wali', ['SD/Sederajat', 'SMP/MTs/Sederajat', 'SMA/MA/Sederajat', 'D1/D2/D3', 'S1', 'S2', 'S3'])->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('email_wali')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_siswa')->references('id')->on('siswas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa_walis');
    }
}
