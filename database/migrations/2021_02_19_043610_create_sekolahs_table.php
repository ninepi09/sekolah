<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_sekolah');
            $table->string('name');
            $table->text('alamat');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('jenjang');
            $table->string('tahun_ajaran');
			$table->string('logo')->nullable();
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
        Schema::dropIfExists('sekolahs');
    }
}
