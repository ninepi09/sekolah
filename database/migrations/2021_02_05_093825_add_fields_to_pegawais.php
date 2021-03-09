<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToPegawais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pegawais', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->string('nik')->nullable();
            $table->string('gelar_depan', 50)->nullable();
            $table->string('gelar_belakang', 50)->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jk', ['Laki-Laki', 'Perempuan'])->nullable();
            $table->enum('agama', ['Islam', 'Budha', 'Kristen Protestan', 'Hindu', 'Kristen Katolik', 'Konghuchu'])->nullable();
            $table->boolean('is_menikah')->nullable();
            $table->text('alamat_tinggal')->nullable();
            $table->string('provinsi', 30)->nullable();
            $table->string('kabupaten', 30)->nullable();
            $table->string('kecamatan', 30)->nullable();
            $table->string('dusun')->nullable();
            $table->string('rt', 10)->nullable();
            $table->string('rw', 10)->nullable();
            $table->string('kode_pos', 20)->nullable();
            $table->string('no_telepon_rumah', 30)->nullable();
            $table->string('no_telepon', 30)->nullable();
            $table->string('email')->unique()->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->enum('bagian', ['Guru/Tenaga Pendidik', 'Teknisi', 'Laboran', 'Tenaga Kependidikan']);
            $table->string('tahun_ajaran', 20)->nullable();
            $table->enum('semester', ['Ganjil', 'Genap'])->nullable();
            $table->enum('jenjang', ['SD', 'SMP', 'SMK', 'SMA'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pegawais', function (Blueprint $table) {
            //
        });
    }
}
