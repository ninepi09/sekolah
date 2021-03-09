<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddViewedThumbnailToLibraries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('libraries', function (Blueprint $table) {
            $table->bigInteger('viewed')->default(0)->after('penerbit_id');
            $table->string('thumbnail')->nullable();
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
            //
        });
    }
}
