<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('sekolah_id');
            $table->unsignedBigInteger('kategori_id');
            $table->string('tingkat');
            $table->integer('tahun_terbit');
            $table->string('link_video');
            $table->string('link_audio');
            $table->string('link_ebook');
            $table->longText('Deskripsi');
            $table->unsignedBigInteger('penulis_id');
            $table->unsignedBigInteger('penerbit_id');
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
        Schema::dropIfExists('libraries');
    }
}
