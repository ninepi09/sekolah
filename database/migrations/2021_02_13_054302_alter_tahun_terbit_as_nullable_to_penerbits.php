<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTahunTerbitAsNullableToPenerbits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penerbits', function (Blueprint $table) {
            $table->integer('tahun')->unsigned()->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penerbits', function (Blueprint $table) {
            //
        });
    }
}
