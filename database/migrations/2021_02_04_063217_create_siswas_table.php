<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nis')->nullable();
            $table->string('nisn')->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->bigInteger('id_tingkatan_kelas')->unsigned();

            $table->string('nama_lengkap')->nullable();
            $table->string('nama_panggilan')->nullable();
            $table->string('no_ktp')->nullable()->unique();
            $table->enum('jk', ['Laki-Laki', 'Perempuan'])->nullable();
            $table->enum('agama', ['Islam', 'Budha', 'Kristen Protestan', 'Hindu', 'Kristen Katolik', 'Konghuchu'])->nullable();
            $table->enum('suku', ['Melayu', 'Aceh', 'Batak', 'Karo', 'Mandailing', 'Simalungun', 'Pak-Pak', 'Nias', 'Angkola', 'Jawa'])->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('berat_badan')->unsigned()->nullable();
            $table->integer('tinggi_badan')->unsigned()->nullable();
            $table->enum('golongan_darah', ['A', 'B', 'AB', 'O'])->nullable();
            $table->string('hobi')->nullable();
            $table->text('riwayat_penyakit')->nullable();
            $table->string('moda_transportasi')->nullable();
            $table->integer('jarak_rumah_sekolah')->unsigned()->nullable();
            $table->boolean('is_siswa_pindahan')->nullable()->default(false);
            $table->text('alamat_tinggal')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('no_telepon_rumah')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('foto')->nullable();

            $table->softDeletes();
            $table->timestamps();
            $table->foreign('id_tingkatan_kelas')->references('id')->on('tingkatan_kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
