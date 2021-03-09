<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPenulisPenerbitToLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('libraries', function (Blueprint $table) {
            $table->bigInteger('penulis_id')->unsigned()->nullable()->change();
            $table->bigInteger('penerbit_id')->unsigned()->nullable()->change();
            $table->string('deskripsi')->nullable()->change();

            $table->foreign('penulis_id')->references('id')->on('penulises')->onDelete('cascade');
            $table->foreign('penerbit_id')->references('id')->on('penerbits')->onDelete('cascade');
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
            $table->dropForeign('libraries_penulis_id_foreign');
            $table->dropForeign('libraries_penerbit_id_foreign');
        });
    }
}
