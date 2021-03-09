<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ChangeDateTypeToPemilihanKandidats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemilihan_kandidats', function (Blueprint $table) {
            DB::statement("ALTER TABLE `pemilihan_kandidats` CHANGE `start_date` `start_date` VARCHAR(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL, CHANGE `end_date` `end_date` VARCHAR(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;");
            DB::statement("UPDATE `pemilihan_kandidats` SET start_date = NULL, end_date = NULL;");
            $table->date('start_date')->nullable()->change();
            $table->date('end_date')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemilihan_kandidats', function (Blueprint $table) {
        });
    }
}
