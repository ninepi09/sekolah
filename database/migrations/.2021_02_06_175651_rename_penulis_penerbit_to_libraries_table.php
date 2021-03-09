<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenamePenulisPenerbitToLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('libraries', function (Blueprint $table) {
            $table->bigInteger('sekolah_id')->unsigned()->nullable()->change();
            $table->bigInteger('kategori_id')->unsigned()->nullable()->change();
            $table->string('tingkat')->nullable()->change();
            $table->string('tahun_terbit')->nullable()->change();
            $table->string('link_video')->nullable()->change();
            $table->string('link_audio')->nullable()->change();
            $table->string('link_ebook')->nullable()->change();
            
            $table->renameColumn('penulis', 'penulis_id');
            $table->renameColumn('penerbit', 'penerbit_id');
            $table->renameColumn('Deskripsi', 'deskripsi');

            $table->foreign('sekolah_id')->references('id')->on('sekolahs')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('tipes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('libraries', function (Blueprint $table) {
            $table->renameColumn('penulis_id', 'penulis');
            $table->renameColumn('penerbit_id', 'penerbit');
            $table->renameColumn('deskripsi', 'Deskripsi');

            $table->dropForeign('libraries_sekolah_id_foreign');
            $table->dropForeign('libraries_kategori_id_foreign');
        });
    }
}
