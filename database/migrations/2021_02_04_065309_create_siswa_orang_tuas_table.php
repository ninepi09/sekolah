<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaOrangTuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_orang_tuas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_siswa')->unsigned();

            $table->string('status_anak')->nullable();
            $table->integer('anak_ke')->unsigned()->nullable();
            $table->integer('jumlah_saudara')->unsigned()->nullable();
            $table->text('alamat_ortu')->nullable();

            $table->string('nama_ayah')->nullable();
            $table->string('tempat_lahir_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->enum('agama_ayah', ['Islam', 'Budha', 'Kristen Protestan', 'Hindu', 'Kristen Katolik', 'Konghuchu'])->nullable();
            $table->enum('kewarganegaraan_ayah', ['WNI', 'WNA'])->nullable();
            $table->enum('pendidikan_ayah', ['SD/Sederajat', 'SMP/MTs/Sederajat', 'SMA/MA/Sederajat', 'D1/D2/D3', 'S1', 'S2', 'S3'])->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('email_ayah')->nullable();
            $table->string('no_telepon_ayah')->nullable();
            
            $table->string('nama_ibu')->nullable();
            $table->string('tempat_lahir_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->enum('agama_ibu', ['Islam', 'Budha', 'Kristen Protestan', 'Hindu', 'Kristen Katolik', 'Konghuchu'])->nullable();
            $table->enum('kewarganegaraan_ibu', ['WNI', 'WNA'])->nullable();
            $table->enum('pendidikan_ibu', ['SD/Sederajat', 'SMP/MTs/Sederajat', 'SMA/MA/Sederajat', 'D1/D2/D3', 'S1', 'S2', 'S3'])->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('email_ibu')->nullable();
            $table->string('no_telepon_ibu')->nullable();

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
        Schema::dropIfExists('siswa_orang_tuas');
    }
}
